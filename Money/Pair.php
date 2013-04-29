<?php

class Pair
{
    private $from;
    private $to;

    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(Pair $pair)
    {
        return $this->from === $pair->from && $this->to === $pair->to;
    }

    public function hashCode()
    {
        return hash("md5", $this->from . $this->to);
    }

    public function __get($key)
    {
        return isset($this->$key) ? $this->$key : null;
    }
}
