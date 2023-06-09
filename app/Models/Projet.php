<?php

namespace App\Models;
use App\Models\TypeProjet;
use App\Models\ImageProjet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projet extends Model
{
    use HasFactory;

    public function typeprojet() : BelongsTo
    {
        return $this->belongsTo(TypeProjet::class);
    }

    public function imageprojets() : HasMany
    {
        return $this->hasMany(ImageProjet::class);
    }

}
