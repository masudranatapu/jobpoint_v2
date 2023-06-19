<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        return view('admin.departments.index');
    }

    public function store()
    {
        $request->validate([
            'name' => 'required',
        ]);

        Department::insert([
            'name' => $request->name,
            'create_at' => Carbon::now(),
        ]);

        Toastr::success('Department successfully created','Success');
        return redirect()->back();

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Department::where('id', $request->id)->update([
            'name' => $request->name,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::success('Department successfully update','Success');
        return redirect()->back();

    }

    function destory($id) {
        Department::findOrFail($id)->delete();
        Toastr::success('Department successfully delete','Success');
        return redirect()->back();
    }
}
