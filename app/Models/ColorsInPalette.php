<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Colors;
use App\Models\Palette;


class ColorsInPalette extends Model
{
    use HasFactory;

    public function palette(){
        return $this->belongsTo(Palette::class);
    }
    public function color(){
        return $this->belongsTo(Colors::class);
    }
}
