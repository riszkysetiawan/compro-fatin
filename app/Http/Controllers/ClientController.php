<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $clients = DB::table('clients')->get();
        return view('admin.backend.client.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.backend.client.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_client' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $client = new Client([
            'nama_client' => $validatedData['nama_client'],
        ]);

        if ($request->hasFile('logo')) {
            $fotoPath = $request->file('logo')->store('public/client');
            $fotoUrl = str_replace('public/', 'storage/', $fotoPath);
            $client->logo = $fotoUrl;
        }
        $client->save();
        Alert::success('Success', 'Data saved successfully!')->showConfirmButton('OK', '#3085d6');

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        $id = Crypt::decrypt($encryptedId);
        $clients = Client::findOrFail($id);
        return view('admin.backend.client.update', compact('clients'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'nama_client' => 'required|string',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $client = Client::findOrFail($id);
            $client->nama_client = $validatedData['nama_client'];
            if ($request->hasFile('logo')) {
                Storage::delete($client->logo);
                $fotoPath = $request->file('logo')->store('public/client');
                $fotoUrl = str_replace('public/', 'storage/', $fotoPath);
                $client->logo = $fotoUrl;
            }

            $client->save();
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
            $client = Client::findOrFail($id);
            $client->delete();
            Storage::delete($client->logo);
            Alert::success('Success', 'Data Berhasil Dihapus')->showConfirmButton('OK', '#3085d6');
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menghapus Data')->showConfirmButton('OK', '#d33');
            return redirect()->back()->with('error', 'Gagal menghapus Data');
        }
    }
}
