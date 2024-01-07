{{-- @extends('products.layout') --}}

@extends('layout.be.template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ASWIN KOMPUTER</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('transaksi.create') }}"> Create New Transaksi</a>
            </div>
{{--
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('dashboard')}}"> Back</a>

            </div> --}}
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Customer</th>
            <th>Produk</th>
            <th>Durasi</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Kembali</th>
            <th>Harga</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($transaksis as $row)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $row->nama_customer }}</td>
            <td>{{ $row->produkk?->name }}</td>
            <td>{{ $row->durasi }}</td>
            <td>{{ $row->tanggal_sewa }}</td>
            <td>{{ $row->tanggal_kembalian }}</td>
            <td>{{ $row->harga }}</td>

            <td>
                <form action="{{ route('transaksi.destroy',$row->id) }}" method="POST">


                    <a class="btn btn-primary" href="{{ route('transaksi.edit',$row->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
