<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<ul class="navbar-nav ml-auto">
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</span>
            <img class="img-profile rounded-circle"
                src="{{ asset('userImages') }}/{{ auth()->user()->image }}">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <form action="{{ route('logout.dashboard') }}" method="post">
                @csrf
                <input class="btn w-100" type="submit" value="Logout">
            </form>
        </div>
    </li>

</ul>

</nav>
