<?php

namespace Checklists\Http\Controllers\Api\V1;

use Checklists\Http\Controllers\Controller as BaseController;
use Checklists\Models\Scaffolding;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ScaffoldingController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Scaffolding::paginate(self::PAGE_COUNT));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json(Scaffolding::create($request->all())->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id): JsonResponse
    {
        return response()->json(Scaffolding::findOrFail($id)->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        return response()->json(Scaffolding::findOrFail($id)->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        return response()->json(Scaffolding::findOrFail($id)->delete());
    }
}
