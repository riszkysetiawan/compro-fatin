<?php

namespace App\Http\Controllers;

use App\Models\BannerSlider;
use App\Http\Requests\StoreBannerSliderRequest;
use App\Http\Requests\UpdateBannerSliderRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;

class BannerSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $sliders = DB::table('Banner_Slider')->get();
        return view('admin.backend.slider.index', ['sliders' => $sliders]);
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
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'sub_judul' => 'required|string',
            'caption' => 'required|string',
            'button' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'foto_utama' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bg_foto' => 'required|string',
        ]);

        $bannerSlider = new BannerSlider([
            'judul' => $validatedData['judul'],
            'sub_judul' => $validatedData['sub_judul'],
            'caption' => $validatedData['caption'],
            'button' => $validatedData['button'],
            'bg_foto' => $validatedData['bg_foto'],
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/slider');
            $fotoUrl = str_replace('public/', 'storage/', $fotoPath);
            $bannerSlider->foto = $fotoUrl;
        }

        // if ($request->hasFile('foto_utama')) {
        //     $fotoUtamaPath = $request->file('foto_utama')->store('public/slider');
        //     $fotoUtamaUrl = str_replace('public/', 'storage/', $fotoUtamaPath);
        //     $bannerSlider->foto_utama = $fotoUtamaUrl;
        // }

        $bannerSlider->save();
        Alert::success('Success', 'Data saved successfully!')->showConfirmButton('OK', '#3085d6');

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(BannerSlider $bannerSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        $id = Crypt::decrypt($encryptedId);
        $slider = BannerSlider::findOrFail($id);
        return view('admin.backend.slider.update', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'judul' => 'required|string',
                'sub_judul' => 'required|string',
                'caption' => 'required|string',
                'button' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                // 'foto_utama' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'bg_foto' => 'required|string',
            ]);

            $slider = BannerSlider::findOrFail($id);
            $slider->judul = $validatedData['judul'];
            $slider->sub_judul = $validatedData['sub_judul'];
            $slider->caption = $validatedData['caption'];
            $slider->button = $validatedData['button'];
            $slider->bg_foto = $validatedData['bg_foto'];

            if ($request->hasFile('foto')) {
                Storage::delete($slider->foto);
                $fotoPath = $request->file('foto')->store('public/slider');
                $fotoUrl = str_replace('public/', 'storage/', $fotoPath);
                $slider->foto = $fotoUrl;
            }

            // if ($request->hasFile('foto_utama')) {
            //     Storage::delete($slider->foto_utama);
            //     $fotoUtamaPath = $request->file('foto_utama')->store('public/slider');
            //     $fotoUtamaUrl = str_replace('public/', 'storage/', $fotoUtamaPath);
            //     $slider->foto_utama = $fotoUtamaUrl;
            // }

            $slider->save();
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
            $slider = BannerSlider::findOrFail($id);
            $slider->delete();
            Storage::delete($slider->foto);
            Alert::success('Success', 'Data Berhasil Dihapus')->showConfirmButton('OK', '#3085d6');
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menghapus Data')->showConfirmButton('OK', '#d33');
            return redirect()->back()->with('error', 'Gagal menghapus Data');
        }
    }
}
