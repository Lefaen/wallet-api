<?php

namespace App\Services;

use App\Models\PaymentModel\PaymentModel;
use App\Models\RateModel\RateModel;
use App\Models\ReasonModel\ReasonModel;
use App\Models\TransactionModel\TransactionModel;
use App\Models\Wallet\WalletModel;
use App\DataTransferObject\UpdateWalletDto;

/**
 * Class WalletService
 * @package App\Services
 *
 * @author Pavel Parshin
 */
class WalletService
{
    /**
     * @param int $id
     * @return WalletModel
     */
    public function getOne(int $id): WalletModel
    {
        return WalletModel::findById($id);
    }

    /**
     * @param int $id
     * @param UpdateWalletDto $updateWalletDto
     * @return void
     */
    public function update(int $id, UpdateWalletDto $updateWalletDto): void
    {
        $transaction = TransactionModel::getFirstIdByColumn('name', $updateWalletDto->transaction->value, ['id']);
        $rate = RateModel::getFirstIdByColumn('currency', $updateWalletDto->rate->value, ['id', 'rate']);
        $reason = ReasonModel::getFirstIdByColumn('name', $updateWalletDto->reason->value, ['id']);
        $wallet = WalletModel::getFirstIdByColumn('user_id', $id, ['id', 'rate_id']);
        $rateId = $rate->getId();
        if ($wallet->getRateid() !== $rate->getId()) {
            $updateWalletDto->sum = $updateWalletDto->sum / $rate->getRate();
            $rateId = $wallet->getRateid();
        }
        PaymentModel::insert(
            [
                'transaction_id' => $transaction->getId(),
                'rate_id' => $rateId,
                'reason_id' => $reason->getId(),
                'wallet_id' => $wallet->getId(),
                'sum' => $updateWalletDto->sum,
            ]
        );
        WalletModel::updateBalance($wallet->getId());
    }
}