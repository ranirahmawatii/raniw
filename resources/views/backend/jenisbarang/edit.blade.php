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
                <div class="card-header">Mengubah jenis barang</div>
                <div class="card-body">
                    <form action="{{ route('jenisbarang.update', $jenisbarang->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">nama boneka</label>
        <input class="form-control" value="{{ $jenisbarang->nama_boneka }}" type="text" name="id">
    </div>
    <div class="form-group">
        <label for="">bahan</label>
        <input class="form-control" value="{{ $jenisbarang->bahan }}" type="text" name="nama">
    </div>
    <div class="form-group">
        <label for="">harga</label>
        <input class="form-control" value="{{ $jenisbarang->harga }}" type="text" name="slug">
        <div class="form-group">
        <label for="">gambar</label>
        <input class="form-control" value="{{ $jenisbarang->gambar }}" type="text" name="slug">
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
