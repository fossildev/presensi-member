@extends('layout.master')

@section('title')
    <title>Daftar Kelas - Admin</title>
@stop

@section('content-box')
    <div class="element-wrapper">
        <h6 class="element-header">Kelas</h6>
        <div class="element-box">
            <h5 class="form-header">Riwayat Presensi</h5>
            <div class="form-desc">Berisi riwayat presensi member
            </div>
            <div class="controls-above-table">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-inline justify-content-sm-end">
                            <a class="btn btn-primary" href="{{ route('kelas.create') }}">Tambah</a>
                            <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade"
                                 id="exampleModal1" role="dialog" tabindex="-1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button aria-label="Close" class="close" data-dismiss="modal"
                                                    type="button">
                                                <span aria-hidden="true"> &times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for=""> Email address</label>
                                                    <input class="form-control" placeholder="Enter email"
                                                           type="email">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for=""> Password</label>
                                                            <input class="form-control" placeholder="Password"
                                                                   type="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Confirm Password</label>
                                                            <input class="form-control" placeholder="Password"
                                                                   type="password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                                Close
                                            </button>
                                            <button class="btn btn-primary" type="button"> Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tabel-kelas" width="100%" class="table table-hover table-striped table-lightfont">
                    <thead>
                    <tr>
                        <!-- <th>ID#</th> -->
                        <th>Member ID</th>
                        <th>Keterangan</th>
                        <th>Detail Presensi</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <!-- <th>ID#</th> -->
                        <th>Member ID</th>
                        <th>Keterangan</th>
                        <th>Detail Presensi</th>
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
                ajax: '{{ route('dt-riwayat') }}',
                columns: [
                    // {data: 'id', name: 'id'},
                    {data: 'murid_id', name: 'murid_id'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });

    </script>
@endsection