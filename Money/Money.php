<?php

class Money
{
    protected $amount;

    public static function dollar($amount)
    {
        return new Dollar($amount, "USD");
    }

    public static function franc($amount)
    {
        return new Franc($amount, "CHF");
    }

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times($multiplier)
    {
        return null;
    }

    public function currency()
    {
        return $this->currency;
    }

    public function equals(Money $money)
    {
        return $this->amount === $money->amount && get_class($this) === get_class($money);
    }

    public function __toString() {
        return $this->amount . " " . $this->currency;
    }
}
