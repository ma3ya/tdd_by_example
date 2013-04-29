<?php

class Bank
{
    private $rates = array();

    public function reduce(Expression $source, $to)
    {
        return $source->reduce($this, $to);
    }

    public function addRate($from, $to, $rate)
    {
        $this->rates[(new Pair($from, $to))->hashCode()] = $rate;
    }

    public function rate($from, $to)
    {
        $rate = $this->rates[(new Pair($from, $to))->hashCode()];
        return (int)$rate;
    }
}
