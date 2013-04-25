<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Dollar.php';

/**
 * Dollarクラスのテストコード。
 *
 * <pre>
 * ToDo
 * ====
 * - [ ] 2:1の場合 $5 + 10CHF = $10
 * - [x] $5 * 2 = $10
 * - [ ] amountのプライベート化
 * - [x] Dollarの副作用
 * - [ ] Moneyの丸め処理
 * - [x] equals()
 * - [ ] hashCode()
 * </pre>
 */
class DollarTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertSame(10, $product->amount);
        $product = $five->times(3);
        $this->assertSame(15, $product->amount);
    }

    public function testEquality()
    {
        $object1 = new Dollar(5);
        $this->assertTrue($object1->equals(new Dollar(5)));
        $this->assertFalse($object1->equals(new Dollar(6)));
    }
}
