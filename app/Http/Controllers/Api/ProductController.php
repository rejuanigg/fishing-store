<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\User;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct(
        private ProductService $service
    ){}

    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    public function index()
    {
        $myProducts = Product::all();

        return ProductResource::collection($myProducts);
    }

    public function store(StoreProductRequest $request)
    {
        $newProduct = $this->service->store($request->validated());

        $resource = new ProductResource($newProduct);

        return $resource->response()->setStatusCode(201);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $editProduct = $this->service->update($product ,$request->validated());

        $resource = new ProductResource($editProduct);

        return $resource->response()->setStatusCode(200);
    }

    public function destroy(Product $product)
    {
        $this->service->destroy($product);

        return response()->noContent();
    }
}
