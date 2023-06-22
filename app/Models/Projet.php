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

    protected $fillable = ['name', 'commmentaires_projet', 'date_realisation', 'partenaire_concerne','revenu_benefice_projet', 'statut_projet', 'type_projet_id'];

    public function type_projet() : BelongsTo
    {
        return $this->belongsTo(TypeProjet::class);
    }

    public function imageprojets() : HasMany
    {
        return $this->hasMany(ImageProjet::class);
    }

    public function getStatusProjet()
    {
        return [
            '1' => 'En cours de réalisation',
            '2' => 'Réalisé'
        ];
    }

}
