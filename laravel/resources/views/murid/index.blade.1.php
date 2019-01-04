@extends('layout.master')

@section('title')
    <title>Daftar Member - Admin</title>
@stop

@section('content-box')
    <div class="element-wrapper">
        <h6 class="element-header">Member</h6>
        <div class="element-box">
            <h5 class="form-header">Daftar Member</h5>
            <div class="form-desc">Berisi data member FOSSIL
            </div>
            <div class="controls-above-table">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-inline justify-content-sm-end">
                            <a class="btn btn-primary" href="{{ route('murid.create') }}">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tabel-murid" width="100%" class="table table-hover table-striped table-lightfont">
                    <thead>
                    <tr>
                        <th>ID#</th>
                        <th>Nama</th>
                        <th>Nama Panggilan</th>
                        <th>Gender</th>
                        <th>Kelas</th>
                        <th>Divisi</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID#</th>
                        <th>Nama</th>
                        <th>Nama Panggilan</th>
                        <th>Gender</th>
                        <th>Kelas</th>
                        <th>Divisi</th>
                        <th>Edit</th>
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
    <div aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog"
         tabindex="-1" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true"> ×</span></button>
                </div>
                <form method="post" action="{{ route('poin.store') }}">
                    <div class="modal-body">

                        <div class="form-group"><label for=""> Keterangan</label><input
                                    class="form-control" placeholder="Keterangan" name="keterangan" type="text"></div>
                        <input type="hidden" name="murid_id" value="" id="id">
                        {{ csrf_field() }}

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                        <button class="btn btn-danger" type="submit"> Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog"
         tabindex="-1" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Tambah Poin</h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true"> ×</span></button>
                </div>
                <form method="post" action="{{ route('poin.store') }}">
                    <div class="modal-body">

                        <div class="form-group"><label for=""> Keterangan</label><input
                                    class="form-control" placeholder="Keterangan" name="keterangan" type="text"></div>
                        <input type="hidden" name="murid_id" value="" id="id">
                        {{ csrf_field() }}

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal"> Close</button>
                        <button class="btn btn-primary" type="submit"> Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('#tabel-murid').css('text-transform', 'capitalize').DataTable({
                pagingType: "simple_numbers",
                paging: true,
                pageLength: 25,
                order: [[0, "asc"]],
                processing: true,
                serverSide: true,
                ajax: '{{ route('dt-murid') }}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'nama_lengkap', name: 'nama_lengkap'},
                    {data: 'nama_panggilan', name: 'nama_panggilan'},
                    {data: 'gender', name: 'gender'},
                    {data: 'kelas_mhs', name: 'kelas_mhs'},
                    {data: 'kelas_id', name: 'kelas_id', searchable: true},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
            $(document).on('click',  function (e) {
                var murid_id = $(this).closest('td').find('#murid-id').val();
                $('#id').val(murid_id);
                $('#exampleModal1').modal();

            })
        });

    </script>
@endsection
