<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bendahara extends Model
{
    protected $table = 'bendahara';
    protected $guarded = ['id'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
}
