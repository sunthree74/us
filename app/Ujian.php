<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tipeujian()
    {
        return $this->belongsTo(TipeUjian::class);
    }
}
