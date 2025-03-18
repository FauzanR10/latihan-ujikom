@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Sales</h1>
    <a href="{{ route('sales.create') }}" class="btn btn-primary">Tambah Sales</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->id }}</td>
                <td>{{ $sale->customer->nama_customer }}</td>
                <td>{{ $sale->tanggal_transaksi }}</td>
                <td>{{ number_format($sale->total_harga, 2) }}</td>
                <td>
                    <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
