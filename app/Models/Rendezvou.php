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
class Rendezvou extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'date',
        'styliste_id',
        'user_id',
    ];
    public function styliste() {
        return $this->belongsTo(Styliste::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
