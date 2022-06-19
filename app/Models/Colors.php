<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Palette;

class Colors extends Model
{
    use HasFactory;
    protected $fillable = ['hexCode', 'colorName'];

    public function palettes(){
        return $this->BelongsToMany(Palette::class);
    }
}
