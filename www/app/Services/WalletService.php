<?php

namespace App\Services;

use App\Models\Wallet\WalletModel;

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
}