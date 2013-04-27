<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Money.php';

class MoneyTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $this->assertEquals(Money::dollar(10), Money::dollar(5)->times(2));
        $this->assertEquals(Money::dollar(15), Money::dollar(5)->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        $this->assertFalse(Money::franc(5)->equals(Money::dollar(5)));
    }

    public function testCurrency() {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }
}
