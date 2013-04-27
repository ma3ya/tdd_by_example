<?php

abstract class Money
{
    protected $amount;

    public static function dollar($amount)
    {
        return new Dollar($amount);
    }

    abstract public function times($multiplier);

    public function equals(Money $money)
    {
        return $this->amount === $money->amount && get_class($this) === get_class($money);
    }
}
