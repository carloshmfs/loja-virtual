<?php

if (!function_exists('convertDbCurrencyToView')) {
    function convertDbCurrencyToView(int $value): string {
        return 'R$ '. number_format($value / 100, 2, ',', '.');
    }
}
