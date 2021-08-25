<!DOCTYPE html>
<html lang="en">

    <title>Hostel Management</title>

@include('layout.head')
<style>
    #hero{
        height: 100vh;
    }
</style>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{route('home')}}">Hostel Allocation System</a></h1>

      @include('layout.nav')
      <!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative d-flex flex-column justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="text-center">Allocating Hostel Spaces<br>Ensuring comfort</h1>
      <h2>Find other students in Hostel | Sell an Item | Report cases in Hostel | Take permissions</h2>
      <a href="{{ route('user.profile') }}" class="btn-get-started" style="width: 170px">Get started</a>
    </div>
  </section><!-- End Hero -->
  @include('layout.footer')
</body>

</html>
