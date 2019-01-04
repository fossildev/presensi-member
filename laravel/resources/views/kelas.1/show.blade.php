@extends('layout.master')

@section('title')
    <title>{{ ucwords(strtolower($murid->nama_lengkap)) }} - Murid - Admin</title>
@stop

@section('content-box')
    <div class="element-wrapper">
        <div class="user-profile">
            <div class="up-head-w" style="background-image:url({{ asset('img/profile-cover.jpg') }})">
                <div class="up-social">
                    <a href="{{ route('murid.edit',$murid->id) }}">
                        <i class="os-icon os-icon-edit-1"></i>
                    </a>

                </div>
                <div class="up-main-info">
                    <div class="user-avatar-w">
                        <div class="user-avatar">
                            <img alt="" src="{{ asset($murid->foto) }}">
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
                            <div class="label">Usia:</div>
                            <div class="value">{{ \Carbon\Carbon::parse($murid->tanggal_lahir)->age }} tahun.</div>
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
                        <div class="row">
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
                        </div>
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <div class="el-tablo centered padded">
                                    <div class="value">{{ ucwords(strtolower($murid->alamat)) }}</div>
                                    <div class="label">Alamat</div>
                                </div>
                            </div>
                            <div class="col-sm-6 b-r">
                                <div class="el-tablo centered padded">
                                    <div class="value">{{ ucwords(strtolower($murid->tempat_lahir)) }}
                                        <br>{{ \Carbon\Carbon::parse($murid->tanggal_lahir)->toFormattedDateString() }}
                                    </div>
                                    <div class="label">Tempat/Tanggal Lahir</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="os-tabs-w">
                    <div class="os-tabs-controls">
                        <ul class="nav nav-tabs bigger">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab_overview">Activity</a>
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
                                <div class="timed-activity">
                                    <div class="ta-date">
                                        <span>21st Jan, 2017</span>
                                    </div>
                                    <div class="ta-record-w">
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>11:55</strong> am
                                            </div>
                                            <div class="ta-activity">Created a post called
                                                <a href="#">Register new symbol</a> in Rogue
                                            </div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>2:34</strong> pm
                                            </div>
                                            <div class="ta-activity">Commented on story
                                                <a href="#">How to be a leader</a> in
                                                <a href="#">Financial</a> category
                                            </div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>7:12</strong> pm
                                            </div>
                                            <div class="ta-activity">Added
                                                <a href="#">John Silver</a> as a friend
                                            </div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>9:39</strong> pm
                                            </div>
                                            <div class="ta-activity">Started following user
                                                <a href="#">Ben Mosley</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timed-activity">
                                    <div class="ta-date">
                                        <span>3rd Feb, 2017</span>
                                    </div>
                                    <div class="ta-record-w">
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>9:32</strong> pm
                                            </div>
                                            <div class="ta-activity">Added
                                                <a href="#">John Silver</a> as a friend
                                            </div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>5:14</strong> pm
                                            </div>
                                            <div class="ta-activity">Commented on story
                                                <a href="#">How to be a leader</a> in
                                                <a href="#">Financial</a> category
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timed-activity">
                                    <div class="ta-date">
                                        <span>21st Jan, 2017</span>
                                    </div>
                                    <div class="ta-record-w">
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>11:55</strong> am
                                            </div>
                                            <div class="ta-activity">Created a post called
                                                <a href="#">Register new symbol</a> in Rogue
                                            </div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>2:34</strong> pm
                                            </div>
                                            <div class="ta-activity">Commented on story
                                                <a href="#">How to be a leader</a> in
                                                <a href="#">Financial</a> category
                                            </div>
                                        </div>
                                        <div class="ta-record">
                                            <div class="ta-timestamp">
                                                <strong>9:39</strong> pm
                                            </div>
                                            <div class="ta-activity">Started following user
                                                <a href="#">Ben Mosley</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_conversion"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection