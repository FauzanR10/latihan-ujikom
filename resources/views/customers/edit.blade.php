@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Customer</h2>
        <form action="{{ route('customers.update', $customer->id_customer) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_customer" class="form-label">Nama Customer</label>
                <input type="text" name="nama_customer" class="form-control" value="{{ $customer->nama_customer }}" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $customer->alamat }}" required>
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">Telepon</label>
                <input type="text" name="telp" class="form-control" value="{{ $customer->telp }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $customer->email }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
