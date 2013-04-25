<?php
/**
 * Dollarクラス。
 *
 * <pre>
 * バリューオブジェクト
 * --------------------
 * コンストラクタで値を定義された後は決して変化しない。
 * </pre>
 */
class Dollar
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $dollar)
    {
        return $this->amount === $dollar->amount;
    }
}
