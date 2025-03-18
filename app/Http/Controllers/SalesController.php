<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Customer;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::with('customer')->get();
        return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('sales.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'tanggal_transaksi' => 'required|date',
            'total_harga' => 'required|numeric',
        ]);

        Sales::create($request->all());

        return redirect()->route('sales.index')->with('success', 'Data sales berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('sales.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers = Customer::all();
        return view('sales.edit', compact('sale', 'customers'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'tanggal_transaksi' => 'required|date',
            'total_harga' => 'required|numeric',
        ]);

        $sales->update($request->all());

        return redirect()->route('sales.index')->with('success', 'Data sales berhasil diperbarui.');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sales->delete();
        return redirect()->route('sales.index')->with('success', 'Data sales berhasil dihapus.');    
    }
}
