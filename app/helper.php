<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

if (! function_exists('translatedRoutePart')) {
    function translatedRoutePart($part)
    {
        if (app()->getLocale() == 'en') {
            return app()->getLocale() . '/' . LaravelLocalization::transRoute('routes.nav.' . $part);
        }

        return LaravelLocalization::transRoute('routes.nav.' . $part);
    }
}
