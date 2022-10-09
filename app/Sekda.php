<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekda extends Model
{
    protected $table = 'sekda';
    protected $guarded = ['id'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
}
