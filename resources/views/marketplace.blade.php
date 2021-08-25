<!DOCTYPE html>
<html lang="en">
<title>Marketplace</title>
@include('layout.head')

<style>
    .marketplaceHeading {
        font-size: 45px;
        color: black;
        text-align: center;
        margin-top: 100px;
        font-family: cursive;
    }

    .box {
        width: 100%;
        border: 2px solid white;
        border-radius: 9px;
        height: auto;
        background-color: white;
    }
    .imageBox {
        height: 220px;
        width: 100%;
        height: 240px;
    }
    .imageBox img {
        width: 100%;
        height: 100%;
    }
    .priceItem {
        padding-left: 15px;
        padding-right: 15px;
    }
    p {
        line-height: 15px;
    }
    .desc {
        margin-top: -9px;
        text-align: center;
        font-size: 17px;
        padding: 5px;
    }
    .nameSeller {
        font-weight: bold;
        text-align: center;
    }

    .mobile {
        text-align: center;
        font-weight: 400;
        font-style: italic;
    }

    .hostel {
        text-align: center;
    }

</style>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{ route('home') }}">Hostel Allocation System</a></h1>
            @include('layout.nav')
            <!-- .navbar -->
        </div>
    </header>
    <p class="marketplaceHeading">Market Place</p>
    <div class="container">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-sm-6 col-md-4">
                    <div class="box">
                        <div class="imageBox">
                            <img class="mb-3" src="{{ asset('marketImages') }}/{{ $item->image }}">
                        </div>
                        <div class="d-flex justify-content-between priceItem">
                            <p>{{ $item->item }}</p>
                            <p>#{{ $item->price }}</p>
                        </div>
                        <p class="desc">{{ $item->description }}</p>
                        <p class="nameSeller">Uploaded by: {{ $item->nameSeller }}</p>
                        <p class="hostel">Hostel: {{ $item->hostel }}</p>
                        <p class="hostel">Room Id: {{ $item->room }}</p>
                        <p class="mobile">{{ $item->mobile }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('layout.footer')
</body>

</html>
