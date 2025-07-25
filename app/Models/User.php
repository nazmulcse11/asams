<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\Auth\AdminResetPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable // implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'email',
        'phone',
        'password',
        'status_id',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<string>
     */
    protected $appends = ['status_name'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'phone_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    /**
     * Customize the activity log options for the Agent model.
     *
     * @return LogOptions
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['id', 'username', 'email']) // customize what to track
            ->useLogName('agent')        // helpful for filtering
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    /**
     * Get the profile associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne<\App\Models\Profile>
     */
    public function profile(): MorphOne
    {
        return $this->morphOne(Profile::class, 'profileable');
    }

    /**
     * Get the addresses associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\App\Models\Address>
     */
    public function addresses(): MorphMany
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    /**
     * Get the status associated with the Admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\Status>
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id', 'id')->withDefault(function (){
            return (object) ['name' => 'N/A'];
        });
    }

    /**
     * Get the status name associated with the Employee
     *
     * @return string
     */
    public function getStatusNameAttribute()
    {
        return $this->status->name;
    }

    public function propertyLinks(): MorphMany
    {
        return $this->morphMany(UserPropertyLink::class, 'user');
    }

    public function properties(): HasManyThrough
    {
        return $this->hasManyThrough(
            Property::class,
            UserPropertyLink::class,
            'user_id',     // Foreign key on UserPropertyLink
            'id',          // Local key on Property
            'id',          // Local key on Agent
            'property_id'  // Foreign key on UserPropertyLink
        )->where('user_property_links.user_type', User::class);
    }
}
