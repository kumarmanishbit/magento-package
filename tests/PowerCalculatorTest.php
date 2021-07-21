<?php


namespace Bronto\StarterPackage\Tests;


use Bronto\StarterPackage\PowerCalculator;
use PHPUnit\Framework\TestCase;

class PowerCalculatorTest extends TestCase
{
      /** @test **/
      public function convert_watt_hours_kwh() {
          $power = PowerCalculator::fromWattAndHour(100, 10);
          $this->assertEquals(1, $power->intoKWH());
      }
}
