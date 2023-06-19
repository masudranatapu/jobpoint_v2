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
        $departments = Department::latest()->get();
        return view('admin.departments.index', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Department::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Department successfully created','Success');
        return redirect()->back();

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Department::findOrFail($id)->update([
            'name' => $request->name,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::success('Department successfully update','Success');
        return redirect()->back();

    }

    function destroy($id) {
        $department = Department::findOrFail($id);
        $department->delete();
        Toastr::success('Department successfully delete','Success');
        return redirect()->back();
    }
}
