<h5 class="form-header">Data Member</h5>
<div class="form-desc">Form dengan tanda <span class="text-danger">*</span> harus di isi.
</div>
<div class="form-group">
    <label for=""> ID Member </label>
    <input class="form-control" data-error="ID harus di isi"
           placeholder="Masukkan ID Member" name="id" type="text"
           value="{{ @$murid->id }}">
    <div class="help-block form-text with-errors form-control-feedback"></div>
</div>
<div class="form-group">
    <label for=""> NIM </label>
    <input class="form-control" data-error="NIM harus di isi"
           placeholder="Masukkan Nomor Induk Mahasiswa" name="nim" type="text"
           value="{{ @$murid->nim }}">
    <div class="help-block form-text with-errors form-control-feedback"></div>
</div>
<div class="form-group">
    <label for=""> Kelas </label>
    <input class="form-control" data-error="Kelas harus di isi"
           placeholder="Masukkan Kelas Mahasiswa" name="kelas_mhs" type="text"
           value="{{ @$murid->kelas_mhs }}">
    <div class="help-block form-text with-errors form-control-feedback"></div>
</div>
<div class="form-group">
    <label for=""> Nama Lengkap <span class="text-danger">*</span></label>
    <input class="form-control" data-error="Nama harus di isi"
           placeholder="Masukkan nama lengkap" required="required" name="nama_lengkap" type="text"
           value="{{ @$murid->nama_lengkap }}">
    <div class="help-block form-text with-errors form-control-feedback"></div>
</div>
<div class="form-group">
    <label for=""> Nama Panggilan</label>
    <input class="form-control" data-error="Nama harus di isi"
           placeholder="Masukkan nama panggilan" name="nama_panggilan" type="text"
           value="{{ @$murid->nama_panggilan }}">
    <div class="help-block form-text with-errors form-control-feedback"></div>
</div>
<div class="form-group">
    <label for=""> Gender <span class="text-danger">*</span></label>
    <select class="form-control" required="required" name="gender">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select>
</div>

<div class="form-group">
    <label for=""> Kelas <span class="text-danger">*</span></label>
    <select class="form-control" required="required" name="kelas">
        @foreach($kelas as $item)
            <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
        @endforeach
    </select>
</div>

<fieldset class="form-group">
    <legend>
        <span>Kontak</span>
    </legend>
    <!-- <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for=""> Nama Ayah</label>
                <input class="form-control" data-error="Isi nama ayah"
                       placeholder="Masukkan nama ayah" type="text" name="nama_ayah" value="{{ @$murid->nama_ayah }}">
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Nama Ibu</label>
                <input class="form-control"
                       placeholder="Nama Ibu" type="text" name="nama_ibu" value="{{ @$murid->nama_ibu }}">
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>
        </div>
    </div> -->
</fieldset>
@php($telp = explode(',',@$murid->no_telepon))
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for=""> Nomor Telepon</label>
            <input class="form-control"
                   placeholder="Masukkan nomor telepon" type="text" name="no_telepon1" value="{{ @$telp[0] }}">
            <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
    </div>
    <!-- <div class="col-sm-6">
        <div class="form-group">
            <label for=""> Nomor Telepon 2</label>
            <input class="form-control"
                   placeholder="Masukkan nomor telepon" type="text" name="no_telepon2" value="{{ @$telp[1] }}">
            <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
    </div> -->
</div>
<div class="form-group">
    <label> Alamat</label>
    <textarea class="form-control" rows="3" name="alamat">{{ @$murid->alamat }}</textarea>
</div>
<!-- <fieldset class="form-group">
    <legend>
        <span>Foto</span>
    </legend>
    <div class="form-group" id="dz-upload">
        <div class="dz-message">
            <div>
                <h4>Drop files here or click to upload.</h4>

            </div>
        </div>
    </div>
    <input type="hidden" name="foto" id="foto">
</fieldset> -->
{{ csrf_field() }}
<div class="form-buttons-w">
    <button class="btn btn-primary" type="submit"> Submit</button>
</div>
