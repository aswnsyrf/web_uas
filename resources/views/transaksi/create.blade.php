@extends('transaksi.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        {{-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('transaksi.index') }}"> Back</a>
        </div> --}}
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Customer:</strong>
                <input type="text" name="nama_customer" class="form-control" placeholder="nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk:</strong>
                <select name="produk" class="form-control" id="">
                    <option value="" disabled selected>Pilih Produk</option>
                    @foreach ($data_produkk as $transaksi)
                        <option value="{{ $transaksi->id }}">{{ $transaksi->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Durasi:</strong>
                <input type="text" name="durasi" class="form-control" placeholder="Durasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="tanggal">Pilih Tanggal Sewa:</label>
                <input type="date" id="tanggal_sewa" name="tanggal_sewa">
            </div>
            <div class="form-group">
                <label for="tanggal">Pilih Tanggal Kembalian:</label>
                <input type="date" id="tanggal_kembalian" name="tanggal_kembalian">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
