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
use App\Models\Categorie;
use App\Models\Rendezvou;
class Produit extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'nom',
        'image',
        'montant',
        'description',
        'styliste_id',
        'categorie_id',
    ];
    public function styliste(){
        return $this->belongsTo(Styliste::class);
    }

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }
}
