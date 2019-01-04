<?php

namespace App\Http\Controllers;

use App\Murid;
// use App\Poin;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PoinController extends Controller
{
    public function poinHistoryDT($id)
    {
        try {
            $poin = Poin::where('murid_id', '=', $id)->orderBy('created_at', 'desc');
            $dt = DataTables::of($poin)
                ->editColumn('created_at', function ($res) {
                    return $res->created_at->toFormattedDateString();
                })
                ->make(true);
            return $dt;

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poin = new Poin([
            'poin' => 1,
            'keterangan' => $request->keterangan
        ]);
        $murid = Murid::find($request->murid_id);
        $murid->poin()->save($poin);
        //  $murid =  Murid::findOrFail($id)->delete();
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poin $poin
     * @return \Illuminate\Http\Response
     */
    public function show(Poin $poin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poin $poin
     * @return \Illuminate\Http\Response
     */
    public function edit(Poin $poin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Poin $poin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poin $poin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poin $poin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poin $poin)
    {
        //
    }
}
