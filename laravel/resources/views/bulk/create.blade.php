@extends('layout.master')

@section('title')
    <title>Tambah Kelas - Admin</title>
@stop

@section('content-box')
    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-box">
                    <form id="formValidate" method="post" action="{{ route('bulk') }}">
                        @include('bulk._form')
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

    </script>
@endsection