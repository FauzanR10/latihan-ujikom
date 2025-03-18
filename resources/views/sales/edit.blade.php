@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Sales</h1>
    <form action="{{ route('sales.update', $sale->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="customer_id" class="form-label">Customer</label>
            <select name="customer_id" id="customer_id" class="form-control">
                @foreach ($customers as $customer)
                <option value="{{ $customer->id }}" {{ $customer->id == $sale->customer_id ? 'selected' : '' }}>
                    {{ $customer->nama_customer }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" class="form-control" value="{{ $sale->tanggal_transaksi }}">
        </div>
        <div class="mb-3">
            <label for="total_harga" class="form-label">Total Harga</label>
            <input type="number" name="total_harga" class="form-control" value="{{ $sale->total_harga }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
