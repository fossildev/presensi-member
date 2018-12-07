<h5 class="form-header">Data Kelas</h5>
<div class="form-desc">Form dengan tanda <span class="text-danger">*</span> harus di isi.
</div>
<div class="form-group">
    <label for=""> Kelas <span class="text-danger">*</span></label>
    <select class="form-control" required="required" name="kelas">
        @foreach($kelas as $item)
            <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for=""> Jumlah Murid <span class="text-danger">*</span></label>
    <input class="form-control" data-error="Jumlah Murid harus diisi"
           placeholder="Masukkan jumlah murid" required name="jumlah" type="text" value="">
    <div class="help-block form-text with-errors form-control-feedback"></div>
</div>

{{ csrf_field() }}
<div class="form-buttons-w">
    <button class="btn btn-primary" type="submit"> Submit</button>
</div>