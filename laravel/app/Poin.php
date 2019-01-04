<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Poin
 *
 * @property int $id
 * @property int $murid_id
 * @property int $poin
 * @property string $keterangan
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Murid $murid
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poin whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poin whereMuridId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poin wherePoin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Poin whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Poin extends Model
{
    protected $table = 'poin';
    protected $fillable = ['murid_id', 'poin', 'keterangan'];

    // protected $table = 'murid';
    // protected $fillable = ['murid_id', 'nama_lengkap', 'gender', 'nama_panggilan','nim','kelas_mhs',  'alamat', 'no_telepon', 'kelas_id', 'status_murid', 'foto'];

    public function murid()
    {
        return $this->belongsTo(Murid::class);
    }
}
