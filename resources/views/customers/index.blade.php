@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Customer</h2>
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Tambah Customer</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id_customer }}</td>
                        <td>{{ $customer->nama_customer }}</td>
                        <td>{{ $customer->alamat }}</td>
                        <td>{{ $customer->telp }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            <a href="{{ route('customers.edit', $customer->id_customer) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('customers.destroy', $customer->id_customer) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus customer ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
