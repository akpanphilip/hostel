<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentCtrl extends Controller
{
    public function index()
    {
        $students = User::query()
            ->where('status', '=', '1')
            ->get();
        return view('students', compact('students'));
    }
}
