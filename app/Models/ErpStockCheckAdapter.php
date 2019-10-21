<?php

namespace App\Services;
use App\Vendor\Erp;
use App\Interfaces\StockCheckerInterface;

class ErpStockCheckAdapter implements StockCheckerInterface
{
    public function getStock($sku)
    {
        // Создаем экземпляра класса
        $erp = new Erp($sku);
        // Делаем запрос для получения запаса через сторонний метод
        $result = $erp->checkStock();
        // Возвращаем количество нужного товара
        return $result['qty'];
    }
}
