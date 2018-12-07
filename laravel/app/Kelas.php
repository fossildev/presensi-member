<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Kelas
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $nama_kelas
 * @property string $deskripsi
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kelas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kelas whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kelas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kelas whereNamaKelas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kelas whereUpdatedAt($value)
 * @property-read \App\Murid $murid
 */
class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas', 'deskripsi'];

    public function murid()
    {
        return $this->hasOne(Murid::class);

    }
}
