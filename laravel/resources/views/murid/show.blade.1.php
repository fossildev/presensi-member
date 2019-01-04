@extends('layout.master')

@section('title')
    <title>{{ ucwords(strtolower($murid->nama_lengkap)) }} - Murid - Admin</title>
@stop

@section('content-box')
    <div class="element-wrapper">
        <div class="user-profile">
            <div class="up-head-w" style="background-image:url({{ asset('img/profile-cover.jpg') }})">
                <div class="up-social">
                    <a href="{{ route('murid.edit',$murid->id) }}" data-toggle="tooltip" data-placement="top"
                       title="Edit">
                        <i class="os-icon os-icon-edit-1"></i>
                    </a>
                    <!-- <span data-toggle="modal" data-target="exampleModal1">
                    <a href="" id="btn-poin" data-toggle="tooltip" data-placement="top" title="Tambah Poin">
                        <i class="os-icon os-icon-ui-02"></i>
                    </a>
                    </span> -->

                </div>
                <div class="up-main-info">
                    <div class="user-avatar-w">
                        <div class="user-avatar">
                            <img alt="" src="{{ asset( 'storage/'.$murid->foto) }}">
                            <!-- <img alt="member" src="{{asset('img/avatar7.jpg')}}"> -->
                        </div>
                    </div>
                    <h1 class="up-header">{{ ucwords(strtolower($murid->nama_lengkap)) }}</h1>
                    <h5 class="up-sub-header">{{ ucwords(strtolower($murid->nama_panggilan)) }},
                        Kelas {{ $murid->kelas->nama_kelas }}</h5>
                </div>
                <svg class="decor" width="842px" height="219px" viewBox="0 0 842 219"
                     preserveAspectRatio="xMaxYMax meet"
                     version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF">
                        <path class="decor-path"
                              d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z"></path>
                    </g>
                </svg>
            </div>
            <div class="up-controls">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="value-pair">
                            <div class="label">Angkatan:</div>
                            <div class="value">{{ \Carbon\Carbon::parse($murid->created_at)->year }}</div>
                        </div>
                        <div class="value-pair">
                            <div class="label">Gender:</div>
                            <div class="value">{{ ($murid->gender=='L'? 'Laki-laki':'Perempuan') }}</div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        @php($telp = explode(',',$murid->no_telepon))
                        @foreach($telp as $item)
                            <a class="btn btn-secondary btn-sm" href="tel:{{ $item }}">
                                <i class="os-icon os-icon-email-forward"></i>
                                <span>{{ $item }}</span>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="up-contents">
                <h5 class="element-header">Profile Info</h5>
                <div class="row m-b">
                    <div class="col-lg-12">
                        <!-- <div class="row">
                            <div class="col-sm-6 b-r b-b">
                                <div class="el-tablo centered padded">
                                    <div class="value">{{ ucwords(strtolower($murid->nama_ayah)) }}</div>
                                    <div class="label">Nama Ayah</div>
                                </div>
                            </div>
                            <div class="col-sm-6 b-b b-r">
                                <div class="el-tablo centered padded">
                                    <div class="value">{{ ucwords(strtolower($murid->nama_ibu)) }}</div>
                                    <div class="label">Nama Ibu</div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <!-- <div class="col-sm-6 b-b b-r">
                                <div class="el-tablo centered padded">
                                    <div class="value">{{ ucwords(strtolower($murid->tempat_lahir)) }}
                                        <br>{{ \Carbon\Carbon::parse($murid->tanggal_lahir)->toFormattedDateString() }}
                                    </div>
                                    <div class="label">Tempat/Tanggal Lahir</div>
                                </div>
                            </div> -->
                            <div class="col-sm-6 b-b b-r">
                                <div class="el-tablo centered padded">
                                   
                                           <div class="value">{{ ucwords(strtolower($murid->id)) }}</div>
                                           <div class="label">Nomor ID Member</div>
                                </div>
                            </div>
                            <div class="col-sm-6 b-b b-r">
                                <div class="el-tablo centered padded">
                                 
                                           <div class="value">{{ ucwords(strtolower($murid->nim)) }}</div><br>
                                           <div class="value">{{ ucwords(strtoupper($murid->kelas_mhs)) }}</div>
                                           <div class="label">Nomor Induk / Kelas</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 b-r">
                                <div class="el-tablo centered padded">
                                    <div class="value">Divisi {{ ucwords(strtolower($murid->kelas->nama_kelas)) }}</div>
                                    <div class="label">Pilihan Divisi</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="os-tabs-w">
                    <div class="os-tabs-controls">
                        <ul class="nav nav-tabs bigger">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab_overview">Riwayat Presensi</a>
                            </li>
                        </ul>
                        <ul class="nav nav-pills smaller d-none d-md-flex">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#">Bulan ini</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_overview">
                            <div class="timed-activities padded">
                                @foreach($murid->presensi->sortByDesc('created_at') as $presensi)

                                    <div class="timed-activity">
                                        <div class="ta-date">
                                            <span>{{ $presensi->created_at->toFormattedDateString() }}</span>
                                        </div>
                                        <div class="ta-record-w">
                                            <div class="ta-record">
                                                <div class="ta-timestamp">
                                                    <strong>{{ $presensi->created_at->format('g:i') }}</strong> {{ $presensi->created_at->format('A') }}
                                                </div>
                                                <div class="ta-activity">Hadir
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_conversion"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <div aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog"
         tabindex="-1" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Tambah Poin</h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true"> ×</span></button>
                </div> -->
                <form method="post" action="{{ route('poin.store') }}">
                    <div class="modal-body">

                        <div class="form-group"><label for=""> Keterangan</label><input
                                    class="form-control" placeholder="Keterangan" name="keterangan" type="text"></div>
                        <input type="hidden" name="murid_id" value="{{ $murid->id }}">
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
    <div aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal2" role="dialog"
         tabindex="-1" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Tambah Poin</h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true"> ×</span></button>
                </div> -->

                <div class="modal-body">
                    <div class="table-responsive">
                        <table id="history-table" width="100%" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Poin</th>
                                <th>Keterangan</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Tanggal</th>
                                <th>Poin</th>
                                <th>Keterangan</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal"> Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- <script>
        $(function () {
            $('#history-table').css('text-transform', 'capitalize').DataTable({
                pagingType: "simple_numbers",
                paging: true,
                pageLength: 25,
                order: [[0, "asc"]],
                processing: true,
                serverSide: true,
                ajax: '{{ route('dt-poin-history', $murid->id) }}',
                columns: [
                    {data: 'created_at', name: 'created_at'},
                    {data: 'poin', name: 'poin'},
                    {data: 'keterangan', name: 'keterangan'}
                ]
            });
        });
        $('#btn-poin').click(function (e) {
            e.preventDefault();
            $('#exampleModal1').modal()
        });
        $('#btn-history').click(function (e) {
            e.preventDefault();
            $('#exampleModal2').modal()
        });

    </script> -->
@stop
