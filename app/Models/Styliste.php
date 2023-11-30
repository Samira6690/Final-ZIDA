<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use App\Models\Styliste;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Commentaire;
use App\Models\Catégorie;
use App\Models\Rendezvou;
class Styliste extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'nom_entreprise',
        'contact',
        'localisation',
        'photo',
        'user_id',

    ];
    public function produits() {
        return $this->hasMany(Produit::class);
    }

    public function rendezvous() {
        return $this->hasMany(RendezVou::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }

}
