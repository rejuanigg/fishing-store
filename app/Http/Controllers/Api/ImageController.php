<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Http\Resources\ImageResource;
use App\Models\Image;
use App\Services\ImageService;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __construct(
        private ImageService $service
    ){}

    public function index()
    {
        $myImages = Image::all();

        return ImageResource::collection($myImages);
    }

    public function store(StoreImageRequest $request)
    {
        $path = $request->file('image')->store('images', 'public');

        $data = array_merge($request->validated(), ['image' => $path]);

        $newImage = $this->service->store($data);

        $resource = new ImageResource($newImage);

        return $resource->response()->setStatusCode(201);
    }

    public function update(UpdateImageRequest $request, Image $image)
    {
        Storage::delete([$image->image]);

        $path = $request->file('image')->store('images', 'public');

        $data = array_merge($request->validated(), ['image' => $path]);

        $editImage = $this->service->update($image , $data);

        $resource = new ImageResource($editImage);

        return $resource->response()->setStatusCode(200);
    }

    public function destroy(Image $image)
    {
        Storage::delete([$image->image]);

        $this->service->destroy($image);
    }
}
