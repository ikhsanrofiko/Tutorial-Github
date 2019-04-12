<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
{
$produk = $this->dataProduk();
return view('produk/index',compact('produk'));
}

public function dataProduk()
{
$produk = ['OT','Meja','Kursi','Lampu'];
return $produk;
}
}