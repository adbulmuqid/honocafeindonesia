<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\ProdukModels;
use Illuminate\View\View;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function produk(): View
    {
        $data = [
            'title' => 'produk',
            'dataproduk' => ProdukModels::latest()->get(),
        ];
        return view('admin.produk', $data);
    }

    public function create(): View
    {
        $data = [
            'title' => 'create',
            'dataproduk' => ProdukModels::latest()->get(),
        ];
        return view('admin.tambahproduk', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
{
    $request->validate([
        'nama_produk' => 'required',
        'deskripsi' => 'required',
        'harga' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Validasi untuk gambar
    ]);

    $gambar = $request->file('image');
    $filename = date('Y-m-d') . $gambar->getClientOriginalName();
    $path = 'imageproduk/' . $filename;

    $gambar->move(public_path('imageproduk'), $filename);

    $data['nama_produk'] = $request->nama_produk;
    $data['deskripsi'] = $request->deskripsi;
    $data['harga'] = $request->harga;
    $data['image'] = $filename;

    ProdukModels::create($data);

    return redirect()->route('produk')
        ->with('success', 'Produk berhasil ditambahkan.');
}

public function editproduk(Request $request,$id){
    $data = ProdukModels::find($id);

    return view('admin.editproduk', compact('data'));
}

public function delete(Request $request, $id){
    $data = ProdukModels::find($id);

    if($data){
        $data->delete();
    }

    return redirect()->route('produk')->with('success', 'Data Promo Berhasil Dihapus');
}

public function updateproduk(Request $request, $id)
{
    $request->validate([
        'nama_produk' => 'required',
        'deskripsi' => 'required',
        'harga' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Validasi untuk gambar
    ]);

    $gambar = $request->file('image');
    $filename = date('Y-m-d') . $gambar->getClientOriginalName();
    $path = 'imageproduk/' . $filename;

    $gambar->move(public_path('imageproduk'), $filename);

    $data['nama_produk'] = $request->nama_produk;
    $data['deskripsi'] = $request->deskripsi;
    $data['harga'] = $request->harga;
    $data['image'] = $filename;

    ProdukModels::whereId($id)->update($data);

    return redirect()->route('produk')
        ->with('success', 'Produk berhasil ditambahkan.');
}
}

