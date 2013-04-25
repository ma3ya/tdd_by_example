<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Dollar.php';

/**
 * Dollar$B%/%i%9$N%F%9%H%3!<%I!#(B
 *
 * <pre>
 * ToDo
 * ====
 * - [ ] 2:1$B$N>l9g(B $5 + 10CHF = $10
 * - [x] $5 * 2 = $10
 * - [ ] amount$B$N%W%i%$%Y!<%H2=(B
 * - [ ] Dollar$B$NI{:nMQ(B
 * - [ ] Money$B$N4]$a=hM}(B
 * </pre>
 */
class DollarTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertSame(10, $five->amount);
    }
}
