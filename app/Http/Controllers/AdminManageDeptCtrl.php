<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class AdminManageDeptCtrl extends Controller
{
    public function manageDept(){
        $cnt = 1;
        $departments = Department::all();
        return view('admin.manage-department', compact('departments', 'cnt'));
    }
    public function addDept(Request $request){
        $this->validate($request, [
            'department' => 'required|max:50',
        ]);
        Department::create([
            'department' => $request->department,
        ]);
        return back()->with('status', 'Department successfully added!');
    }
    public function editDept($id){
        $department = Department::find($id);

        return view('admin.edit-department', compact('department'));
    }
}
