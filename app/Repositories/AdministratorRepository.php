<?php

namespace App\Repositories;

use App\Filters\AdministratorFilter;
use App\Models\User;
use App\Repositories\Contracts\AdministratorRepositoryInterface;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class AdministratorRepository implements AdministratorRepositoryInterface
{
    use OptionalRepositoryTrait, BaseRepositoryTrait, SoftDeletesRepositoryTrait;

    protected AdministratorFilter $filter;

    public function __construct(AdministratorFilter $filter, User $model)
    {
        $this->filter = $filter;
    }

    protected function getModel(): Model
    {
        return new User();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        $length = $request->input('length', 10);
        $start = $request->input('start', 0);

        $query = User::with(['status'])->select(['id', 'username', 'email', 'phone', 'status_id', 'created_at']);

        $filtered = $this->filter->apply($query, $request);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', ($start / $length) + 1);
    }

    public function withRelationships(array $relationships): LengthAwarePaginator
    {
        return $this->getModel()->with($relationships)->latest()->paginate();
    }

    public function findById(int $id): ?User
    {
        return $this->findByWithRelationships(['id' => $id], ['profile', 'addresses'])->first();
    }

    public function create(array $attributes): User
    {
        return $this->saveAdministratorDetails(new User(), $attributes);
    }

    public function update(User $administrator, array $attributes): ?User
    {
        return $this->saveAdministratorDetails($administrator, $attributes);
    }

    protected function saveAdministratorDetails(User $administrator, array $attributes): User
    {
        // Save basic employee data (create or update)
        $administrator->fill([
            "username" => $administrator->exists ? $administrator->username : $attributes['username'],
            'email' => $attributes['email'],
            'phone' => (string) $attributes['phone'] ?? null,
            'status_id' => $attributes['status_id'],
            "password" => $administrator->exists ? $administrator->password : bcrypt($attributes['password'])
        ])->save();


        // Save profile (either create or update)
        $administrator->profile()->updateOrCreate([], $attributes);

        // Sync addresses (delete old and create new)
        $administrator->addresses()->updateOrCreate([], $attributes);

        return $administrator;
    }
}
