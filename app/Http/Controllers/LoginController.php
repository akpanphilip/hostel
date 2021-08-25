<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password', 'status');
        if (Auth::attempt($credentials)) {
            if (auth()->user()->status === '1') {
                $request->session()->regenerate();
                return redirect()->route('user.profile');
            } elseif (auth()->user()->status === '2') {
                $request->session()->regenerate();
                return redirect()->route('admin.index');
            } else {
                Auth::logout();
                return back()->with(
                    'unverified',
                    'Contact Admin to verify account'
                );
            }
        }
        return back()->with('status', 'Invalid login details');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
