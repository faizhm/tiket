@extends ('master')
@section('konten')
<main role="main" class="container">
    <br>
    <font>
        <h2 align="center">DETAIL PESANAN</h2>
    </font>
    <hr>
    <hr>
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
    <div>
        <div class="card bg-light mb-3 o-hidden border-0 shadow-lg my-5">
            <div class="card-body">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle float-right" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="">Pembatalan</a>
                    </div>
                </div>
                <br><br>
                <table class="table table-bordered">
                    <tr>
                        <th>Tanggal</th>
                        <th>Asal Sekolah</th>
                        <th>Jumlah Peserta</th>
                        <th>Status</th>
                        <th>Total Tagihan</th>
                    </tr>
                    <?php foreach ($orders as $row) { ?>
                        <tr>
                            <td><?= $row->tanggal; ?></td>
                            <td><?= $row->asal_sekolah; ?></td>
                            <td><?= $row->jumlah_peserta; ?></td>
                            <td><?= $row->status; ?></td>
                            <td><?= $row->jumlah_peserta * 2000; ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <hr>
                <?php if ($row->status == "Menunggu Dibayar") { ?>
                    <p align="right"><a href="" class="btn btn-dark col-2"> Bayar </a></p>
                <?php } ?>
            </div>
        </div>

        <div class="card bg-light mb-3 o-hidden border-0 shadow-lg my-5">
            <div class="card-header">
                <h4>Peserta</h4>
            </div>
            <div class="card-body">
                <div>
                    <a href="/peserta/<?= $row->id ?>" class="btn btn-dark btn-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 17 20">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg> Tambah Peserta</a>
                </div>
                <br>
                <table class="table table-bordered">
                    <?php if (empty($participants)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Peserta tidak ditemukan.
                        </div>
                    <?php endif ?>
                    <?php if (!empty($participants)) :  ?>
                        <tr>
                            <th>Nama</th>
                            <th>E-mail</th>
                            <th>Jenis kelamin</th>
                            <th>Alamat</th>
                            <th>Usia</th>
                            <th>No Telpon</th>
                        </tr>
                    <?php endif; ?>
                    <?php
                    foreach ($participants as $row) {
                    ?>
                        <tr>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->jenis_kelamin; ?></td>
                            <td><?= $row->alamat; ?></td>
                            <td><?= $row->usia; ?></td>
                            <td><?= $row->no_telpon; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection