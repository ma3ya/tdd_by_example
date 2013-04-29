<?php

class Bank
{
    public function reduce(Expression $source, $to)
    {
        return $source->reduce($this, $to);
    }

    public function addRate($from, $to, $rate)
    {
    }
}
