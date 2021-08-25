<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AdminManageStudentCtrl extends Controller
{
    public function index()
    {
        $cnt = 1;
        $students = User::query()
            ->where('status', '=', '1')
            ->get();
        return view('admin.manage-students', compact('students', 'cnt'));
    }
    public function allocateHostelId($id)
    {
        $students = User::find($id);
        $hostels = Hostel::all();

        return view('admin.register-hostel', compact('students', 'hostels'));
    }
    public function updateHostelId(Request $request)
    {
        $id = $request->id;
        $hostel = $request->hostel;
        $room_number = $request->room_number;


        $user = User::find($id);
        $user->hostel = $hostel;
        $user->room_number = $room_number;

        $user->save();
        return back()->with('status', 'Hostel Allocated successfully!');
    }
}
