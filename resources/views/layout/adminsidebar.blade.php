<style>
    .navbar-nav{
        /* background-color: brown; */
        font-weight: 400;
        font-family: cursive;
    }
    .bg-theme{
        /* background-color: brown; */
    }
    .bg-grn{
        background-color: #5fcf80;
    }
    li span{
        color: black;
    }
</style>

<!-- Sidebar -->
<ul class="navbar-nav bg-grn sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN HMGT</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" >
            <i class="fas fa-fw fa-user-alt"></i>
            <span>{{auth()->user()->firstname}} {{auth()->user()->lastname}}</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link">
            <i class="fas fa-fw fa-envelope-alt"></i>
            <span>{{auth()->user()->email}}</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Profile -->

    <!-- Nav Item - report cases -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.manages-student')}}">
            <span>Manage Students</span></a>
    </li>
    <!-- Nav Item - Market place -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('casesReported')}}">
            <span>Cases Reported</span></a>
    </li>
    <!-- Nav Item - permission -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('permissionTaken')}}">
            <span>Permission taken</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('manage-hostel')}}">
            <span>Manage Hostel</span></a>
    </li>
    <!-- Nav Item - setting -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <span>Setting</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin-edit-profile')}}">Edit profile</a>
                {{-- <a class="collapse-item" href="{{route('changepwd')}}">Change password</a> --}}
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
