<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $kategories = DB::table('kategori')->get();
        return view('admin.backend.kategori.index', ['kategories' => $kategories]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'kategori' => 'required|string',
            ]);
            $kategori = new Kategori([
                'kategori' => $validatedData['kategori'],
            ]);
            $kategori->save();
            Alert::success('Success', 'Data saved successfully!')->showConfirmButton('OK', '#3085d6');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menyimpan data')->showConfirmButton('OK', '#d33');
            return redirect()->back();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        $id = Crypt::decrypt($encryptedId);
        $kategories = Kategori::findOrFail($id);
        return view('admin.backend.kategori.update', compact('kategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'kategori' => 'required|string',
            ]);

            $kategori = Kategori::findOrFail($id);
            $kategori->kategori = $validatedData['kategori'];
            $kategori->save();
            Alert::success('Success', 'Data Berhasil Diupdate')->showConfirmButton('OK', '#3085d6');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal mengupdate Data')->showConfirmButton('OK', '#d33');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $kategori = Kategori::findOrFail($id);
            $kategori->delete();
            Alert::success('Success', 'Data Berhasil Dihapus')->showConfirmButton('OK', '#3085d6');
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menghapus Data')->showConfirmButton('OK', '#d33');
            return redirect()->back()->with('error', 'Gagal menghapus Data');
        }
    }
}
