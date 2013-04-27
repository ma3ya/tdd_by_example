<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Dollar.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Franc.php';

class MoneyTest extends PHPUnit_Framework_TestCase
{
    public function testDollarMultiplication()
    {
        $this->assertEquals(Money::dollar(10), Money::dollar(5)->times(2));
        $this->assertEquals(Money::dollar(15), Money::dollar(5)->times(3));
    }

    public function testFrancMultiplication()
    {
        $this->assertEquals(Money::franc(10), Money::franc(5)->times(2));
        $this->assertEquals(Money::franc(15), Money::franc(5)->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        $this->assertTrue(Money::franc(5)->equals(Money::franc(5)));
        $this->assertFalse(Money::franc(5)->equals(Money::franc(6)));
        $this->assertFalse(Money::franc(5)->equals(Money::dollar(5)));
    }

    public function testCurrency() {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }

    public function testDifferentClassEquality() {
        $this->assertTrue(
            (new Money(10, "CHF"))->equals(new Franc(10, "CHF"))
        );
    }
}
