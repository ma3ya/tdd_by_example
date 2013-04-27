<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Dollar.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Franc.php';

class MoneyTest extends PHPUnit_Framework_TestCase
{
    public function testDollarMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }

    public function testFrancMultiplication()
    {
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $dollar = Money::dollar(5);
        $this->assertTrue($dollar->equals(Money::dollar(5)));
        $this->assertFalse($dollar->equals(Money::dollar(6)));
        $franc = new Franc(5);
        $this->assertTrue($franc->equals(new Franc(5)));
        $this->assertFalse($franc->equals(new Franc(6)));

        $this->assertFalse($franc->equals(Money::dollar(5)));
    }
}
