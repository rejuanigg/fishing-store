<?php
namespace App\Services;

use App\Models\Image;
use Illuminate\Support\Arr;
use ReturnTypeWillChange;

class ImageService
{
    public function store(array $data)
    {
        return Image::create($data);
    }

    public function update(Image $image, array $data)
    {
        $image->update($data);
        return $image;
    }

    public function destroy(Image $image)
    {
        $image->delete();
    }
}
?>
