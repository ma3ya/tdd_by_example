<?php

class Money implements Expression
{
    protected $amount;

    public static function dollar($amount)
    {
        return new Money($amount, "USD");
    }

    public static function franc($amount)
    {
        return new Money($amount, "CHF");
    }

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times($multiplier)
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function currency()
    {
        return $this->currency;
    }

    public function amount()
    {
        return $this->amount;
    }

    public function equals(Money $money)
    {
        return $this->amount === $money->amount &&
               $this->currency() === $money->currency();
    }

    public function plus(Money $addend)
    {
        return new Sum($this, $addend);
    }

    public function __toString() {
        return $this->amount . " " . $this->currency;
    }
}
