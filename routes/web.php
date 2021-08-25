<?php

use App\Http\Controllers\AdminDashboardCtrl;
use App\Http\Controllers\AdminManageDeptCtrl;
use App\Http\Controllers\AdminManageStudentCtrl;
use App\Http\Controllers\ChangepasswordCtrl;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\HostelRegistrationCtrl;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageHostelCtrl;
use App\Http\Controllers\MarketplaceCtrl;
use App\Http\Controllers\MessageCtrl;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentCtrl;
use App\Http\Controllers\UserDashboardCtrl;
use App\Models\ReportCase;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])
    ->name('loginAccount')
    ->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])
    ->name('register')
    ->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])
    ->name('registration')
    ->middleware('guest');

// user
Route::get('/user/dashboard', [UserDashboardCtrl::class, 'index'])
    ->name('user.index')
    ->middleware('auth');
Route::post('/', [LoginController::class, 'logout'])
    ->name('logout.dashboard')
    ->middleware('auth');
Route::get('/edit-profile', [UserDashboardCtrl::class, 'editProfilePage'])
    ->name('user.edit-profile')
    ->middleware('auth');
Route::post('/edit-profile/avatar', [UserDashboardCtrl::class, 'updateAvatar'])
    ->name('edit-avatar')
    ->middleware('auth');
Route::post('/edit-profile/email', [UserDashboardCtrl::class, 'updateEmail'])
    ->name('edit-email')
    ->middleware('auth');
Route::post('/edit-profile/details', [UserDashboardCtrl::class, 'updateUser'])
    ->name('edit-profile')
    ->middleware('auth');
Route::get('/profile', [UserDashboardCtrl::class, 'userProfile'])
    ->name('user.profile')
    ->middleware('auth');
Route::get('/report-cases', [UserDashboardCtrl::class, 'reportCases'])
    ->name('reportCases')
    ->middleware('auth');
Route::post('/report-cases', [UserDashboardCtrl::class, 'storeCases'])
    ->name('reportCases')
    ->middleware('auth');

Route::get('/take-permission', [UserDashboardCtrl::class, 'takePermission'])
    ->name('takePermission')
    ->middleware('auth');
Route::post('/take-permission', [
    UserDashboardCtrl::class,
    'takePermissionPost',
])
    ->name('takePermission')
    ->middleware('auth');

Route::get('/sell-item', [UserDashboardCtrl::class, 'sellItem'])
    ->name('sellItem')
    ->middleware('auth');
Route::post('/sell-item', [UserDashboardCtrl::class, 'marketItem'])
    ->name('sellItem')
    ->middleware('auth');

Route::get('/admin/dashboard', [AdminDashboardCtrl::class, 'index'])
    ->name('admin.index')
    ->middleware('auth');
Route::get('admin/manage-students', [AdminManageStudentCtrl::class, 'index'])
    ->name('admin.manages-student')
    ->middleware('auth');
Route::get('admin/manage-departments', [
    AdminManageDeptCtrl::class,
    'manageDept',
])
    ->name('admin.manages-department')
    ->middleware('auth');
Route::post('admin/manage-departments', [AdminManageDeptCtrl::class, 'addDept'])
    ->name('admin.add-dept')
    ->middleware('auth');

Route::get('/assign-hostel-id/{id}', [
    AdminManageStudentCtrl::class,
    'allocateHostelId',
])->middleware('auth');
Route::post('/assign-hostel-id', [
    AdminManageStudentCtrl::class,
    'updateHostelId',
])->name('updateHostel')->middleware('auth');

Route::get('/cases-reported', [
    AdminDashboardCtrl::class,
    'casesReported',
])->name('casesReported');
Route::get('/permission-taken', [
    AdminDashboardCtrl::class,
    'permissionTaken',
])->name('permissionTaken');

Route::get('/students', [StudentCtrl::class, 'index'])->name('students');

Route::get('/admin-edit-profile', [
    AdminDashboardCtrl::class,
    'adminEdit',
])->name('admin-edit-profile');

Route::get('/manage-department/edit/{id}', [
    AdminManageDeptCtrl::class,
    'editDept',
])->middleware('auth');

Route::get('/marketplace', [MarketplaceCtrl::class, 'marketPlace'])->name(
    'marketplace'
);

Route::get('/message-student/{id}', [MessageCtrl::class, 'index'])->middleware(
    'auth'
);
Route::post('/message-student', [MessageCtrl::class, 'send'])
    ->name('send-message')
    ->middleware('auth');
Route::get('/messages', [MessageCtrl::class, 'messages'])
    ->name('messages')
    ->middleware('auth');
Route::get('/change-password', [ChangepasswordCtrl::class, 'index'])
    ->name('changepwd')
    ->middleware('auth');
Route::post('change-password', [
    ChangepasswordCtrl::class,
    'store',
])->name('change.password');

Route::get('/manage-hostel', [ManageHostelCtrl::class, 'index'])->name('manage-hostel')->middleware('auth');
Route::post('/manage-hostel', [ManageHostelCtrl::class, 'store'])->name('store-hostel')->middleware('auth');

Route::get('/hostel-registration', [HostelRegistrationCtrl::class, 'index'])->name('hostel-registration')->middleware('auth');

Route::post('/hostel-registration', [HostelRegistrationCtrl::class, 'store'])->name('hostel-registration')->middleware('auth');

Route::post('/hostel-reg', [HostelRegistrationCtrl::class, 'update'])->name('updateSpace');
