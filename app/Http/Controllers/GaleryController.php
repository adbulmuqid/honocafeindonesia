<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\GaleryModels; // Correcting the model import
use Illuminate\View\View;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class GaleryController extends Controller
{
    public function galery(): View
    {
        $data = [
            'title' => 'galery',
            'datagalery' => GaleryModels::latest()->get(),
        ];
        return view('admin.galery', $data);
    }

    public function create(): View
    {
        $data = [
            'title' => 'create',
            'datagalery' => GaleryModels::latest()->get(),
        ];
        return view('admin.tambahgalery', $data);
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Validasi untuk gambar
        ]);

        $gambar = $request->file('image');
        $filename = date('Y-m-d') . $gambar->getClientOriginalName();
        $path = 'imagegalery/' . $filename;

        $gambar->move(public_path('imagegalery'), $filename);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $filename,
        ];

        GaleryModels::create($data); // Corrected the model name here

        return redirect()->route('galery')
            ->with('success', 'Galery berhasil ditambahkan.');
    }

    public function editgalery($id): View
    {
        $data = GaleryModels::find($id);

        return view('admin.editgalery', compact('data'));
    }

    public function delete($id)
    {
        $data = GaleryModels::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('galery')->with('success', 'Data Galery Berhasil Dihapus');
    }

    public function updategalery(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Validasi untuk gambar
        ]);

        $data = GaleryModels::find($id);

        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $filename = date('Y-m-d') . $gambar->getClientOriginalName();
            $gambar->move(public_path('imagegalery'), $filename);
            $data->image = $filename;
        }

        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;

        $data->save();

        return redirect()->route('galery')
            ->with('success', 'Galery berhasil diperbarui.');
    }
}
