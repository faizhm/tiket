@extends ('master')
@section('konten')
<!-- Features Section -->
<br>
<div class="container">
  <font>
    <h2 align="center">PESERTA STUDY TOUR SMKN 1 BANGIL</h2>
  </font>
  <hr>
  </hr>
  </br>
  <form action="/createpeserta" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" required name="nama">
        <div class="invalid-feedback">Mohon diisi dengan nama peserta</div>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">EMAIL</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" required name="email" placeholder="example@gmail.com">
        <div class="invalid-feedback">Mohon diisi dengan email peserta</div>
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">JENIS KELAMIN</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
            <label class="form-check-label" for="jenis_kelamin">
              Laki-laki
            </label>
          </div>
          <br>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
            <label class="form-check-label" for="jenis_kelamin">
              Perempuan
            </label>
          </div>
        </div>
      </div>
    </fieldset>
    <br>
    <div class="form-group row">
      <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" required name="alamat">
        <div class="invalid-feedback">Mohon diisi dengan alamat peserta</div>
      </div>
    </div>
    <div class="form-group row">
      <label for="usia" class="col-sm-2 col-form-label">USIA</label>
      <div class="col-sm-10">
        <input type="integer" class="form-control" required name="usia">
        <div class="invalid-feedback">Mohon diisi dengan usia peserta</div>
      </div>
    </div>
    <div class="form-group row">
      <label for="no_telpon" class="col-sm-2 col-form-label">NO TELEPON</label>
      <div class="col-sm-10">
        <input type="integer" class="form-control" required name="no_telpon" placeholder="telepon">
        <div class="invalid-feedback">Mohon diisi dengan nomor telepon peserta</div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <input type="hidden" class="form-control" name="id_pesanan" value="<?= $id_pesanan ?>">
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

@endsection