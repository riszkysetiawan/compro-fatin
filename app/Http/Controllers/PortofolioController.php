<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Http\Requests\StorePortofolioRequest;
use App\Http\Requests\UpdatePortofolioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $portofolios = Portofolio::select('portofolio.*', 'kategori.kategori')
            ->join('kategori', 'portofolio.id_kategori', '=', 'kategori.id')
            ->get();

        return view('admin.backend.portofolio.index', ['portofolios' => $portofolios]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Kategori::all();

        return view('admin.backend.portofolio.tambah', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'id_kategori' => 'required|integer',
                'nama_portofolio' => 'required|string',
                'keterangan' => 'required|string',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/portofolio', $namaFile);

            $portofolio = new Portofolio();
            $portofolio->id_kategori = $validated['id_kategori'];
            $portofolio->nama_portofolio = $validated['nama_portofolio'];
            $portofolio->keterangan = $validated['keterangan'];
            $portofolio->foto = $namaFile;
            $portofolio->save();

            return redirect()->route('portofolio.index')->with('success', 'Data portofolio berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data portofolio.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        $id = Crypt::decrypt($encryptedId);
        $portofolio = Portofolio::findOrFail($id);
        $kategories = Kategori::all();

        return view('admin.backend.portofolio.update', compact('portofolio', 'kategories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        try {
            $validatedData = $request->validate([
                'id_kategori' => 'required|integer',
                'nama_portofolio' => 'required|string',
                'keterangan' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $portofolio = Portofolio::findOrFail($id);
            $portofolio->id_kategori = $validatedData['id_kategori'];
            $portofolio->nama_portofolio = $validatedData['nama_portofolio'];
            $portofolio->keterangan = $validatedData['keterangan'];

            if ($request->hasFile('foto')) {
                Storage::delete($portofolio->foto);
                $fotoPath = $request->file('foto')->store('public/portofolio');
                $fotoUrl = str_replace('public/', 'storage/', $fotoPath);
                $portofolio->foto = $fotoUrl;
            }
            $portofolio->save();
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
            $portofolio = Portofolio::findOrFail($id);
            $portofolio->delete();
            Storage::delete($portofolio->foto);
            Alert::success('Success', 'Data Berhasil Dihapus')->showConfirmButton('OK', '#3085d6');
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menghapus Data')->showConfirmButton('OK', '#d33');
            return redirect()->back()->with('error', 'Gagal menghapus Data');
        }
    }
}
