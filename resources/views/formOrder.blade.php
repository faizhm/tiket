@extends ('master')
@section('konten')
<!-- Features Section -->
<main role="main" class="container">
  <br>
  <div class="container">
    <font>
      <h2 align="center">PEMESANAN TIKET STUDY TOUR SMKN 1 BANGIL </h2>
    </font>
    <hr>
    </hr>
    @if(session()->has('massage'))
    <div class="row mt-3">
      <div class="col-md-6 mx-auto">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('massage') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
    @endif
    </br>
    <form action="/createtiket" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
      @csrf
      <div class="form-group row">
        <label for="tanggal" class="col-2 col-form-label">TANGGAL PEMESANAN</label>
        <div class="col-10">
          <input class="form-control" type="date" name="tanggal" required>
          <div class="invalid-feedback">Mohon memimilih tanggal yang valid</div>
        </div>
      </div>
      <div class="form-group row">
        <label for="asal_sekolah" class="col-sm-2 col-form-label">ASAL SEKOLAH</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="asal_sekolah" required>
          <div class="invalid-feedback">Mohon diisi dengan nama sekolah</div>
        </div>
      </div>
      <div class="form-group row">
        <label for="jumlah_peserta" class="col-sm-2 col-form-label">JUMLAH PESERTA</label>
        <div class="col-sm-10">
          <input type="integer" class="form-control" name="jumlah_peserta" required>
          <div class="invalid-feedback">Mohon diisi dengan jumlah peserta</div>
        </div>
      </div>


      <br>
      <hr>
      <div>
        <button type="submit" name="add" class="btn btn-dark float-right">Submit Data</button>
      </div>
    </form>
    <script>
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </div>
</main>
@endsection