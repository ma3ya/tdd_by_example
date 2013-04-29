<?php

class Bank
{
    public function reduce(Expression $source, $to)
    {
        if ($source instanceof Money) {
            return $source;
        }

        $sum = $source;
        return $sum->reduce($to);
    }
}
