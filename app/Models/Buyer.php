<?php

namespace App\Models;

use App\Notifications\Auth\BuyerResetPasswordNotification;
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

class Buyer extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\BuyerFactory> */
    use HasFactory, SoftDeletes, Notifiable, AutoLogsActivity;

    protected $fillable = [
        'agent_id',
        'buyer_type_id',
        'username',
        'email',
        'phone',
        'preferred_contact',
        'status_id',
        'password',
        'email_verified_at',
        'phone_verified_at',
        'remember_token',
    ];


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
     * The accessors to append to the model's array form.
     *
     * @var array<string>
     */
    protected $appends = ['status_name'];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new BuyerResetPasswordNotification($token));
    }

    protected static function booted()
    {
        static::creating(function ($payment) {
            if (empty($payment->public_id)) {
                $payment->public_id = 'BYR-' . uuid();
            }

            if(empty($payment->uuid)) {
                $payment->uuid = uuid();
            }
        });
    }

    /**
     * Get the status associated with the Buyer
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
     * Get the status name associated with the Buyer
     *
     * @return string
     */
    public function getStatusNameAttribute(): string
    {
        return $this->status->name;
    }

    /**
     * Get the profile associated with the Agent
     *
     * @return MorphOne<\App\Models\Profile>
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

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class, 'agent_id', 'id')->withDefault(function (){
            return (object) ['username' => 'N/A'];
        });
    }

    public function buyerShops(): HasMany
    {
        return $this->hasMany(BuyerShop::class, 'buyer_id', 'id');
    }

    public function shops(): HasManyThrough
    {
        return $this->hasManyThrough(Shop::class, BuyerShop::class, 'buyer_id', 'id', 'id', 'shop_id');
    }

    public function payments()
    {
        return $this->hasMany(BuyerPayment::class);
    }

    public function shopPayments(mixed $shopId)
    {
        return $this->hasMany(BuyerPayment::class)->where('shop_id', $shopId);
    }

    public function userPropertyLinks(): MorphMany
    {
        return $this->morphMany(UserPropertyLink::class, 'user');
    }
}
