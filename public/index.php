<?php

require __DIR__.'./../vendor/autoload.php';

use App\Absence;
use App\MonthPeriod;

$monthPeriod = new MonthPeriod();

$startAbsencePeriod = new DateTime('last day of previous month 00:00:00');
$endAbsencePeriod = new DateTime('first day of this month 23:59:59');

$result = $monthPeriod->isInclusDansPeriode(new Absence($startAbsencePeriod, $endAbsencePeriod));

//var_dump($result);