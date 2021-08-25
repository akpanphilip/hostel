<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostelRegistrationCtrl extends Controller
{
    public function index(){
        $cnt = 1;
        $hostels = Hostel::all();
        return view('user.hostel-registration', compact('hostels', 'cnt'));
    }
    public function store(Request $request){

        // $hostel = Hostel::all();
        $hostel = $request->hostel;

        $rooms_left = DB::table('hostels')
        ->WHERE('hostel_name','=',$hostel)
        ->get();

        $space = $rooms_left[0]->rooms_left;

        if($space === '0'){
        return back()->with('notavailable', 'Rooms currently not available in the selected hostel, contact admin!');

        }else{
            $add = $space + 1;
            $finalId = $add - $space;

            $id = auth()->user()->id;
            $roomNumber = $finalId;

            $user = User::find($id);
            $user->room_number = $roomNumber;
            $user->hostel = $request->hostel;

            $user->save();

            DB::table('hostels')
            ->WHERE('hostel_name','=',$hostel)
            ->decrement('rooms_left');


            return back()->with('status', 'Successfully updated hotel space');

        }

    }
}
