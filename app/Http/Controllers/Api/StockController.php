<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStockRequest;
use App\Http\Requests\UpdateStockRequest;
use App\Http\Resources\SectionResource;
use App\Http\Resources\StockResource;
use App\Models\Stock;
use App\Services\StockService;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function __construct(
        private StockService $service
    ){}

    public function index()
    {
        $MyStocks = Stock::all();

        return StockResource::collection($MyStocks);
    }

    public function store(StoreStockRequest $request)
    {
        $newStock = $this->service->store($request->validated());

        $resource = new StockResource($newStock);

        return $resource->response()->setStatusCode(201);
    }

    public function update(UpdateStockRequest $request, Stock $stock)
    {
        $editStock = $this->service->update($stock, $request->validated());

        $resource = new StockResource($editStock);

        return $resource->response()->setStatusCode(200);
    }

    public function destroy(Stock $stock)
    {
        $this->service->destroy($stock);

        return response()->noContent();
    }
}
