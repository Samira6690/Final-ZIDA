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

class Commande extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'date_commande',
        'montant',
        'commande_id',
        'styliste_id',
        'user_id',
    ];
    public function utilisateur() {
        return $this->belongsTo(Utilisateur::class);
    }

    public function produit() {
        return $this->belongsToMany(Produit::class, 'produit_commande');
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
