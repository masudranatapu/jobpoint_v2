<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class LocationsController extends Controller
{
    //
    public function index()
    {
        $locations = Location::latest()->get();
        return view('admin.locations.index', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Location::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Location successfully created','Success');
        return redirect()->back();

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Location::findOrFail($id)->update([
            'name' => $request->name,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::success('Location successfully update','Success');
        return redirect()->back();

    }

    function destroy($id) {
        $locations = Location::findOrFail($id);
        $locations->delete();
        Toastr::success('Location successfully delete','Success');
        return redirect()->back();
    }
}
