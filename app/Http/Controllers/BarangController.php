<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        dd($barang); // Debugging line
        return view('barang.index', compact('barang'));
    }

    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }
}
