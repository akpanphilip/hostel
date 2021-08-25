<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Permission;
use App\Models\ReportCase;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardCtrl extends Controller
{
    public function index(){
        $studentCount = User::query()
        ->where('status', '=', '1')
        ->count();
        $casesCount = ReportCase::all()->count();
        $departmentCount = Department::all()->count();
        $permissionRequest = Permission::all()->count();
        return view('admin.index', compact('studentCount', 'casesCount', 'departmentCount', 'permissionRequest'));
    }
    public function casesReported(){
        $cases = ReportCase::all();
        return view('admin.cases-reported', compact('cases'));
    }
    public function permissionTaken(){
        $permissions = Permission::all();
        $cnt = 1;

        return view('admin.permission-taken', compact('permissions', 'cnt'));

    }
    public function adminEdit(){
        return view('admin.admin-edit-profile');
    }
}
