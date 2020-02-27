@extends('layouts.backend')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/select2.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/components/select2-init.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('editorl');
    $(document).ready(function () {
        $('#select2').select2();
    })
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah stok</div>
                <div class="card-body">
                    <form action="{{ route('stok.update', $stok->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">Id</label>
        <input class="form-control" value="{{ $stok->id }}" type="text" name="id">
    </div>
    <div class="form-group">
        <label for="">Nama Barang</label>
        <input class="form-control" value="{{ $stok->nama_barang  }}" type="text" name="nama_barang ">
    </div>
     <div class="form-group">
        <label for="">Jumlah Barang </label>
        <input class="form-control" value="{{ $stok->jumlah_barang }}" type="text" name="jumlah_barang ">
    </div>
     <div class="form-group">
        <label for="">Barang Masuk</label>
        <input class="form-control" value="{{ $stok->barang_masuk }}" type="text" name="barang_masuk">
    </div>
     <div class="form-group">
        <label for="">Barang Keluar</label>
        <input class="form-control" value="{{ $stok->barang_keluar }}" type="text" name="barang_keluar">
    </div>
    <div class="form-group">
        <label for="">Sisa Barang</label>
        <input class="form-control" value="{{ $stok->sisa_barang }}" type="text" name="sisa_barang">
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
