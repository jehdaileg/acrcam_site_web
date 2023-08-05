<?php

namespace App\Models;

use App\Models\Activite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageActivite extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }
}
