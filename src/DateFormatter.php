<?php

namespace Nguyenvc\DateFormatter;

use DateTime;

final class DateFormatter
{
    public static function format(string $date): string
    {
        DateTime::createFromFormat('Y-m-d', $date);
    }
}