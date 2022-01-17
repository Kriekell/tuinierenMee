<?php

namespace App\Http\Controllers;

use App\Models\Garden;
use Illuminate\Http\Request;

class GardenController extends Controller
{
    public function showAllGardens()
    {
        return response()->json(Garden::all());
    }

    public function showOneGarden($id)
    {
        return response()->json(Garden::find($id));
    }

    public function createGarden(Request $request)
    {
        $garden = Garden::create($request->all());

        return response()->json($garden, 201);
    }

    public function updateGarden($id, Request $request)
    {
        $garden = Garden::findOrFail($id);
        $garden->update($request->all());

        return response()->json($garden, 200);
    }

    public function deleteGarden($id)
    {
        Garden::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
