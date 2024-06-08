<?php

namespace App\Http\Controllers;
use App\Models\GaleryModels;
use App\Models\ProdukModels;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Saran;



class HomeController extends Controller
{
    public function menu(): View
    {
        $data = [
            'title' => 'menu',
            'dataproduk' => ProdukModels::latest()->get(),
        ];


        return view('menu', $data);
    }

    public function index(){




        $menu = GaleryModels::all();
        $data = [
            'title' => 'menu',
            'dataproduk' => ProdukModels::latest()->get(),
        ];

        return view('index', $data,compact("menu"));
    }

    public function saran(Request $req){
        $data = new saran;

        $data->nama = $req->nama;
        $data->email = $req->email;
        $data->subjek = $req->subjek;
        $data->isi = $req->isi;

        $data->save();
        // return redirect()->route('hubungi')->with('success', 'Data Galery Berhasil Dihapus');
        return redirect()->back()->with('success', 'Saran berhasil dikirim!');
    }
}
