<?php

namespace App\Http\Controllers;

use App\Models\DetailServices;
use App\Http\Requests\StoreDetailServicesRequest;
use App\Http\Requests\UpdateDetailServicesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;
use App\Models\Services;

class DetailServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::with('detailservices', 'detailsliderservices')->get();
        // dd($services);
        return view('admin.backend.detailservices.index', compact('services'));
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
    public function store(StoreDetailServicesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailServices $detailServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailServices $detailServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailServicesRequest $request, DetailServices $detailServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailServices $detailServices)
    {
        //
    }
}
