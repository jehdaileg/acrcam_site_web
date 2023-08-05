<?php

namespace App\Models;

use App\Models\ImageActivite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activite extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function imagesactivites()
    {
        return $this->hasMany(ImageActivite::class);
    }
}
