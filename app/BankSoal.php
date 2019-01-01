<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankSoal extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ujians()
    {
        return $this->hasMany(Ujian::class);
    }

    public function tipeujian()
    {
        return $this->belongsTo(TipeUjian::class);
    }
}
