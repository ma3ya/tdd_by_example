<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Money.php';
/**
 * Dollarクラス。
 *
 * <pre>
 * バリューオブジェクト
 * --------------------
 * コンストラクタで値を定義された後は決して変化しない。
 * </pre>
 */
class Dollar extends Money
{
    protected $currency;

    public function __construct($amount, $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times($multiplier)
    {
        return Money::dollar($this->amount * $multiplier);
    }
}
