<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src/Dollar.php';

class DollarTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertSame(10, $five->amount);
    }
}
