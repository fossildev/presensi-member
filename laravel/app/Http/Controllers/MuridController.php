<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Murid;
// use App\Poin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Exceptions\Exception;
use PDF;

class MuridController extends Controller
{
    public function downloadPDF($id){
        $murid = Murid::find($id);
  
        $pdf = PDF::loadView('pdf', compact('murid'));
        return $pdf->download('invoice.pdf');
  
      }

    public function bulkAdd()
    {
        $kelas = Kelas::all();
        return view('bulk.create', compact('kelas'));
    }

    public function bulkAddPost(Request $request)
    {
        for ($i = 0; $i < $request->jumlah; $i++) {
            $murid = new Murid();
            $murid->nama_lengkap = 'Murid Baru';
            $murid->gender = 'N';
            $murid->nim = '18.xx.xxx';
            $murid->kelas_mhs = '18-xxxx-xx';
            $murid->nama_panggilan = 'Nama Panggilan';
            $murid->no_telepon = '00';
            $murid->alamat = 'Alamat Member';
            $kelas = Kelas::find($request->kelas);
            $murid->kelas()->associate($kelas);
            $save = $murid->save();
        }


        return redirect()->route('murid.index');
    }

    public function indexDT()
    {
        $murid = Murid::query();
        try {
            $dt = DataTables::of($murid)
                ->addColumn('action', function ($res) {
                    return '<input type="hidden" id="murid-id" value="' . $res->id . '"><a href="' . route('murid.show', $res->id) . '" class="btn btn-outline-primary btn-sm"><i class="os-icon os-icon-edit-3"></i></a> 
                    <a href="javascript:void(0)"  data-id="'.$res->id.'" class="btn btn-outline-danger btn-sm poin-btn"><i class="os-icon os-icon-ui-15"></i></a>';
                })
                ->editColumn('kelas_id', function ($res) {
                    return strtoupper($res->kelas->nama_kelas);
                })
                ->editColumn('gender', function ($res) {
                    if ($res->gender == 'L')
                        return 'LAKI-LAKI';
                    else
                        return 'PEREMPUAN';
                })
                ->editColumn('tanggal_lahir', function ($res) {
                    return Carbon::parse($res->tanggal_lahir)->age;
                })
                ->removeColumn('tempat_lahir', 'alamat', 'no_telepon', 'foto' , 'created_at', 'updated_at')
                ->make(true);
        } catch (\Exception $exception) {
            return $exception;
        }
        return $dt;
    }

    public function dropZoneUpload(Request $request)
    {
        //dd($request->file('file'));
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('storage/img/foto-murid', 'public');
        }
        return response()->json($path);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($this->indexDT());

        return view('murid.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('murid.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $murid = new Murid();
        $murid->id = $request->id;
        $murid->murid_id = $request->murid_id;
        $murid->nama_lengkap = $request->nama_lengkap;
        $murid->gender = $request->gender;
        $murid->nim = $request->nim;
        $murid->kelas_mhs = $request->kelas_mhs;
        $murid->nama_panggilan = $request->nama_panggilan;
        $murid->no_telepon = $request->no_telepon1 . ',' . $request->no_telepon2;
        $murid->alamat = $request->alamat;
        $murid->foto = $request->foto;
        $kelas = Kelas::find($request->kelas);
        $murid->kelas()->associate($kelas);
        $save = $murid->save();

        return redirect()->route('murid.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $murid = Murid::find($id);
        return view('murid.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $murid = Murid::find($id);
        $kelas = Kelas::all();
        return view('murid.edit', compact('murid', 'kelas'));
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

        $murid = Murid::find($id);
        $murid->id = $request->id;
        $murid->murid_id = $request->murid_id;
        $murid->nama_lengkap = $request->nama_lengkap;
        $murid->gender = $request->gender;
        $murid->nim = $request->nim;
        $murid->kelas_mhs = $request->kelas_mhs;
        $murid->nama_panggilan = $request->nama_panggilan;
        $murid->no_telepon = $request->no_telepon1 . ',' . $request->no_telepon2;
        $murid->alamat = $request->alamat;
        if (isset($request->foto)) {
            $murid->foto = $request->foto;
        }
        $kelas = Kelas::find($request->kelas);
        $murid->kelas()->associate($kelas);
        $save = $murid->save();
        return redirect()->route('murid.index', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $murid =  Murid::findOrFail($id)->delete();
        // Session::flash('Item successfully deleted');
        return redirect('murid');
    
   
        //
    }

    public function xx(Request $request)
    {
        // $poin = new Poin([
        //     'poin' => 1,
        //     'keterangan' => $request->keterangan
        // ]);
        // $murid = Murid::find($request->murid_id);
        // $murid->poin()->save($poin);
        //  $murid =  Murid::findOrFail($id)->delete();
        // return redirect()->back();
    }
}
