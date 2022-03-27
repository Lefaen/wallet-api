<?php

namespace App\Controllers;

use App\DataTransferObject\UpdateWalletDto;
use App\Request\Request;
use App\Responses\EmptyResponse;
use App\Responses\WalletResponse;
use App\Services\WalletService;

/**
 * Class WalletController
 * @package App\Controllers
 *
 * @author Pavel Parshin
 */
class WalletController extends Controller
{
    /**
     * @var WalletService
     */
    private WalletService $walletService;

    /**
     *
     */
    public function __construct()
    {
        $this->walletService = new WalletService();
    }

    /**
     * @param int $id
     * @return WalletResponse
     */
    public function show(int $id): WalletResponse
    {
        $wallet = $this->walletService->getOne($id);
        return new WalletResponse($wallet);
    }

    /**
     * @param int $id
     * @return EmptyResponse
     */
    public function update(int $id): EmptyResponse
    {
        $walletDto = new UpdateWalletDto(Request::current());
        $this->walletService->update($id, $walletDto);
        return (new EmptyResponse())->setStatus(204);
    }
}