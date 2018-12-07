@extends('layout.master')

@section('title')
    <title>Edit Kelas {{ ucwords(strtolower($kelas->nama_kelas)) }} - Murid</title>
@stop

@section('content-box')
    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-box">
                    <form id="formValidate" method="post" action="{{ route('kelas.update', $kelas->id) }}">
                        @include('kelas._form')
                        {{ method_field('PUT') }}
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
    <script>
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