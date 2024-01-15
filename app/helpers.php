<?php

if (!function_exists('formattedAmount')) {
    function formattedAmount($amount)
    {
        $formatter = new \NumberFormatter("en_NG", \NumberFormatter::CURRENCY);
        return  $formatter->formatCurrency($amount,  "NGN");
    }
}