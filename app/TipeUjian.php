<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeUjian extends Model
{
    //

    public function banksoals()
    {
        return $thi->hasMany(BankSoal::class);
    }

    public function ujians()
    {
        return $this->hasMany(Ujian::class);
    }
}