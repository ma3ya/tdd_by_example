<?php

class Bank
{
    public function reduce(Expression $source, $to)
    {
        return $source->reduce($to);
    }
}
