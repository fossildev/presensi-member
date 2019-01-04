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
                         <br>

                         <span data-toggle="modal" data-target="exampleModal1">
                        <a href="" id="btn-poin" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                            <i class="os-icon os-icon-ui-15"></i>
                        </a>
                        </span>
                    <!-- <form method="POST" action="{{ route('kelas.destroy', [$sesi_kelas->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}                    
                        <button class="btn btn-warning" type="submit"> Hapus</button>
                    </form> -->
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
                <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Hapus Sesi Kelas {{ ucwords(strtolower($sesi_kelas->hari)) }}</h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true"> ×</span></button>
                </div>
                <form method="POST" action="{{ route('sesi-kelas.destroy', [$sesi_kelas->id]) }}">
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
    </script>
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