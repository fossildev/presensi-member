<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Murid
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $nama_lengkap
 * @property string $gender
 * @property string|null $nama_panggilan
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string|null $alamat
 * @property string|null $no_telepon
 * @property int $kelas_id
 * @property int $status_murid
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Kelas $kelas
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Murid whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Murid whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Murid whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Murid whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Murid whereKelasId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Murid whereNamaLengkap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Murid whereNamaPanggilan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Murid whereNoTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Murid whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Poin[] $poin
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Presensi[] $presensi
 */
class Murid extends Model
{
    protected $table = 'murid';
    protected $fillable = ['nama_lengkap', 'gender', 'nama_panggilan','nim','kelas_mhs',  'alamat', 'no_telepon', 'kelas_id', 'status_murid'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function poin()
    {
        return $this->hasMany(Poin::class);
    }

    public function presensi()
    {
        return $this->hasMany(Presensi::class);
    }


}
