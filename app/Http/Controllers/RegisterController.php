<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('register', compact('departments'));
    }
    public function register (Request $request){

        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'teller' => 'required|max:255',
            'matric' => 'required|max:200',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ]);



        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $gender = $request->gender;
        $password = Hash::make($request->password);
        $level = $request->level;
        $department = $request->department;
        $matric = $request->matric;
        $teller = $request->teller;

        $user = new User();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->gender = $gender;
        $user->level = $level;
        $user->department = $department;
        $user->password = $password;
        $user->matric = $matric;
        $user->teller = $teller;


        $user->save();


        return \redirect()->route('login')->with('registeredSuccessfully', 'Registered successfully');
    }
}
