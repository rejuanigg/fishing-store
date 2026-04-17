<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Arr;

class ProductService
{
    public function store(array $data)
    {
        $categories = Arr::pull($data, 'categories');
        $product = Product::create($data);
        $product->categories()->sync($categories);

        return $product;
    }

    public function update(Product $product, array $data)
    {
        $categories = Arr::pull($data, 'categories');
        $product->categories()->sync($categories);
        $product->update($data);
        return $product;
    }

    public function destroy(Product $product)
    {
        return $product->delete();
    }

}

?>
