@extends('layout.master')

@section('title')
    <title>Edit Kelas {{ ucwords(strtolower($kelas->nama_kelas)) }} - Member</title>
@stop

@section('content-box')
    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-box">
                    <form id="formValidate" method="post" action="{{ route('kelas.update', $kelas->id) }}">
                        @include('kelas._form')
                        {{ method_field('PUT') }}
                        <br>

                        <span data-toggle="modal" data-target="exampleModal1">
                        <a href="" id="btn-poin" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                            <i class="os-icon os-icon-ui-15"></i>
                        </a>
                        </span>
<!--                         
                        <form method="POST" action="{{ route('kelas.destroy', [$kelas->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}                    
                        <button class="btn btn-warning" type="submit"> Hapus</button> -->
                      </form>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-panel')
    <div class="content-panel">

    </div>
@endsection

@section('script')
<div aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog"
         tabindex="-1" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Hapus Kelas Pertemuan {{ ucwords(strtolower($kelas->nama_kelas)) }}</h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true"> ×</span></button>
                </div>
                <form method="POST" action="{{ route('kelas.destroy', [$kelas->id]) }}">
                    <div class="modal-body">

                    {{ csrf_field() }}
                        {{ method_field('DELETE') }}     

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                        <button class="btn btn-primary" type="submit"> Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>

        $('#btn-poin').click(function (e) {
            e.preventDefault();
            $('#exampleModal1').modal()
        });
        $(function () {
            $('div#dz-upload').addClass('dropzone').dropzone({
                url: "{{ route('dz-upload') }}",
                method: "post",
                uploadMultiple: false,
                maxFiles: 1,
                acceptedFiles: "image/*",
                init: function () {
                    var myDropzone = this;
                    var mockFile = {name: "Filename", size: 0};
                    myDropzone.emit("addedfile", mockFile);
                    myDropzone.emit("thumbnail", mockFile, "{{ asset('storage/'.@$murid->foto) }}");
                    myDropzone.files.push(mockFile);
                    myDropzone.emit("complete", mockFile);
                    console.log(myDropzone.files.length);
                    this.on("sending", function (file, xhr, formData) {
                        formData.append("_token", '{{ csrf_token() }}');
                    });
                    this.on("success", function (files, response) {
                        this.removeFile(mockFile);
                        $('#foto').val(response);
                        console.log(response);
                    });

                }
            })
        });

    </script>
@endsection