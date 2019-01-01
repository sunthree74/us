<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilUjian extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ujian()
    {
        return $this->belongsTo(Ujian::class);
    }
}
