<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="http://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/boot') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main9503.css?version=4.2.0') }}" rel="stylesheet">
    <style>
        #barcode-scanner video.drawingBuffer {
            display: none;
        }

        #barcode-scanner video {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="auth-wrapper">
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w" style="padding: 5%;">
        </div>
        <h4 class="auth-header">Presensi</h4>
        <form action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group"><label for="">Username</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                       autofocus>
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            </div>
            <div class="form-group"><label for="">Password</label>
                <input id="password" type="password" class="form-control" name="password" required
                       placeholder="Enter your password">
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary">Log me in</button>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" name="remember" type="checkbox">Remember Me
                    </label>
                </div>
            </div>
        </form>

    </div>
</div>
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/quagga/quagga.js') }}"></script>
<script src="{{ asset('js/instascan.min.js') }}"></script>
<script src="{{ asset('js/sweetalert2.all.js') }}"></script>
{{--<script>
    $(function () {
        $('#id-murid').keypress(function (e) {
            if (e.which === 13) {
                e.preventDefault();
                var id_murid = $(this).val();
                new_presensi(id_murid);
            }
        });
        var new_presensi = function (content) {
            $.ajax({
                url: '{{ route('presensi-post') }}',
                type: 'POST',
                data: {
                    id: content,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function (result) {
                    console.log(result);
                    //var json = $.parseJSON(result[0]);
                    swal({
                        type: result[0].type,
                        title: result[0].message,
                        showConfirmButton: true,

                    });

                }
            });
        };
        const scanner = new Instascan.Scanner({video: document.getElementById('barcode-scanner')});
        scanner.addListener('scan', function (content) {
            if (content == null) {
                console.log('no barcode')
            } else {
                new_presensi(content)
                //alert(content);
            }

        });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });
    });


    /*var w = window.innerWidth;

    var h = window.innerHeight;

    Quagga.init({
        inputStream: {
            name: "Live",
            type: "LiveStream",
            target: document.querySelector('#barcode-scanner')    // Or '#yourElement' (optional)

        },

        decoder: {
            readers: ["code_128_reader",
                "ean_reader",
                "ean_8_reader",
                "code_39_reader",
                "code_39_vin_reader",
                "codabar_reader",
                "upc_reader",
                "upc_e_reader",
                "i2of5_reader"]
        }
    }, function (err) {
        if (err) {
            console.log(err);
            return
        }
        console.log("Initialization finished. Ready to start");
        Quagga.start();
    });
    Quagga.onDetected(function (result) {
        alert("Barcode detected and processed : [" + result.codeResult.code + "]");
        $('#id-murid').val(result.codeResult.code)
    });*/
</script>--}}
</body>

</html>
