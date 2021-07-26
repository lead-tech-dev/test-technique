<?php 

namespace App;

use DateInterval;
use DatePeriod;
use DateTime;

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
        return new DatePeriod(
            new DateTime($this->startAbsencePeriod), 
            new DateInterval(self::INTERVAL), 
            new DateTime($this->endAbsencePeriod)
        );;
    }
}