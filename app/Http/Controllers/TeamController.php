<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $teams = DB::table('teams')->get();
        return view('admin.backend.team.index', ['teams' => $teams]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.backend.team.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $teams = new Team([
            'nama' => $validatedData['nama'],
            'jabatan' => $validatedData['jabatan'],
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/teams');
            $fotoUrl = str_replace('public/', 'storage/', $fotoPath);
            $teams->foto = $fotoUrl;
        }
        $teams->save();
        Alert::success('Success', 'Data saved successfully!')->showConfirmButton('OK', '#3085d6');

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        $id = Crypt::decrypt($encryptedId);
        $teams = Team::findOrFail($id);
        return view('admin.backend.team.update', compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required|string',
                'jabatan' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $teams = Team::findOrFail($id);
            $teams->nama = $validatedData['nama'];
            $teams->jabatan = $validatedData['jabatan'];
            if ($request->hasFile('foto')) {
                Storage::delete($teams->foto);
                $fotoPath = $request->file('foto')->store('public/teams');
                $fotoUrl = str_replace('public/', 'storage/', $fotoPath);
                $teams->foto = $fotoUrl;
            }

            $teams->save();
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
            $teams = Team::findOrFail($id);
            $teams->delete();
            Storage::delete($teams->foto);
            Alert::success('Success', 'Data Berhasil Dihapus')->showConfirmButton('OK', '#3085d6');
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menghapus Data')->showConfirmButton('OK', '#d33');
            return redirect()->back()->with('error', 'Gagal menghapus Data');
        }
    }
}
