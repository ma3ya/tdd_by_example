<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Dollar.php';

class DollarTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testEquality()
    {
        $object1 = new Dollar(5);
        $this->assertTrue($object1->equals(new Dollar(5)));
        $this->assertFalse($object1->equals(new Dollar(6)));
    }
}
