<?php

namespace Nguyenvc\DateFormatter;

use DateTime;

final class DateFormatter
{
    public static function format(string $date): string
    {
        $dateObject = DateTime::createFromFormat('Y-m-d', $date);

        return $dateObject->format('Y/m/d');
    }
}