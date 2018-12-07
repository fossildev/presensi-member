<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SesiKelas
 *
 * @property int $id
 * @property string $hari
 * @property string $jam_mulai
 * @property string $jam_selesai
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SesiKelas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SesiKelas whereHari($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SesiKelas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SesiKelas whereJamMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SesiKelas whereJamSelesai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SesiKelas whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SesiKelas extends Model
{
    protected $table = 'sesi_kelas';
    protected $fillable = ['hari', 'jam_mulai', 'jam_selesai'];
}
