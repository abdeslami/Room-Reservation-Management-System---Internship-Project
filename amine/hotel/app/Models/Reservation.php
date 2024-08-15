<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservation';
    protected $fillable=[
      'date_debut_re',
      'date_fin_re',
      'etat_re',
      'nom_re',
    'id_chambre',
    'id_user',
    ];
}
