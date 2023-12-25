<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HostelController extends Controller
{
    function createHostel(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'string|required|unique:hostels,name',
            'total_rooms' => 'integer|required',
            'bed_space' => 'integer|required',
            'price' => 'integer|required',
            'inventories' => 'integer|required',
        ])->validate();

        $hostel = Hostel::create([
            'name' => $request->name,
            'total_rooms' => $request->total_rooms,
            'bed_space' => $request->bed_space,
            'price' => $request->price, 
            'inventories' => $request->inventories
        ]);

        return redirect('/admin/hostel/'.$hostel->id)->with('success', 'Hostel ('.$hostel->name.') has been added');
    }
}
