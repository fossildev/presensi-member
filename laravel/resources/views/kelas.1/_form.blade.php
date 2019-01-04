<h5 class="form-header">Data Kelas</h5>
<div class="form-desc">Form dengan tanda <span class="text-danger">*</span> harus di isi.
</div>
<div class="form-group">
    <label for=""> Nama Kelas <span class="text-danger">*</span></label>
    <input class="form-control" data-error="Nama kelas harus di isi"
           placeholder="Masukkan nama lengkap" required="required" name="nama_kelas" type="text"
           value="{{ @$kelas->nama_kelas }}">
    <div class="help-block form-text with-errors form-control-feedback"></div>
</div>
<div class="form-group">
    <label for=""> Deskripsi <span class="text-danger">*</span></label>
    <input class="form-control" data-error="Deskripsi kelas harus di isi"
           placeholder="Masukkan nama panggilan" required name="deskripsi" type="text" value="{{ @$kelas->deskripsi }}">
    <div class="help-block form-text with-errors form-control-feedback"></div>
</div>

{{ csrf_field() }}
<div class="form-buttons-w">
    <button class="btn btn-primary" type="submit"> Simpan</button>

    <!-- hapus -->
    
</div>


  