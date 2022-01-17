<?php

namespace App\Http\Controllers;

use App\Models\Alarm;
use Illuminate\Http\Request;

class AlarmController extends Controller
{
    public function showAllAlarms()
    {
        return response()->json(Alarm::all());
    }

    public function showOneAlarm($id)
    {
        return response()->json(Alarm::find($id));
    }

    public function createAlarm(Request $request)
    {
        $alarm = Alarm::create($request->all());

        return response()->json($alarm, 201);
    }

    public function updateAlarm($id, Request $request)
    {
        $alarm = Alarm::findOrFail($id);
        $alarm->update($request->all());

        return response()->json($alarm, 200);
    }

    public function deleteAlarm($id)
    {
        Alarm::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
