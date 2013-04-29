<?php

class Bank
{
    public function reduce(Expression $source, $to)
    {
        $sum = $source;
        $amount = $sum->augend->amount() + $sum->addend->amount();
        return new Money($amount, $to);
    }
}
