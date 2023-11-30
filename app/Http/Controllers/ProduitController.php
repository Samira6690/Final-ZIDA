<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Styliste;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Commentaire;
use App\Models\Categorie;
use App\Models\Rendezvou;
class ProduitController extends Controller
{
    public function liste_produit(){
  $user = auth()->user();
  $styliste = $user->styliste;
      $produits = $styliste->produits;
   return view('produit.liste', compact('produits'));
}

public function voir($id) 
{
        $produits = Produit::find($id);
     return view('voir', compact('produits'));
  }

   public function ajout_produit()
   {
    $categories = Categorie::all();

       return view('produit.ajout', compact('categories'));
   }
   public function ajout_produit_traitement(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'image' => 'required',
        'montant' => 'required',
        'description' => 'required',
        'categorie' => 'required',
    ]);
    // if ($request->hasFile('image')) {
    //     $photoPath = $request->file('image')->store('produits_images', 'public');
    //     $produit->image = $photoPath;
    // }
    $user = auth()->user();
    $styliste = $user->styliste;
   $produit = new Produit();
   $produit->nom = $request->nom;
   $produit->montant = $request->montant;
   $produit->image = $request->image;
   $produit->description = $request->description;
    $produit->styliste_id = $styliste->id;
   $produit->categorie_id = $request->categorie;
    $produit->save();

    return redirect('/produit')->with('status', 'Le produit a bien été ajouté avec succès');
}
public function update_produit($id)
{
    $produit = Produit::find($id);
    $categories = Categorie::all();
    return view('produit.update', compact('produit', 'categories'));
}
 public function update_produit_traitement(Request $request)
{
     $user = auth()->user();
    $request->validate([
        'nom' => 'required',
        'image' => 'required',
        'montant' => 'required',
        'description' => 'required',
        'categorie' => 'required',
    ]);
    if ($request->hasFile('image')) {
        $photoPath = $request->file('image')->store('produits_images', 'public');
        $produit->image = $photoPath;
    }
$user = auth()->user();
$styliste = $user->styliste;
$produit= new Produit();
$produit->nom= $request->nom;
$produit->montant= $request->montant;
$produit->styliste_id= $request->styliste_id;
$produit->categorie_id= $request->categorie;
    
    $produit->save();
    return redirect('/produit')->with('status', 'Le produit a bien été modifié avec succès');
}

public function delete_produit($id)
{
    $produit = Produit::find($id);
    $produit->delete();

    return redirect('/produit')->with('status', 'Le produit a bien été supprimé avec succès');
}

}


