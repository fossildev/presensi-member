<?php

namespace App\Http\Controllers;

use App\Murid;
use App\Poin;
use App\Presensi;
use App\SesiKelas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function index()
    {
        return view('presensi.index');
    }

    public function presensi(Request $request)
    {
        $date = Carbon::now()->setTimezone('Asia/Jakarta');
        $sesi = SesiKelas::all();
        $now = $date->format('Y-m-d H:i:s');
        $day = $date->format('l');

        $output = array();
        foreach ($sesi as $sesi_kelas) {
            $start = Carbon::parse($sesi_kelas->jam_mulai)->format('Y-m-d H:i:s');
            $end = Carbon::parse($sesi_kelas->jam_selesai)->format('Y-m-d H:i:s');

            //cek sesi kelas
            if ($now > $start && $now < $end) {
                //cek murid sudah pernah absen pada sesi kelas
                $new_presensi = Presensi::where('murid_id', '=', $request->id)->whereBetween('created_at', [$start, $end])->first();
                $presensi_exist_time = $new_presensi['created_at'];
                //dd($presensi_exist_time);
                if ($new_presensi !== null && $presensi_exist_time > $start && $presensi_exist_time < $end) {
                    $output = array();
                    $output = array(['type' => 'warning', 'message' => $new_presensi->murid->nama_lengkap . ' Telah melakukan presensi pada sesi kelas saat ini']);
                } else {
                    $poin = new Poin();
                    $poin->poin = 1;
                    $poin->keterangan = 'Kehadiran';
                    $murid = Murid::find($request->id);
                    if ($murid->status_murid == 0) {
                        $hadir = $murid->presensi()->count();
                        if ($hadir > 3) {
                            $output = array();
                            $output = array(['type' => 'warning', 'message' => 'Kamu telah 3 kali hadir, silahkan mengisi data lengkap kamu <a href="' . route('murid.edit', $request->id) . '">disini</a>']);
                            break;
                        }
                    }
                    $murid->poin()->save($poin);
                    $presensi = new Presensi();
                    $presensi->murid()->associate($murid);
                    $presensi->save();
                    $output = array();
                    $output = array(['type' => 'success', 'message' => $murid->nama_lengkap . ' Berhasil melakukan presensi']);
                    break;
                }
            } else {
                $output = array(['type' => 'warning', 'message' => 'Tidak ada kelas yg aktif pada saat ini ']);
            }
        }
        return response()->json($output);

    }
}
