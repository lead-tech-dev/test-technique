<?php

require __DIR__.'./../vendor/autoload.php';

use App\MonthPeriod;

$monthPeriod = new MonthPeriod();

$startAbsencePeriod = new DateTime('last day of previous month 00:00:00');
$endAbsencePeriod = new DateTime('fist day of this month 23:59:99');