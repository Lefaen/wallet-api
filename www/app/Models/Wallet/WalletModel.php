<?php

namespace App\Models\Wallet;

use App\Models\Model;

class WalletModel extends Model
{
    protected string $table = 'wallets';

    protected int $id;

    protected float $balance;

    protected int $rate_id;

    public function getId()
    {
        return $this->id;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getRateid(): int
    {
        return $this->rate_id;
    }

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
}