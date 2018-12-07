<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\SesiKelas;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SesiKelasController extends Controller
{
    public function sesiDT()
    {
        $sesi = SesiKelas::query();
        try {
            return $dt = DataTables::of($sesi)
                ->addColumn('action', function ($res) {
                    return '<a href="' . route('sesi-kelas.edit', $res->id) . '" class="btn btn-outline-dark btn-sm"><i class="os-icon os-icon-pencil-1"></i> </a> ';
                })->make(true);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('sesi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sesi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sesi = new SesiKelas();
        $sesi->hari = $request->hari;
        $sesi->jam_mulai = $request->jam_mulai;
        $sesi->jam_selesai = $request->jam_selesai;
        $sesi->save();

        return redirect()->route('sesi-kelas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SesiKelas $sesiKelas
     * @return \Illuminate\Http\Response
     */
    public function show(SesiKelas $sesiKelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sesi_kelas = SesiKelas::find($id);
        return view('sesi.edit', compact('sesi_kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sesi = SesiKelas::find($id);
        $sesi->hari = $request->hari;
        $sesi->jam_mulai = $request->jam_mulai;
        $sesi->jam_selesai = $request->jam_selesai;
        $sesi->save();

        return redirect()->route('sesi-kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SesiKelas $sesiKelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(SesiKelas $sesiKelas)
    {
        //
    }
}
