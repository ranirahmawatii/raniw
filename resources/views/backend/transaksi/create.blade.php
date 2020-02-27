@extends('layouts.backend')

@section('css')
<link rel="stylesheet" href="{{asset('assets/backend/css/vendor/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/vendor/metismenu/dist/metisMenu.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/vendor/switchery-npm/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
<!-- ======================= LINE AWESOME ICONS ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/css/icons/line-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/css/icons/simple-line-icons.css')}}">
<!-- ======================= DRIP ICONS ===================================-->
<link rel="stylesheet" href="{{asset('assets/backend/css/icons/dripicons.min.css')}}">
<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
<link rel="stylesheet" href="{{asset('assets/backend/css/icons/material-design-iconic-font.min.css')}}">
<!-- ======================= PAGE VENDOR STYLES ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
<!-- ======================= GLOBAL COMMON STYLES ============================-->
<link rel="stylesheet" href="{{asset('assets/backend/css/common/main.bundle.css')}}">
<!-- ======================= LAYOUT TYPE ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/css/layouts/vertical/core/main.css')}}">
<!-- ======================= MENU TYPE ===========================-->
    <link rel="stylesheet" href="{{asset('assets/backend/css/layouts/vertical/menu-type/default.css')}}">
<!-- ======================= THEME COLOR STYLES ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/css/layouts/vertical/themes/theme-a.css')}}">
@endsection

@section('js')
<script src="{{asset('assets/backend/vendor/modernizr/modernizr.custom.js')}}"></script>
<script src="{{asset('assets/backend/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/vendor/js-storage/js.storage.js')}}"></script>
<script src="{{asset('assets/backend/vendor/js-cookie/src/js.cookie.js')}}"></script>
<script src="{{asset('assets/backend/vendor/pace/pace.js')}}"></script>
<script src="{{asset('assets/backend/vendor/metismenu/dist/metisMenu.js')}}"></script>
<script src="{{asset('assets/backend/vendor/switchery-npm/index.js')}}"></script>
<script src="{{asset('assets/backend/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
<script src="{{asset('assets/backend/vendor/countup.js/dist/countUp.min.js')}}"></script>
<script src="{{asset('assets/backend/vendor/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/backend/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/backend/vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/backend/vendor/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/backend/vendor/flot.curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('assets/backend/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/backend/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- ================== GLOBAL APP SCRIPTS ==================-->
<script src="{{asset('assets/backend/js/global/app.js')}}"></script>
<!-- ================== PAGE LEVEL SCRIPTS ==================-->
<script src="{{asset('assets/backend/js/components/countUp-init.js')}}"></script>
<script src="{{asset('assets/backend/js/cards/counter-group.js')}}"></script>
<script src="{{asset('assets/backend/js/cards/recent-transactions.js')}}"></script>
<script src="{{asset('assets/backend/js/cards/monthly-budget.js')}}"></script>
<script src="{{asset('assets/backend/js/cards/users-chart.js')}}"></script>
<script src="{{asset('assets/backend/js/cards/bounce-rate-chart.js')}}"></script>
<script src="{{asset('assets/backend/js/cards/session-duration-chart.js')}}"></script>
@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah data</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('transaksi.store')}}" method="post">
                            {{csrf_field()}}
                            {{-- <div class="form-group">
                                <label for="">no</label>
                                <input class="form-control" type="text" name="no" id="">
                            </div> --}}
                            <div class="form-group">
                                <label for="">nama</label>
                                <input class="form-control" type="text" name="nama" id="">
                            </div>
                            <div class="form-group">
                                <label for="">nama boneka</label>
                                <input class="form-control" type="text" name="nama_boneka" id="">
                            </div>
                            <div class="form-group">
                                <label for="">jumlah boneka</label>
                                <input class="form-control" type="text" name="jumlah_boneka" id="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
