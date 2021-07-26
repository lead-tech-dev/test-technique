<?php 

namespace App;

use DatePeriod;

class Absence {
    const INTERVAL = 'P1D';

    private $startAbsencePeriod;
    private $endAbsencePeriod;

    public function __construct($startAbsencePeriod, $endAbsencePeriod)
    {
        $this->startAbsencePeriod = $startAbsencePeriod;
        $this->endAbsencePeriod = $endAbsencePeriod;
    }


    public function getAbsencePeriod() {
        $absencePeriod = DatePeriod($this->startAbsencePeriod, self::INTERVAL, $this->endAbsencePeriod);
        return $absencePeriod;
    }
}