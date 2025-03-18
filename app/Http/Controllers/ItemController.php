<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Item::create($request->all());
        return redirect()->route('items.index')->with('success', 'Item berhasil ditambahkan');    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('items.show', compact('item'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $items->update($request->all());
        return redirect()->route('items.index')->with('success', 'Item berhasil diperbarui');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $items->update($request->all());
        return redirect()->route('items.index')->with('success', 'Item berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $items->delete();
        return redirect()->route('items.index')->with('success', 'Item berhasil dihapus');
    }
}
