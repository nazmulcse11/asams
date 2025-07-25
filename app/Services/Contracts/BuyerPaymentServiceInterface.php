<?php

namespace App\Services\Contracts;

use App\Models\BuyerPayment;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface BuyerPaymentServiceInterface
{
    public function getAllBuyerPayments(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getBuyerPaymentById(mixed $id): ?BuyerPayment;

    public function storeBuyerPayment(array $data): ?BuyerPayment;
}
