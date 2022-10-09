<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sppd extends Model
{

    protected $table = 'sppd';
    protected $guarded = ['id'];
    public function spt()
    {
        return $this->belongsTo(Spt::class, 'spt_id');
    }
    public function sekda()
    {
        return $this->belongsTo(Sekda::class, 'sekda_id');
    }
    public function biaya()
    {
        return $this->belongsTo(Biaya::class, 'biaya_id');
    }
}
