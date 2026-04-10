<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Http\Resources\SectionResource;
use App\Models\Section;
use App\Services\SectionService;

class SectionController extends Controller
{

    public function __construct(
        private SectionService $service
    )
    {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mySections = Section::all();

        return SectionResource::collection($mySections);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSectionRequest $request)
    {
        $newSection = $this->service->store($request->validated());

        $resource = new SectionResource($newSection);

        return $resource->response()->setStatusCode(201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionRequest $request, Section $section)
    {
        $editSection = $this->service->update($section, $request->validated());

        $resource = new SectionResource($editSection);

        return $resource->response()->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        $this->service->destroy($section);

        return response()->noContent();

    }
}
