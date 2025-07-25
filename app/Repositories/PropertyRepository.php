<?php

namespace App\Repositories;

use App\Filters\PropertyFilter;
use App\Models\Property;
use App\Models\PropertyFeature;
use App\Repositories\Contracts\PropertyRepositoryInterface;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class PropertyRepository implements PropertyRepositoryInterface
{

    use BaseRepositoryTrait, OptionalRepositoryTrait;

    protected PropertyFilter $filter;

    public function __construct(PropertyFilter $filter)
    {
        $this->filter = $filter;
    }

    public function getModel(): Model
    {
        return new Property();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);
        $page = max(1, (int) floor($start / $length) + 1); // Ensure valid page number

        $query = $this->getModel()::with(['propertyType:id,name'])
            ->select([
                'id',
                'name',
                'property_type_id',
                'address',
                'number_of_floors',
                'latitude',
                'longitude',
                'contact_person',
                'contact_number',
                'length',
                'wide',
                'created_at'
            ]);
        $filtered = $this->filter->apply($query, $request);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }

    public function deleteBulk(array $ids): bool
    {
        $properties = $this->getModel()->whereIn('id', $ids)->get();

        if ($properties->isEmpty()) {
            return false;
        }

        foreach ($properties as $property) {
            $property->delete();
        }

        return true;
    }

    public function dropdown(array $select = ["*"], array $conditions = []): SupportCollection|\Illuminate\Database\Eloquent\Collection|\Illuminate\Contracts\Pagination\LengthAwarePaginator|Paginator|null
    {
        return $this
            ->getModel()
            ->select($select)
            ->when(!empty($conditions), function ($query) use ($conditions) {
                foreach ($conditions as $field => $value) {
                    if ($field === 'buyer') {
                        // Filter properties via the Installment relationship
                        $query->whereHas('installments', function ($q) use ($value) {
                            $q->where('buyer_id', $value);
                        });
                    } elseif (is_array($value) && count($value) === 2) {
                        // Example: ['price' => ['>', 100]] → WHERE price > 100
                        $query->where($field, $value[0], $value[1]);
                    } else {
                        // Default: WHERE field = value
                        $query->where($field, '=', $value);
                    }
                }
            })
            ->latest()
            ->get();
    }
}
