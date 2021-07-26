<?php

namespace App;

use DateTime;

class MonthPeriod {
    private $startMonthPeriod;
    private $endMonthPeriod;

    public function __construct()
    {
        $this->startMonthPeriod = new DateTime('first day of this month 00:00:00');
        $this->endMonthPeriod = new DateTime('first day of next month 00:00:00');
    }

    public function isInclusDansPeriode(Absence $absence): bool
    {
        var_dump(is_object($absence));
        foreach($absence->getAbsencePeriod() as $value) {
            if ($value >= $this->startMonthPeriod && $value < $this->endMonthPeriod) {
                return true;
            }
        }
        return false;
    }

    
}