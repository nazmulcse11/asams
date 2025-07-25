<?php

use App\Models\Profile;
use App\Services\Dropdowns\DropdownFactory;
use chillerlan\QRCode\QRCode;
use Laravolt\Avatar\Facade as Avatar;

/**
 * Generate a base64 encoded avatar image for a given name.
 *
 * @param string $name The name to generate the avatar for.
 * @return string Base64 encoded avatar image.
 */
if (!function_exists('avatar')) {
    function avatar(string $name): string
    {
        return Avatar::create($name)->toBase64();
    }
}


if (!function_exists('authAvatar')) {
    function authAvatar(mixed $data): string
    {
        if($data instanceof Profile) {
            return $data->picture;
        }
        return avatar($data);
    }
}

if ( !function_exists("arrayToObject") ) {
    function arrayToObject($array)
    {
        if (!is_array($array)) {
            return $array; // Return as is if not an array
        }

        $object = new stdClass();
        foreach ($array as $key => $value) {
            $object->$key = arrayToObject($value); // Recursively convert nested arrays
        }

        return $object;
    }
}

if (!function_exists('getGreeting')) {
    function getGreeting(): string
    {
        $hour = now()->hour; // Get current hour (24-hour format)

        if ($hour >= 5 && $hour < 12) {
            return "Good Morning";
        } elseif ($hour >= 12 && $hour < 17) {
            return "Good Afternoon";
        } elseif ($hour >= 17 && $hour < 21) {
            return "Good Evening";
        } else {
            return "Good Night";
        }
    }
}

if (!function_exists('qr')) {
    function qr(string $data): string
    {
        return (new QRCode)->render($data);
    }
}
if (!function_exists('bar')) {
    function bar(string $data)
    {
        $barcode = (new Picqer\Barcode\Types\TypeCode128())->getBarcode($data);

        $renderer = new Picqer\Barcode\Renderers\HtmlRenderer();
        return $renderer->render($barcode);
    }
}

if (!function_exists('status')) {
    function status(string $type_name): object
    {
        $statuses = app(\App\Repositories\StatusRepository::class)->all(["type" => $type_name]);
        return arrayToObject($statuses->toArray());
    }
}

if (!function_exists('uuid')) {
    function uuid(): int
    {
        return (int) date('ymdHis');
    }
}

if (!function_exists('dropdown_options')) {
    function dropdown_options(string $type, array $filters = []): object
    {
        return arrayToObject(app(DropdownFactory::class)->getDropdown($type, $filters));
    }
}

if (!function_exists('getStatusId')) {
    function getStatusId(string $type_name, string $status_name): ?int
    {
        return \App\Models\Status::whereHas('type', function ($query) use ($type_name) {
            $query->where('name', $type_name);
        })
            ->where('name', $status_name)
            ?->first()
            ?->id ?? null;
    }
}
