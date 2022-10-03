<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\ProfilUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProfilUpdateRequest;
use App\Http\Requests\UpdateProfilUpdateRequest;

class ProfilUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfilUpdateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfilUpdateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfilUpdate  $profilUpdate
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilUpdate $profilUpdate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfilUpdate  $profilUpdate
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilUpdate $profilUpdate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilUpdateRequest  $request
     * @param  \App\Models\ProfilUpdate  $profilUpdate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update= Home::find($id);
        if( $request->file('img') != null){
            Storage::delete('public/img/'. $update->img);
            Storage::put('public/img/', $request->file('img'));
            $update->img = $request->file('img')->hashName();
            $update->save();
        }
        $update -> nom = $request -> nom;
        $update -> prenom = $request -> prenom;
        $update -> age = $request -> age;
        $update -> save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfilUpdate  $profilUpdate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilUpdate $profilUpdate)
    {
        //
    }
}
