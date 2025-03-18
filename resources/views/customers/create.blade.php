@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Customer</h2>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <label for="nama_customer">Nama:</label>
            <input type="text" name="nama_customer" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" required>
        
            <label for="telepon">Telepon:</label>
            <input type="text" name="telepon" required>
        
            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection