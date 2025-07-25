<?php


namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;

class EnvFileService
{

    /**
     * @return Collection
     */
    public function getAllEnv() : Collection
    {
        $envDetails = DotenvEditor::getKeys();
        $envDetails = new Collection($envDetails);
        return $envDetails->map(function ($item, $key) {
            return [
                'key' => $key,
                'data' => $item,
            ];
        })->groupBy(function ($item, $key) {
            $key = explode('_', $key);
            return $key[0];
        });
    }

    /**
     * Get the specified env data.
     * @param  array  $env
     * @return Collection
     */
    public function getEnv(array $env) : Collection
    {
        $envDetails = DotenvEditor::getKeys($env);
        $envDetails = new Collection($envDetails);
        return $envDetails->map(function ($item, $key) {
            return [
                'key' => $key,
                'data' => $item,
            ];
        })->groupBy(function ($item, $key) {
            $key = explode('_', $key);
            return $key[0];
        });
    }

    /**
     * @param  array  $request
     * @return Collection
     */
    public function updateEnv(array $data) : Collection
    {
        foreach($data as $key => $value) {
            DotenvEditor::setKey($key, $value);
        }

        DotenvEditor::save();

        return $this->getEnv(array_keys($data));
    }


}
