<?php

class Bank
{
    public function reduce(Expression $source, $to)
    {
        $sum = $source;
        return $sum->reduce($to);
    }
}
