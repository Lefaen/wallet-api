<?php

namespace App\Models\Wallet;

use App\Models\Model;

/**
 * Class WalletModel
 * @package App\Models\Wallet
 *
 * @author Pavel Parshin
 */
class WalletModel extends Model
{
    /**
     * @var string
     */
    protected string $table = 'wallets';

    /**
     * @var int
     */
    protected int $id;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var int
     */
    protected int $rate_id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @return int
     */
    public function getRateid(): int
    {
        return $this->rate_id;
    }

    /**
     * @param $walletId
     * @return void
     */
    public static function updateBalance($walletId): void
    {
        $model = new WalletModel();
        $sumSelect = "select sum(sum) from payments join reasons on reasons.id=payments.reason_id where payments.wallet_id =wallets.id";
        $stockSelect = $sumSelect . " and reasons.name='stock'";
        $refundSelect = $sumSelect . " and reasons.name='refund'";
        $model->database->query(
            "update wallets set balance = (($stockSelect)-($refundSelect)) where wallets.id = ?",
            [$walletId]
        );
    }

    /**
     * @return WalletModel
     */
    public static function getRefundInLast7Days(): WalletModel
    {
        $model = new WalletModel();
        $object = $model->database->query(
            "select sum(p.sum) from payments as p
                    join reasons r on r.id = p.reason_id
                    where r.name = 'refund' and p.datetime >= now() - interval '7 day'"
        );
        $model->setDataFromStdClass($object);
        return $model;
    }
}