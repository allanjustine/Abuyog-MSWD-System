<?php

namespace App\Helpers;

class MonthHelper
{
    public static function generateMonth()
    {
        $months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];

        return $months;
    }
}
