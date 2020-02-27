@extends('layouts.backend')

@section('css')
<link rel="stylesheet" href="{{asset('assets/backend/asset/css/vendor/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/asset/vendor/metismenu/dist/metisMenu.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/asset/vendor/switchery-npm/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/asset/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
<!-- ======================= LINE AWESOME ICONS ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/asset/css/icons/line-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/asset/css/icons/simple-line-icons.css')}}">
<!-- ======================= DRIP ICONS ===================================-->
<link rel="stylesheet" href="{{asset('assets/backend/asset/css/icons/dripicons.min.css')}}">
<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
<link rel="stylesheet" href="{{asset('assets/backend/asset/css/icons/material-design-iconic-font.min.css')}}">
<!-- ======================= PAGE VENDOR STYLES ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/asset/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
<!-- ======================= GLOBAL COMMON STYLES ============================-->
<link rel="stylesheet" href="{{asset('assets/backend/asset/css/common/main.bundle.css')}}">
<!-- ======================= LAYOUT TYPE ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/asset/css/layouts/vertical/core/main.css')}}">
<!-- ======================= MENU TYPE ===========================-->
    <link rel="stylesheet" href="{{asset('assets/backend/asset/css/layouts/vertical/menu-type/default.css')}}">
<!-- ======================= THEME COLOR STYLES ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/asset/css/layouts/vertical/themes/theme-a.css')}}">
@endsection

@section('js')
<script src="{{asset('assets/backend/asset/vendor/modernizr/modernizr.custom.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/js-storage/js.storage.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/js-cookie/src/js.cookie.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/pace/pace.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/metismenu/dist/metisMenu.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/switchery-npm/index.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
<script src="{{asset('assets/backend/asset/vendor/countup.js/dist/countUp.min.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/flot.curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/backend/asset/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- ================== GLOBAL APP SCRIPTS ==================-->
<script src="{{asset('assets/backend/asset/js/global/app.js')}}"></script>
<!-- ================== PAGE LEVEL SCRIPTS ==================-->
<script src="{{asset('assets/backend/asset/js/components/countUp-init.js')}}"></script>
<script src="{{asset('assets/backend/asset/js/cards/counter-group.js')}}"></script>
<script src="{{asset('assets/backend/asset/js/cards/recent-transactions.js')}}"></script>
<script src="{{asset('assets/backend/asset/js/cards/monthly-budget.js')}}"></script>
<script src="{{asset('assets/backend/asset/js/cards/users-chart.js')}}"></script>
<script src="{{asset('assets/backend/asset/js/cards/bounce-rate-chart.js')}}"></script>
<script src="{{asset('assets/backend/asset/js/cards/session-duration-chart.js')}}"></script>
@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">Show</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('jenisbarang.update', $jenisbarang->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">nama_boneka</label>
                                <input class="form-control" type="text" name="nama_boneka" id="" value="{{$jenisbarang->id}}"disabled>
                            </div>
                            <div class="form-group">
                                <label for="">bahan</label>
                                <input class="form-control" type="text" name="bahan" id="" value="{{$jenisbarang->nama}}"disabled>
                            </div>
                            <div class="form-group">
                                <label for="">harga</label>
                                <input class="form-control" type="text" name="harga" id="" value="{{$jenisbarang->slug}}"disabled>
                            </div>
                            <div class="form-group">
                                <label for="">gambar</label>
                                <input class="form-control" type="text" name="gambar" id="" value="{{$jenisbarang->slug}}"disabled>
                            </div>


                            <div class="form-group">
                                <a href="{{url('jenisbarang')}}" class="btn btn-outline-info">Kembali</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
