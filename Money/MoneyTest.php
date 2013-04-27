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
        $five = Money::franc(5);
        $this->assertEquals(Money::franc(10), $five->times(2));
        $this->assertEquals(Money::franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $dollar = Money::dollar(5);
        $this->assertTrue($dollar->equals(Money::dollar(5)));
        $this->assertFalse($dollar->equals(Money::dollar(6)));
        $franc = Money::franc(5);
        $this->assertTrue($franc->equals(Money::franc(5)));
        $this->assertFalse($franc->equals(Money::franc(6)));

        $this->assertFalse($franc->equals(Money::dollar(5)));
    }
}
