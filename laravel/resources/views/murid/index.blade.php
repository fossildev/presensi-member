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
                        <th>Member ID</th>
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
                        <th>Member ID</th>
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
<!-- <div aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog"
         tabindex="-1" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true"> ×</span></button>
                </div>
                <form method="post">
                    <div class="modal-body">

                       
                        <input type="hidden" name="murid_id" value="" id="id">
                        {!! method_field('delete') !!}
                         {!! csrf_field() !!}    

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                        <button class="btn btn-primary" type="submit" > Hapus</button>
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
                <form method="post" action="{{ route('dt-murid') }}">
                    <div class="modal-body">

                        <div class="form-group"><label for=""> Keterangan</label><input
                                    class="form-control" placeholder="Keterangan" name="keterangan" type="text"></div>
                        <input type="hidden" name="murid_id" value="" id="id">
                        {{ csrf_field() }}

                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                        <button class="btn btn-primary" type="submit" > Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
    <script>
        $(function () {
            $('#tabel-murid').css('text-transform', 'capitalize').DataTable({
                pagingType: "simple_numbers",
                dom: 'Bfrtip',
                paging: true,
                pageLength: 25,
                order: [[0, "asc"]],
                processing: true,
                serverSide: true,
                ajax: '{{ route('dt-murid') }}',
                // tambahan
                buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                // tambahan
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
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    dataType: 'json',
                    data: {method: '_DELETE', submit: true}
                }).always(function (data) {
                    $('#murid-d').DataTable().draw(false);
                });

            })
        });

    </script>

    <script>
    $(function () {
        $('#export-table').DataTable({
            pagingType: "simple_numbers",
            dom: 'Bfrtip',
            paging: true,
            pageLength: 25,
            order: [[0, "asc"]],
            processing: true,
            serverSide: true,
            responsive: true,
            autoWidth:false,
            aaSorting: [[6, 'desc']],
            ajax: '{!! route('dt-murid') !!}',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            aoColumns: [
                {data: 'id', name: 'id'},
                {data: 'nama_lengkap', name: 'nama_lengkap'},
                {data: 'nama_panggilan', name: 'nama_panggilan'},
                {data: 'gender', name: 'gender'},
                {data: 'kelas_mhs', name: 'kelas_mhs'},
                {data: 'kelas_id', name: 'kelas_id', searchable: true},
                {mData:'action', name: 'action'}
            ],
           
        });
    });

    </script>
   
   <!-- <script src="//code.jquery.com/jquery.js"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script> 
    <script src="/vendor/datatables/buttons.server-side.js"></script> -->

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
 

    
 
@endsection
