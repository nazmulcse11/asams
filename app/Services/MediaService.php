<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaService
{
    /**
     * Upload a single media file to a model's media collection.
     *
     * @param Model $model
     * @param mixed $media
     * @param string $collection
     * @return void
     */
    public function uploadMedia(Model $model, $media, string $collection = "default"): void
    {
        $model->addMedia($media)->toMediaCollection($collection);
    }

    /**
     * Upload multiple media files to a model's media collection.
     *
     * @param Model $model
     * @param array $files
     * @param string $collection
     * @return void
     */
    public function uploadMultipleMedia(Model $model, array $files, string $collection = "default"): void
    {
        foreach ($files as $file) {
            $model->addMedia($file)->toMediaCollection($collection);
        }
    }

    /**
     * List all media from a specific collection.
     *
     * @param Model $model
     * @param string $collection
     * @return \Illuminate\Support\Collection
     */
    public function listMedia(Model $model, string $collection = 'default')
    {
        return $model->getMedia($collection);
    }

    /**
     * Retrieve a single media item by ID.
     *
     * @param Model $model
     * @param int $mediaId
     * @return Media|null
     */
    public function getMediaItem(Model $model, int $mediaId): ?Media
    {
        return $model->media()->find($mediaId);
    }

    /**
     * Update a single media file in a model's media collection.
     *
     * @param Model $model
     * @param mixed $media
     * @param string $collection
     * @return void
     */
    public function updateMedia(Model $model, $media, string $collection = "default"): void
    {
        $model->clearMediaCollection($collection);
        $model->addMedia($media)->toMediaCollection($collection);
    }

    /**
     * Update multiple media files in a model's media collection.
     *
     * @param Model $model
     * @param array $files
     * @param string $collection
     * @return void
     */
    public function updateMultipleMedia(Model $model, array $files, string $collection = "default"): void
    {
        $model->clearMediaCollection($collection);
        foreach ($files as $file) {
            $model->addMedia($file)->toMediaCollection($collection);
        }
    }

    /**
     * Delete all media from a model's media collection.
     *
     * @param Model $model
     * @param string $collection
     * @return void
     */
    public function deleteMedia(Model $model, string $collection = "default"): void
    {
        $model->getMedia($collection)->each(fn(Media $media) => $media->delete());
    }

    /**
     * Delete specific media by ID.
     *
     * @param Model $model
     * @param int $mediaId
     * @return bool
     */
    public function deleteSpecificMedia(Model $model, int $mediaId): bool
    {
        $media = $model->media()->find($mediaId);
        if ($media) {
            return $media->delete();
        }
        return false;
    }

    /**
     * Delete multiple specific media files by IDs.
     *
     * @param Model $model
     * @param array $mediaIds
     * @return void
     */
    public function deleteMultipleSpecificMedia(Model $model, array $mediaIds): void
    {
        $model->media()->whereIn('id', $mediaIds)->each(fn(Media $media) => $media->delete());
    }

    /**
     * Delete multiple media from a collection for multiple models.
     *
     * @param Collection $models
     * @param string $collection
     * @return void
     */
    public function deleteMultipleMedia(Collection $models, string $collection = "default"): void
    {
        foreach ($models as $model) {
            if (is_object($model) && method_exists($model, 'getMedia')) {
                $model->getMedia($collection)->each(fn(Media $media) => $media->delete());
            }
        }
    }
}
