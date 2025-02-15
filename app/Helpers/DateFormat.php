<?php

use Carbon\Carbon;

if (!function_exists('dateFormat')) {
    function dateFormat($date, $format = 'd M Y')
    {
        setlocale(LC_TIME, 'id_ID.UTF-8');
        Carbon::setLocale('id');
        return Carbon::parse($date)->translatedFormat($format);
    }
}

if (!function_exists('dateFormatDay')) {
    function dateFormatDay($date, $format = 'd')
    {
        setlocale(LC_TIME, 'id_ID.UTF-8');
        Carbon::setLocale('id');
        return Carbon::parse($date)->translatedFormat($format);
    }
}
if (!function_exists('dateFormatMonth')) {
    function dateFormatMonth($date, $format = 'M')
    {
        setlocale(LC_TIME, 'id_ID.UTF-8');
        Carbon::setLocale('id');
        return Carbon::parse($date)->translatedFormat($format);
    }
}
if (!function_exists('dateFormatYear')) {
    function dateFormatYear($date, $format = 'Y')
    {
        setlocale(LC_TIME, 'id_ID.UTF-8');
        Carbon::setLocale('id');
        return Carbon::parse($date)->translatedFormat($format);
    }
}
