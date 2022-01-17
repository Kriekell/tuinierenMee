<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function showAllAddresses()
    {
        return response()->json(Address::all());
    }

    public function showOneAddress($id)
    {
        return response()->json(Address::find($id));
    }

    public function createAddress(Request $request)
    {
        $address = Address::create($request->all());

        return response()->json($address, 201);
    }

    public function updateAddress($id, Request $request)
    {
        $address = Address::findOrFail($id);
        $address->update($request->all());

        return response()->json($address, 200);
    }

    public function deleteAddress($id)
    {
        Address::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
