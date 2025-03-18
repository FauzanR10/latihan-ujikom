@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Customer</h2>
        <div class="mb-3">
            <strong>ID:</strong> {{ $customer->id_customer }}
        </div>
        <div class="mb-3">
            <strong>Nama:</strong> {{ $customer->nama_customer }}
        </div>
        <div class="mb-3">
            <strong>Alamat:</strong> {{ $customer->alamat }}
        </div>
        <div class="mb-3">
            <strong>Telepon:</strong> {{ $customer->telp }}
        </div>
        <div class="mb-3">
            <strong>Email:</strong> {{ $customer->email }}
        </div>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
