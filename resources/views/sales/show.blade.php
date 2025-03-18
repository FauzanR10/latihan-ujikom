@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Sales</h1>
    <p><strong>Customer:</strong> {{ $sale->customer->nama_customer }}</p>
    <p><strong>Tanggal:</strong> {{ $sale->tanggal_transaksi }}</p>
    <p><strong>Total Harga:</strong> {{ number_format($sale->total_harga, 2) }}</p>
    <a href="{{ route('sales.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
