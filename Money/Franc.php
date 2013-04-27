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
    protected $currency;

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = "CHF";
    }

    public function times($multiplier)
    {
        return Money::franc($this->amount * $multiplier);
    }
}
