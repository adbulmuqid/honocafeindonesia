<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;
use App\Models\User; // Correctly import the model
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function akunuser(): View
    {
        $data = [
            'title' => 'akunuser',
            'dataakun' => User::latest()->get(),
        ];
        return view('admin.akunuser', $data);
    }

    public function create(): View
    {
        $data = [
            'title' => 'create',
            'dataakun' => User::latest()->get(),
        ];
        return view('admin.tambahakun', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8', // Ensure password is at least 8 characters
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
        ];

        User::create($data);

        return redirect()->route('akunuser')
            ->with('success', 'Akun berhasil ditambahkan.');
    }

    public function editakunuser($id): View
    {
        $data = User::findOrFail($id);

        return view('admin.editakunuser', compact('data'));
    }

    public function delete($id)
    {
        $data = User::findOrFail($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('akunuser')->with('success', 'Data Akun Berhasil Dihapus');
    }

    public function updateakunuser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8', // Ensure password is at least 8 characters
        ]);

        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password); // Hash the password
        $data->save();

        return redirect()->route('akunuser')
            ->with('success', 'Data akun berhasil diperbarui.');
    }
    public function viewsaran(): View
    {
        $data = saran::all();
        return view('admin.saran', compact ('data'));

    }
}
