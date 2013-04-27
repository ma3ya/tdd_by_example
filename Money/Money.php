<?php

abstract class Money
{
    protected $amount;

    public static function dollar($amount)
    {
        return new Dollar($amount);
    }

    public static function franc($amount)
    {
        return new Franc($amount);
    }

    abstract public function times($multiplier);

    public function currency()
    {
        return $this->currency;
    }

    public function equals(Money $money)
    {
        return $this->amount === $money->amount && get_class($this) === get_class($money);
    }
}
