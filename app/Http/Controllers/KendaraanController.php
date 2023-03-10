<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Kendaraan::latest()->get();
        return view('/dashboard/kendaraan/index', [
            'kendaraans' => $kendaraan
        ]);
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
        $validation = $this->validation();
        $validation['image'] = 'image|required';
        $validator = $request->validate($validation);

        $validator['image'] = $request->file('image')->store('images');

        Kendaraan::create($validator);

        return redirect('/dashboard/kendaraan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('/dashboard/kendaraan/ubah', [
            'kendaraans' => $kendaraan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $validateData = $request->validate($this->validation());

        if ($request->file('image')) {
            if ($request->oldimage) {
                Storage::delete($request->oldimage);
            }
            $validateData['image'] = $request->file('image')->store('images');
        }

        Kendaraan::where('id', $kendaraan->id)->update($validateData);

        return redirect('/dashboard/kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        if ($kendaraan->image) {
            Storage::delete($kendaraan->image);
        }

        Kendaraan::destroy($kendaraan->id);

        return redirect('/dashboard/kendaraan');
    }

    public function validation()
    {
        return [
            'mobil' => 'required',
            
            'konsumsi_bbm' => 'required',
            'jadwal_service' => 'required',
            'jumlah' => 'required'
        ];
    }
}
