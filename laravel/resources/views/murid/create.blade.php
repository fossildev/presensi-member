@extends('layout.master')

@section('title')
    <title>Tambah Member - Admin</title>
@stop

@section('content-box')
    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-box">
                    <form id="formValidate" method="post" action="{{ route('murid.store') }}">
                        @include('murid._form')
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
                    this.on("sending", function (file, xhr, formData) {
                        formData.append("_token", '{{ csrf_token() }}');
                    });
                    this.on("success", function (files, response) {

                        $('#foto').val(response);
                        console.log(response);
                    });

                }
            })
        });

    </script>
@endsection
