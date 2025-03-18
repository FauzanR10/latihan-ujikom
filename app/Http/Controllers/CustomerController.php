<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    // Menampilkan daftar customer
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // Menampilkan form tambah customer
    public function create()
    {
        return view('customers.create');
    }

    // Menyimpan data customer baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_customer' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'alamat' => 'required|string',
            'telepon' => 'required|string',
        ]);
    
        Customer::create($validated);
    
        return redirect()->route('customers.index')->with('success', 'Customer berhasil ditambahkan.');
    }

    // Menampilkan detail customer
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    // Menampilkan form edit customer
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    // Memperbarui data customer
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'nama_customer' => 'required',
            'alamat' => 'required',
            'telp' => 'nullable',
            'email' => 'nullable|email',
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer berhasil diperbarui');
    }

    // Menghapus data customer
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer berhasil dihapus');
    }
}