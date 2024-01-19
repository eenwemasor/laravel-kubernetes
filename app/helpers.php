<?php

if (!function_exists('formattedAmount')) {
    function formattedAmount($amount)
    {
        $formatter = new \NumberFormatter("en_NG", \NumberFormatter::CURRENCY);
        return  $formatter->formatCurrency($amount,  "NGN");
    }
}

if (!function_exists('formatSizes')) {
    function formatSizes($sizes)
    {
        return collect($sizes)->map(function ($value, $key) {
            return "$key: $value";
        })->implode(', ');
    }
}


