<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    protected $table = 'biaya';
    protected $guarded = ['id'];
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
}
