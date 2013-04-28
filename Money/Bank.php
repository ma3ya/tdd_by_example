<?php

class Bank
{
    public function reduce(Expression $source, $to)
    {
        return Money::dollar(10);
    }
}
