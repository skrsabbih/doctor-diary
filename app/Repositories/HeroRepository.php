<?php
namespace App\Repositories;

use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

class HeroRepository
{
    public function getAllHeroes()
    {
        // get all heroes from the database
        return Hero::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();
    }

    public function store(array $data)
    {
        // set the image first
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('heroes', 'public');
        }
        // create a new hero in the database
        return Hero::create($data);
    }

    public function getHeroById(string $id)
    {
        // get a specific hero from the database
        return Hero::findorFail($id);
    }

    public function update(Hero $hero, array $data)
    {
        // set the image first for update or create if updated image is deleted first
        if (isset($data['image'])) {
            if ($hero->image && Storage::disk('public')->exists($hero->image)) {
                Storage::disk('public')->delete($hero->image);
            }

            // set the new image
            $data['image'] = $data['image']->store('heroes', 'public');
        }
        // update a specific hero in the database
        $hero->update($data);
        return $hero->fresh();
    }

    public function delete(Hero $hero)
    {
        // delete a specific hero from the database with image
        if($hero->image && Storage::disk('public')->exists($hero->image)){
            Storage::disk('public')->delete($hero->image);
        }

        $hero->delete();
        return true;
    }

}
