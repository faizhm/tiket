@extends ('master')
@section('konten')
<main role="main" class="container">
    <br>
    <font>
        <h2 align="center">LIST PESANAN</h2>
    </font>
    <hr>
    </hr>
    <!-- Set notifikasi -->
    @if(session()->has('massage'))
    <div class="row mt-3">
        <div class="col-md-6 mx-auto">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('massage') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif
    <!-- end notifikasi -->
    </br>
    <div>
        <?php if (empty($orders)) : ?>
            <div class="alert alert-danger" role="alert">
                Pesanan tidak ditemukan.
            </div>
        <?php endif ?>
        <?php if (!empty($orders)) :
            foreach ($orders as $row) { ?>
                <div class="card shadow p-2 bg-white rounded mb-3">
                    <a href="/detailorder-user/<?= $row->id ?>" style="text-decoration:none" class="card-body text-dark">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2">
                                <h5 class="card-text">Tanggal</h5>
                            </div>
                            <div class="col">
                                <h5>: <strong><?= $row->tanggal; ?></strong></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-2">
                                <h5 class="card-text">Asal Sekolah</h5>
                            </div>
                            <div class="col">
                                <h5>: <strong><?= $row->asal_sekolah; ?></strong></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-2">
                                <h5 class="card-text">Jumlah Peserta</h5>
                            </div>
                            <div class="col">
                                <h5>: <strong><?= $row->jumlah_peserta; ?></strong></h5>
                            </div>
                        </div>
                        <H6 class=" card-text text-right text-muted">Status : <strong><?= $row->status; ?></strong></H6>
                        <p class="card-text text-right"><a href="/detailorder-user/<?= $row->id ?>" class="btn btn-dark col-4 ">Detail</a></p>
                    </a>
                </div>
            <?php } ?>
        <?php endif; ?>
    </div>
</main>

@endsection