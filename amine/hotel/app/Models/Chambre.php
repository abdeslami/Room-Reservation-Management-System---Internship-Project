<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = [
       'type_c',
       'review_c',
       'capacity_c',
       'titre_c',
       'prix_c',
       'etat_c',
       'image_c',
       
    ];
}
