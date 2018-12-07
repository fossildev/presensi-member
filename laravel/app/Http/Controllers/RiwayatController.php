<?php


namespace App\Http\Controllers;

use app\Riwayat;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RiwayatController extends Controller
{
  public function riwayatDT()
  {
      $presensi = PresensiController::query();
      try {
          $dt = DataTables::of($presensi)
              ->addColumn('action', function ($res) {
                  return '<a href="' . route('riwayat.edit', $res->id) . '" class="btn btn-outline-dark btn-sm"><i class="os-icon os-icon-pencil-1"></i> </a> ';
              })->make(true);
      } catch (\Exception $exception) {
          return $exception;
      }

      return $dt;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $presensi = RiwayatController::all();
        return view('riwayat.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $riwayat = new RiwayatPresensi();
      $riwayat->id = $request->id;
      $riwayat->murid_id = $request->murid_id;
      $sesi->save();

      return redirect()->route('riwayat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
