<style>
    .navbar-nav{
        /* background-color: brown; */
        font-weight: 400;
        font-family: cursive;
    }
    .bg-theme{
        /* background-color: brown; */
    }
    .bg-grl{
        background-color: #5fcf80;
    }
    li span, i{
        color: black !important;
    }
    .sidebar-brand-text{
        color: black;
    }
</style>

<!-- Sidebar -->
<ul class="navbar-nav bg-grl sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('user.index')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HMGT</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active p-4">
            <span>Student Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('user.profile')}}">
            <span>Profile</span></a>
    </li>
    <!-- Nav Item - report cases -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('reportCases')}}">
            <span>Report Cases</span></a>
    </li>
    <!-- Nav Item - Market place -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('sellItem')}}">
            <span>Market an Item</span></a>
    </li>
    <!-- Nav Item - permission -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('takePermission')}}">
            <span>Take Permission</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('messages')}}">
            <span>Messages</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('hostel-registration')}}">
            <span>Hostel Registration</span></a>
    </li>
    <!-- Nav Item - setting -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <span>Setting</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('user.edit-profile')}}">Edit profile</a>
                <a class="collapse-item" href="{{route('changepwd')}}">Change password</a>
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
