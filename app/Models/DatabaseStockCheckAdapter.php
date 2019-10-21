<?php

namespace App\Services;
use App\Product;
use App\Interfaces\StockCheckerInterface;


class DatabaseStockCheckAdapter implements StockCheckerInterface
{
    public  function getStock($sku)
    {
        // Какой-то запрос к базе данных для поиска товара на складе
        $product = Product::whereSku($sku)->first();
        return $product->qty;
    }
}
