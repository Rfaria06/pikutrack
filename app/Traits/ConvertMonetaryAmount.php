<?php

namespace App\Traits;

trait ConvertMonetaryAmount
{
    /**
     * This function takes the amount represented in the form (CHF)
     * and converts it back to the amount in cents
     *
     * @param  string  $input  The monetary amount from the html input element
     * @return int The amount converted to cents
     */
    private function centsFromChf(string $chf): int
    {
        $amount = (float) number_format($chf, 2, '.', '');

        return intval(floor($amount * 100));
    }

    /**
     * Converts the amount in cents to CHF
     *
     * @param  int  $cents  The cents
     * @return float The cents converted to CHF
     */
    private function chfFromCents(int $cents): float
    {
        return $cents / 100;
    }
}
