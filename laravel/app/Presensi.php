<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Presensi
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $murid_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Murid $murid
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presensi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presensi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presensi whereMuridId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presensi whereUpdatedAt($value)
 */
class Presensi extends Model
{
    protected $table = 'presensi';

    protected $fillable = ['murid_id'];

    public function murid()
    {
        return $this->belongsTo(Murid::class);
    }

}
