<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $guarded = [


    ];

    //protected $fillable = ['identifiant_agent', 'nom_complet', 'adresse_de_residence', 'telephone', 'poste', 'nombre_de_mois_contrat', 'typeagent', 'photo'];
}
