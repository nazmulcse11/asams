<?php

namespace App\Models;

use App\Notifications\Auth\AgentResetPasswordNotification;
use App\Traits\AutoLogsActivity;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Agent extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes, AutoLogsActivity;

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
        'deposit_amount',
        'status',
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
        $this->notify(new AgentResetPasswordNotification($token));
    }

    protected static function booted()
    {
        static::creating(function ($payment) {
            if (empty($payment->public_id)) {
                $payment->public_id = 'AGT-' . uuid();
            }
        });
    }

    /**
     * Get the profile associated with the Agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne<\App\Models\Profile>
     */
    public function profile(): MorphOne
    {
        return $this->morphOne(Profile::class, 'profileable');
    }

    /**
     * Get the addresses associated with the Agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\App\Models\Address>
     */
    public function addresses(): MorphMany
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    /**
     * Get the status associated with the Agent
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

    public function buyer(): HasMany
    {
        return $this->hasMany(Buyer::class);
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
        )->where('user_property_links.user_type', Agent::class);
    }

    public function agentShops(): HasMany
    {
        return $this->hasMany(AgentShop::class);
    }

    public function shops(): HasManyThrough
    {
        return $this->hasManyThrough(Shop::class, AgentShop::class, 'agent_id', 'id', 'id', 'shop_id');
    }
}
