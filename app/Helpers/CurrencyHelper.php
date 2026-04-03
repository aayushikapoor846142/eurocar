<?php

namespace App\Helpers;

class CurrencyHelper
{
    /**
     * Exchange rates relative to EUR (base currency)
     * Update these rates regularly or integrate with an API
     */
    protected static $rates = [
        'EUR' => 1.00,
        'USD' => 1.08,
        'GBP' => 0.86,
        'CZK' => 24.50,
    ];

    /**
     * Convert amount from EUR to target currency
     *
     * @param float $amount
     * @param string $targetCurrency
     * @return float
     */
    public static function convert($amount, $targetCurrency = null)
    {
        if (!$targetCurrency) {
            $targetCurrency = session('currency', config('app.default_currency'));
        }

        if (!isset(self::$rates[$targetCurrency])) {
            return $amount;
        }

        return round($amount * self::$rates[$targetCurrency], 2);
    }

    /**
     * Format amount with currency symbol
     *
     * @param float $amount
     * @param string $currency
     * @return string
     */
    public static function format($amount, $currency = null)
    {
        if (!$currency) {
            $currency = session('currency', config('app.default_currency'));
        }

        $convertedAmount = self::convert($amount, $currency);
        $symbol = config('app.currency_symbols')[$currency] ?? $currency;

        return $symbol . ' ' . number_format($convertedAmount, 2);
    }

    /**
     * Get current currency
     *
     * @return string
     */
    public static function current()
    {
        return session('currency', config('app.default_currency'));
    }

    /**
     * Get currency symbol
     *
     * @param string $currency
     * @return string
     */
    public static function symbol($currency = null)
    {
        if (!$currency) {
            $currency = self::current();
        }

        return config('app.currency_symbols')[$currency] ?? $currency;
    }
}
