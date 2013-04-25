<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Dollar.php';

class DollarTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertSame(10, $five->amount);
    }
}
