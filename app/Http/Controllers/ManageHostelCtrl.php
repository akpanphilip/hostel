<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use Illuminate\Http\Request;

class ManageHostelCtrl extends Controller
{
    public function index(){
        $cnt = 1;
        $hostels = Hostel::all();
        return view('admin.manage-hostel', compact('hostels', 'cnt'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'nameHostel' => 'required|max:20',
            'capacity' => 'required|max:20',
        ]);

        $nameHostel = $request->nameHostel;
        $capacity = $request->capacity;
        $hostel = new Hostel();
        $hostel->hostel_name = $nameHostel;
        $hostel->capacity = $capacity;
        $hostel->rooms_left = $capacity;
        $hostel->save();

        return back()->with('status', 'Successfully added hostel');
    }
}
