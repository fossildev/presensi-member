@extends('layout.master')

@section('title')
    <title>Edit Kelas {{ ucwords(strtolower($sesi_kelas->hari)) }} - Murid</title>
@stop

@section('content-box')
    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-box">
                    <form id="formValidate" method="post" action="{{ route('sesi-kelas.update', $sesi_kelas->id) }}">
                        @include('sesi._form')
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
            var opt = {
                format: 'HH:mm'
            };
            $('#jam_mulai').timeDropper(opt);
            $('#jam_selesai').timeDropper(opt);
        })

    </script>
@endsection