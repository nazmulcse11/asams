<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Profile extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $fillable = [
        'profileable_id',
        'profileable_type',
        'first_name',
        'last_name',
        'blood_group_id',
        'nid',
        'biography',
        'date_of_birth',
        'gender_id',
        'marital_status_id',
        'last_login',
        'last_ip',
    ];

    protected $appends = [
        'blood_group_name',
        'gender_name',
        'marital_status_name',
        'picture',
        'cover',
        'nid_copy',
        'full_name',
        'age',
    ];

    protected $dates = ['last_login'];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    /**
     * Get the model associated with the profile.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function profileable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Register the media collections.
     *
     * @param  \Spatie\MediaLibrary\MediaCollections\Models\Media|null  $media
     * @return void
     */
    public function registerMediaCollections(?Media $media = null): void
    {
        $this
            ->addMediaConversion("picture")
            ->fit(Fit::Contain, 430, 430)
            ->nonQueued();

        $this
            ->addMediaConversion("cover")
            ->fit(Fit::Contain, 1000, 256)
            ->nonQueued();

        $this
            ->addMediaConversion("nid_copy")
            ->fit(Fit::Contain, 268, 170)
            ->nonQueued();
    }

    /**
     * Get the profile picture URL attribute.
     *
     * @return string
     */
    public function getPictureAttribute(): string
    {
        $media = $this->getFirstMedia('picture');

        if ($media) {
            return $media->getUrl('picture');
        }

        return avatar($this->first_name . ' ' . $this->last_name);
    }

    /**
     * Get the profile picture URL attribute.
     *
     * @return string|null
     */
    public function getCoverAttribute(): ?string
    {
        $media = $this->getFirstMedia('cover');
        if ($media) {
            return $media->getUrl('cover');
        }

        return null;
    }

    /**
     * Get the profile picture URL attribute.
     *
     * @return string|null
     */
    public function getNidCopyAttribute(): ?string
    {
        $media = $this->getFirstMedia('nid_copy');
        if ($media) {
            return $media->getUrl('nid_copy');
        }

        return null;
    }

    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this->date_of_birth)->age;
    }

    /**
     * Get the blood group associated with the profile.
     *
     * @return BelongsTo
     */
    public function bloodGroup(): BelongsTo
    {
        return $this->belongsTo(BloodGroup::class, 'blood_group_id', 'id')->withDefault(function(){
            return (object) ['name' => 'N/A'];
        });
    }

    public function getBloodGroupNameAttribute()
    {
        return $this->bloodGroup->name;
    }

    /**
     * Get the gender associated with the profile.
     *
     * @return BelongsTo
     */
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id')->withDefault(function(){
            return (object) ['name' => 'N/A'];
        });
    }

    public function getGenderNameAttribute()
    {
        return $this->gender->name;
    }

    /**
     * Get the marital status associated with the profile.
     *
     * @return BelongsTo
     */
    public function maritalStatus()
    {
        return $this->belongsTo(Marital::class, 'marital_status_id', 'id')->withDefault(function(){
            return (object) ['name' => 'N/A'];
        });
    }

    public function getMaritalStatusNameAttribute()
    {
        return $this->maritalStatus->name;
    }

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
