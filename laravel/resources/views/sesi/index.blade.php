@extends('layout.master')

@section('title')
    <title>Daftar Kelas - Admin</title>
@stop

@section('content-box')
    <div class="element-wrapper">
        <h6 class="element-header">Kelas</h6>
        <div class="element-box">
            <h5 class="form-header">Daftar Sesi Kelas</h5>
            <div class="form-desc">Berisi data sesi kelas yang ada
            </div>
            <div class="controls-above-table">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-inline justify-content-sm-end">
                            <a class="btn btn-primary" href="{{ route('sesi-kelas.create') }}">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tabel-kelas" width="100%" class="table table-hover table-striped table-lightfont">
                    <thead>
                    <tr>
                        <!-- <th>ID#</th> -->
                        <th>Hari</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <!-- <th>ID#</th> -->
                        <th>Nama Kelas</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $('#tabel-kelas').css('text-transform', 'lowercase').DataTable({
                pagingType: "simple_numbers",
                paging: true,
                pageLength: 25,
                order: [[0, "asc"]],
                processing: true,
                serverSide: true,
                ajax: '{{ route('dt-sesi') }}',
                columns: [
                    {data: 'hari', name: 'hari'},
                    {data: 'jam_mulai', name: 'jam_mulai'},
                    {data: 'jam_selesai', name: 'jam_selesai'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });

    </script>
@endsection