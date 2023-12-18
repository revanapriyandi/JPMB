<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }

    public function kabupaten_lahir()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_lahir_id');
    }

    public function provinsi_lahir()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_lahir_id');
    }
}
