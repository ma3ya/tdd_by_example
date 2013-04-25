<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Franc.php';

class FrancTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $object1 = new Franc(5);
        $this->assertTrue($object1->equals(new Franc(5)));
        $this->assertFalse($object1->equals(new Franc(6)));
    }
}
