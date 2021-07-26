<?php

require __DIR__.'./../vendor/autoload.php';

use App\Absence;
use App\MonthPeriod;

$monthPeriod = new MonthPeriod();

/*
//last day of previous month
$startAbsencePeriod = 'last day of previous month 00:00:00';
$endAbsencePeriod = 'last day of previous month 23:59:59';
// return false



//last day of previous month and first day of this month
$startAbsencePeriod = 'last day of previous month 00:00:00';
$endAbsencePeriod = 'first day of this month 23:59:59';
//return true


//first day of this month
$startAbsencePeriod = 'first day of this month 00:00:00';
$endAbsencePeriod = 'first day of this month 23:59:59';
//return true



//last day of this month
$startAbsencePeriod = 'last day of this month 00:00:00';
$endAbsencePeriod = 'last day of this month 23:59:59';
//return true



//last day of this month and first day of next month
$startAbsencePeriod = 'last day of this month 00:00:00';
$endAbsencePeriod = 'first day of next month 23:59:59';
//return true
*/

//first day of next month
$startAbsencePeriod = 'first day of next month 00:00:00';
$endAbsencePeriod = 'first day of next month 23:59:59';
//return false



$result = $monthPeriod->isInclusDansPeriode(new Absence($startAbsencePeriod, $endAbsencePeriod));

var_dump($result);