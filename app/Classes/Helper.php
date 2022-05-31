<?php

namespace App\Classes;

class Helper
{
    public static function formatNumber($number)
    {
        return 'tel:' . preg_replace("/[^0-9+]/", "", $number);
    }

    public static function getLocaleLinks($key)
    {
        return str_replace('/' . app()->getLocale(), '/' . $key, url()->current());
    }

    public static function getImagePath($record)
    {
        if (str_contains($record, '|')) {
            $paths = explode('|', $record);
            $images = [];
            foreach ($paths as $path) {
                $images[] = asset('storage/images/' . $path);
            }
            return $images;
        }

        return asset('storage/images/' . $record);
    }
}
