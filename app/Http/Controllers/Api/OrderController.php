<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Resources\OrderDetailResource;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Services\OrderService;

class OrderController extends Controller
{
    public function __construct(
        private OrderService $service
    )
    {
    }

    public function store(StoreOrderRequest $request)
    {
        // OrderController — solo método store(). Recibe el request, llama al Service pasando $request->user() y $request->validated().
        $newOrder = $this->service->store($request->user(), $request->validated());

        $resource = new OrderResource($newOrder);

        return $resource->response()->setStatusCode(201);
    }
}
