<?php

namespace App\Http\Controllers;

use App\Models\Garden;
use Illuminate\Http\Request;
use DB;

class GardenController extends Controller
{
    public function showAllGardens()
    {
        return response()->json(Garden::all());
    }

    public function showOneGarden($id) 
    {
        $result = DB::select("SELECT gardens.id ,gardens.name ,gardens.length ,gardens.width ,addresses.country AS country ,addresses.city AS city ,addresses.street AS street  FROM addresses JOIN gardens ON addresses.id = gardens.adress_id WHERE gardens.id = {$id}");
        return json_encode($result);
        // return response()->json(Garden::find($id));
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
