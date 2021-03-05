@extends ('master')
@section('konten')
<div class="card mb-8 border-0 shadow-lg">
    <div class="card-body">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/smknesaba.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="container text-center">
                            <h1>SELAMAT DATANG</h1>
                            <!-- <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/Juara-1-smk.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <!-- <div class="carousel-item">
            <img src="image/smkbangil.jpg'" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <br>
    <div class="card-body">
        <section class="py-5">
            <div class="container">
                <div border-width: 10 px>
                    <hr>
                </div>
                <font>
                    <h1 align="center">PEMESANAN TIKET STUDY TOUR</h1>
                </font>
                <br>
                <h3>Ini adalah website pemesanan tiket study tour SMKN 1 Bangil yang diperuntukan SD dan SMP untuk pemesanan silahkan klik tombol di bawah</h3>

            </div>
        </section>
        <div class="container">
            <hr>
            <br>
            </br>
            @if (Auth::user()->role == 0)
            <p align="center"><a href="{{ route('tiket') }}" class="btn btn-dark btn-lg col-6">Pesan Disini</a></p>
            @endif
        </div>
        <br>
    </div>
</div>
<br><br><br><br><br>
@endsection