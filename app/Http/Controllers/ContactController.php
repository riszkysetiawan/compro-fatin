<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $contacts = DB::table('contact')->get();
        return view('admin.backend.contact.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.backend.contact.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required|string',
                'email' => 'required|string',
                'telp' => 'required|string',
            ]);
            $contact = new Contact([
                'nama' => $validatedData['nama'],
                'email' => $validatedData['email'],
                'telp' => $validatedData['telp'],
            ]);
            $contact->save();
            Alert::success('Success', 'Data saved successfully!')->showConfirmButton('OK', '#3085d6');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menyimpan data')->showConfirmButton('OK', '#d33');
            return redirect()->back();
        }
    }
    public function storeuser(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required|string',
                'email' => 'required|string',
                'telp' => 'required|string',
            ]);
            $contact = new Contact([
                'nama' => $validatedData['nama'],
                'email' => $validatedData['email'],
                'telp' => $validatedData['telp'],
            ]);
            $contact->save();
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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        $id = Crypt::decrypt($encryptedId);
        $contact = Contact::findOrFail($id);
        return view('admin.backend.contact.update', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required|string',
                'email' => 'required|string',
                'telp' => 'required|string',
            ]);

            $contact = Contact::findOrFail($id);
            $contact->nama = $validatedData['nama'];
            $contact->email = $validatedData['email'];
            $contact->telp = $validatedData['telp'];

            $contact->save();
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
            $contact = Contact::findOrFail($id);
            $contact->delete();
            Alert::success('Success', 'Data Berhasil Dihapus')->showConfirmButton('OK', '#3085d6');
            return redirect()->back()->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menghapus Data')->showConfirmButton('OK', '#d33');
            return redirect()->back()->with('error', 'Gagal menghapus Data');
        }
    }
}
