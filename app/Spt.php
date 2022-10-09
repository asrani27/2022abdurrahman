<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spt extends Model
{
    protected $table = 'spt';
    protected $guarded = ['id'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
    public function biaya()
    {
        return $this->belongsTo(Biaya::class, 'biaya_id');
    }
    public function skpd()
    {
        return $this->belongsTo(Skpd::class, 'skpd_id');
    }
}
