@extends('layout.master')

@section('title')
    <title>Dashboard Presensi FOSSIL</title>
@stop

@section('content-box')
    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-actions">
                    <form class="form-inline justify-content-sm-end">
                        <select class="form-control form-control-sm rounded">
                            <option value="Pending">Today</option>
                            <option value="Active">Last Week</option>
                            <option value="Cancelled">Last 30 Days</option>
                        </select>
                    </form>
                </div>
                <h6 class="element-header"> Dashboard</h6>
                <div class="element-content">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="element-box el-tablo" href="#">
                                <div class="label">Jumlah Member</div>
                                <div class="value">{{ $jumlah_murid }}</div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a class="element-box el-tablo" href="#">
                                <div class="label">Presensi</div>
                                <div class="value">10</div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="element-wrapper">
                <h6 class="element-header">Jumlah Member</h6>
                <div class="element-box">
                    <div class="el-chart-w">
                        <canvas height="120" id="chart-kelas" width="120"></canvas>
                        <div class="inside-donut-chart-label">
                            <strong>{{ $jumlah_murid }}</strong>
                            <span>Total Member</span>
                        </div>
                    </div>
                    <div class="el-legend">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-panel')
    <div class="content-panel">
        <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
        <div class="element-wrapper"><h6 class="element-header">Quick Links</h6>
            <div class="element-box-tp">
                <div class="el-buttons-list full-width">
                    <a class="btn btn-white btn-sm" href="#"><i
                                class="os-icon os-icon-robot-1"></i><span>Data Member</span></a>
                    <a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-calendar-time"></i><span>Data Kelas</span></a>

                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="https://codepen.io/anon/pen/aWapBE.js"></script>
    <script>
        $(function () {
            var dataJson = @json($json);
            var labels = dataJson.map(function (e) {
                return e.nama_kelas;
            });
            var mydata = dataJson.map(function (e) {
                return e.jumlah;
            });

            var color = palette('tol', dataJson.length).map(function (hex) {
                return '#' + hex;
            });

            $.each(dataJson, function (index, value) {
                $('.el-legend').prepend('<div class="legend-value-w">\n' +
                    '                            <div class="legend-pin" style="background-color: ' + color[index] + ';"></div>\n' +
                    '                            <div class="legend-value">' + value.nama_kelas + ' <span style="color: ' + color[index] + '">' + value.jumlah + '</span></div>\n' +
                    '                        </div>');
            });

            var kelas = $('#chart-kelas');

            if (kelas.length) {
                var donutChart = kelas;
                var data = {
                    labels: labels,
                    datasets: [{
                        data: mydata,
                        backgroundColor: color
                    }]
                };

                // -----------------
                // init donut chart
                // -----------------
                new Chart(donutChart, {
                    type: 'doughnut',
                    data: data,
                    options: {
                        legend: {
                            display: false
                        },
                        animation: {
                            animateScale: true
                        },
                        cutoutPercentage: 80
                    }
                });
            }
        });

    </script>
@stop
