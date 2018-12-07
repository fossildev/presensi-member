<h5 class="form-header">Data Sesi Kelas</h5>
<div class="form-desc">Form dengan tanda <span class="text-danger">*</span> harus di isi.
</div>
<div class="form-group">
    <label for=""> Hari <span class="text-danger">*</span></label>
    <input class="form-control" data-error="Hari harus di isi"
           placeholder="Masukkan Hari" required="required" name="hari" type="text" value="{{ @$sesi_kelas->hari }}">
    <div class="help-block form-text with-errors form-control-feedback"></div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for=""> Jam Mulai <span class="text-danger">*</span></label>
            <input class="form-control" data-error="Jam mulai harus di isi"
                   placeholder="Masukkan nama panggilan" required name="jam_mulai" type="text"
                   value="{{ @$sesi_kelas->jam_mulai }}" id="jam_mulai">
            <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for=""> Jam Selesai <span class="text-danger">*</span></label>
            <input class="form-control" data-error="Jam selesai  harus di isi"
                   placeholder="Masukkan nama panggilan" required name="jam_selesai" type="text"
                   value="{{ @$sesi_kelas->jam_selesai }}" id="jam_selesai">
            <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
    </div>
</div>


{{ csrf_field() }}
<div class="form-buttons-w">
    <button class="btn btn-primary" type="submit"> Submit</button>
</div>