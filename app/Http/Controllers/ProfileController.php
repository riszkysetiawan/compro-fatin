<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        // dd($user);
        return view('admin.backend.profile.index', compact('user'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = Auth::user();

        return view('admin.backend.profile.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);

        if (!$request->filled('password_old')) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            Alert::success('Success', 'Profil berhasil diperbarui.');
            return redirect()->route('profile.index');
        }

        if (!Hash::check($request->password_old, $user->password)) {
            Alert::error('Error', 'Password lama tidak sesuai.');
            return redirect()->back();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Alert::success('Success', 'Profil berhasil diperbarui.');
        return redirect()->route('profile.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
