<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Permission;
use App\Models\ReportCase;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashboardCtrl extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function userProfile()
    {
        return view('user.profile');
    }
    public function editProfilePage()
    {
        return view('user.edit-profile');
    }
    public function updateAvatar(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $id = auth()->user()->id;

        $user = User::find($id);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('userImages'), $imageName);

        $user->image = $imageName;

        $user->save();
        return back()->with('image_updated', 'Image successfully updated!');
    }
    public function updateEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:50|unique:users',
        ]);

        $id = auth()->user()->id;
        $email = $request->email;

        $user = User::find($id);
        $user->email = $email;

        $user->save();
        return back()->with('status_email', 'Email successfully updated!');
    }
    public function updateUser(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'mobile' => 'required|max:25',
        ]);

        $id = auth()->user()->id;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $mobile = $request->mobile;

        $user = User::find($id);
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->mobile = $mobile;

        $user->save();

        return back()->with('status', 'Successfully Updated!');
    }
    public function reportCases()
    {
        return view('user.report-cases');
    }
    public function storeCases(Request $request)
    {
        $this->validate($request, [
            'time' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);
        $firstname = auth()->user()->firstname;
        $lastname = auth()->user()->lastname;
        $fullname = $firstname . ' ' . $lastname;
        ReportCase::create([
            'fullname' => $fullname,
            'email' => auth()->user()->email,
            'time' => $request->time,
            'date' => $request->date,
            'description' => $request->description,
        ]);
        return back()->with('status', 'Case successfully reported!');
    }
    public function takePermission()
    {
        return view('user.take-permission');
    }
    public function takePermissionPost(Request $request)
    {
        $this->validate($request, [
            'timeDepart' => 'required',
            'timeArrive' => 'required',
            'dateDepart' => 'required',
            'dateArrive' => 'required',
            'reasons' => 'required',
        ]);
        $firstname = auth()->user()->firstname;
        $lastname = auth()->user()->lastname;
        $fullname = $firstname . ' ' . $lastname;

        Permission::create([
            'name' => $fullname,
            'email' => auth()->user()->email,
            'timeDept' => $request->timeDepart,
            'timeArrive' => $request->timeArrive,
            'dateDept' => $request->dateDepart,
            'dateArrive' => $request->dateArrive,
            'reasons' => $request->reasons,
        ]);
        return back()->with('status', 'Successfully sent!');
    }
    public function sellItem()
    {
        return view('user.sell-item');
    }

    public function marketItem(Request $request)
    {
        $this->validate($request, [
            'nameItem' => 'required|max:20',
            'price' => 'required|max:20',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'required|max:50',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('marketImages'), $imageName);
        $firstname = auth()->user()->firstname;
        $lastname = auth()->user()->lastname;

        $fullname = $firstname. ' ' . $lastname;
        $email = auth()->user()->email;
        $mobile = auth()->user()->mobile;
        $hostel = auth()->user()->hostel;
        $room_number = auth()->user()->room_number;
        $nameItem = $request->nameItem;
        $price = $request->price;
        $description = $request->description;

        $item = new Market();
        $item->nameSeller = $fullname;
        $item->email = $email;
        $item->item = $nameItem;
        $item->price = $price;
        $item->mobile=$mobile;
        $item->description = $description;
        $item->image = $imageName;
        $item->hostel = $hostel;
        $item->room = $room_number;
        $item->save();

        return back()->with('status', 'Successfully Uploaded at marketplace');
    }
}
