<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Money.php';
/**
 * Francクラス。
 *
 * <pre>
 * バリューオブジェクト
 * --------------------
 * コンストラクタで値を定義された後は決して変化しない。
 * </pre>
 */
class Franc extends Money
{
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Franc($this->amount * $multiplier);
    }
}
