<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCalificationRequest;
use App\Http\Requests\UpdateCalificationRequest;
use App\Http\Resources\CalificationResource;
use App\Models\Calification;
use App\Services\CalificationService;
use Illuminate\Support\Facades\Auth;

class CalificationController extends Controller
{
    public function __construct(
        private CalificationService $service
    ){}

    public function store(StoreCalificationRequest $request)
    {
        $newCalification = $this->service->store($request->user() ,$request->validated());

        $resource = new CalificationResource($newCalification);

        return $resource->response()->setStatusCode(201);
    }

    public function update(Calification $calification, UpdateCalificationRequest $request)
    {
        abort_if($calification->user_id !== Auth::id(), 403);

        $editCalification = $this->service->update($calification, $request->validated());

        $resource = new CalificationResource($editCalification);

        return $resource->response()->setStatusCode(200);
    }

    public function destroy(Calification $calification)
    {
        abort_if($calification->user_id !== Auth::id(), 403);

        $this->service->destroy($calification);

        return response()->noContent();
    }
}
