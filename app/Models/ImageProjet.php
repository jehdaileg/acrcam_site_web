<?php

namespace App\Models;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageProjet extends Model
{
    use HasFactory;

    protected $fillable = ['projet_id', 'image_projet'];

    public function projet(): BelongsTo
    {
        return $this->belongsTo(Projet::class);
    }
}
