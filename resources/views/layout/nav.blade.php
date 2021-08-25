<style>
    /* .navbar{
    }
    #header{
        background-color: grey;
        color: #fff !important;
    } */

</style>
<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
      <li><a class="active" href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('reportCases')}}">Report Cases</a></li>
      {{-- <li><a href="courses.html">Upcoming Event</a></li> --}}
      <li><a href="{{route('students')}}">Students</a></li>
      <li><a href="{{route('marketplace')}}">Market Place</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  @auth()
      <a href="{{route('user.profile')}}" class="get-started-btn">Dashboard</a>
  @endauth
  @guest()
  <a href="{{route('login')}}" class="get-started-btn">Login | Register</a>
  @endguest
