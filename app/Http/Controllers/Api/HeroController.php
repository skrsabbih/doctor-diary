<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHeroRequest;
use App\Http\Requests\UpdateHeroRequest;
use App\Models\Hero;
use App\Repositories\HeroRepository;
use Illuminate\Http\JsonResponse;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(protected HeroRepository $heroRepository){}

    public function index(): JsonResponse
    {
        // get all heroes from the database and return as json response
        return response()->json($this->heroRepository->getAllHeroes());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeroRequest $request)
    {
        // create a new hero in the database and return as json response
        return response()->json($this->heroRepository->store($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // get a specific hero from the database and return as json response
        return response()->json($this->heroRepository->getHeroById($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        // update a specific hero in the database and return as json response
        return response()->json($this->heroRepository->update($hero, $request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        // delete a specific hero from the database and return as json response
        return response()->json($this->heroRepository->delete($hero));
    }
}
