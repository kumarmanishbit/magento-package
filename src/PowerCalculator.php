<?php


namespace Bronto\StarterPackage;


class PowerCalculator
{
    private float $watt;
    private float $hours;

    public function __construct(float $watt, float $hours){

        $this->watt = $watt;
        $this->hours = $hours;
    }

    public static function fromWattAndHour(float $watt, float $hours): self {
        return new static($watt, $hours);
    }

    public function intoKWH():float {
        return ($this->watt * $this->hours) / 1000;
    }
}
