<?php

namespace App\Models;
use App\Models\Projet;;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeProjet extends Model
{
    use HasFactory;

    protected $fillable = ['nameTypeProjet'];

    public function projets() :HasMany
    {
        return $this->hasMany(Projet::class);
    }
}
