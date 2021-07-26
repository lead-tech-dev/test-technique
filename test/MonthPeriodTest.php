<?php

use App\Absence;
use App\MonthPeriod;
use PHPUnit\Framework\TestCase;

class MonthPeriodTest extends TestCase {
    private $monthPeriod;

    public function setUp() {
        $this->monthPeriod = new MonthPeriod();
    }

    public function testLastDayOfPreviousMonth() {
        $startAbsencePeriod = 'last day of previous month 00:00:00';
        $endAbsencePeriod = 'last day of previous month 23:59:59';

        $this->assertFalse($this->monthPeriod->isInclusDansPeriode(new Absence($startAbsencePeriod, $endAbsencePeriod)), "Dois retourner false!");
    }

    public function testLastDayOfPreviousMonthAndFirstDayOfThisMonth() {
        $startAbsencePeriod = 'last day of previous month 00:00:00';
        $endAbsencePeriod = 'first day of this month 23:59:59';

        $this->assertTrue($this->monthPeriod->isInclusDansPeriode(new Absence($startAbsencePeriod, $endAbsencePeriod)), "Dois retourner true!");
    }

    public function testFirstDayOfThisMonth() {
        $startAbsencePeriod = 'first day of this month 00:00:00';
        $endAbsencePeriod = 'first day of this month 23:59:59';

        $this->assertTrue($this->monthPeriod->isInclusDansPeriode(new Absence($startAbsencePeriod, $endAbsencePeriod)), "Dois retourner true!");
    }


    public function testLastDayOfThisMonth() {
        $startAbsencePeriod = 'last day of this month 00:00:00';
        $endAbsencePeriod = 'last day of this month 23:59:59';

        $this->assertTrue($this->monthPeriod->isInclusDansPeriode(new Absence($startAbsencePeriod, $endAbsencePeriod)), "Dois retourner true!");
    }

    public function testLastDayOfThisMonthAndFirstDayOfNextMonth() {
        $startAbsencePeriod = 'last day of this month 00:00:00';
        $endAbsencePeriod = 'first day of next month 23:59:59';

        $this->assertTrue($this->monthPeriod->isInclusDansPeriode(new Absence($startAbsencePeriod, $endAbsencePeriod)), "Dois retourner true!");
    }

    public function testFirstDayOfNextMonth() {
        $startAbsencePeriod = 'first day of next month 00:00:00';
        $endAbsencePeriod = 'first day of next month 23:59:59';

        $this->assertFalse($this->monthPeriod->isInclusDansPeriode(new Absence($startAbsencePeriod, $endAbsencePeriod)), "Dois retourner false!");
    }
    
}