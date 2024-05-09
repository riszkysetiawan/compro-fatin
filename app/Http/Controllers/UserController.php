<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;
use Spatie\LaravelIgnition\Solutions\UseDefaultValetDbCredentialsSolution;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $users = DB::table('users')->get();
        return view('admin.backend.user.index', ['users' => $users]);
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
                'name' => 'required|string',
                'email' => 'required|string|email|unique:users,email',
                'password' => 'required|string|min:8',
                'role' => 'required|string',
            ]);

            $user = new User([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'role' => $validatedData['role'],
            ]);

            $user->save();

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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        $id = Crypt::decrypt($encryptedId);
        $users = user::findOrFail($id);
        return view('admin.backend.user.update', compact('users'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'role' => 'required|string',
                'password' => 'nullable|string', // Password tidak wajib diisi
            ]);

            $users = User::findOrFail($id);

            if (!empty($validatedData['password'])) {
                // Jika password baru diisi, periksa password lama
                if (!Hash::check($request->password_old, $users->password)) {
                    Alert::error('Error', 'Password lama tidak sesuai')->showConfirmButton('OK', '#d33');
                    return redirect()->back();
                }

                $users->password = Hash::make($validatedData['password']);
            }

            $users->name = $validatedData['name'];
            $users->email = $validatedData['email'];
            $users->role = $validatedData['role'];
            $users->save();

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
            $users = user::findOrFail($id);
            $users->delete();
            Alert::success('Success', 'Data Berhasil Dihapus')->showConfirmButton('OK', '#3085d6');
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menghapus Data')->showConfirmButton('OK', '#d33');
            return redirect()->back()->with('error', 'Gagal menghapus Data');
        }
    }
}
