<?php
namespace App\Services;

use App\Models\Stock;

class StockService
{
    public function store(array $data)
    {
        return Stock::create($data);
    }

    public function update(Stock $stock, array $data)
    {
        $stock->update($data);
        return $stock;
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();
    }
}
?>
