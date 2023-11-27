<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Styliste;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Commentaire;
use App\Models\Catégorie;
use App\Models\Rendezvou;
class ProduitController extends Controller
{
    public function liste_produit(){
        $produit = Produit::all();

   //  $styliste = auth()->user()->styliste;
   //   $produits = $styliste->produits;

   //  $produits = Produit::with('styliste')->get();

   return view('produit.liste', compact('produit'));
}

   public function ajout_produit()
   {
         $stylistes =  Styliste::all();
       return view('produit.ajout',compact('stylistes'));
   }
   public function ajout_produit_traitement(Request $request)
   {
       $request->validate([
           'nom' => 'required',
           'montant' => 'required',
         'styliste_id' => 'required',
   ]);
   // $styliste = auth()->user()->styliste;
    $produit = new Produit();
       $produit->nom = $request->nom;
       $produit->montant = $request->montant;
       $produit->styliste_id= $request->styliste_id;
   $produit->save();
   // $styliste->produits()->save();
   return redirect('/produit')->with('status', 'Le produit a bien été ajouté avec success');
}

public function update1_produit()
{
   $produits = Produit::find($request->id);
    $styliste =  Styliste::all();
   return view('produit.update1');
}
public function update1_produit_traitement(Request $request)
{
   $request->validate([
       'nom' => 'required',
       'montant' => 'required',
     'styliste_id' => 'required',
]);
$styliste = auth()->user()->styliste;
$produit = new Produit([
    'nom' => $request->input('nom'),
    'montant' => $request->input('montant'),
   // $produit->nom = $request->nom;
   // $produit->montant = $request->montant;
   // $produit->styliste_id = $request->styliste_id;
]);
$styliste->produits()->save($produit);
return redirect('/produit')->with('status', 'Le produit a bien été modifié avec success');
}

  public function delete_produit($id){
   $produits = Produit::find($request->id);
   $stylistes =  Styliste::all();
   $produit->delete();
      return redirect('/produit')->with('status', 'Le produit a bien été supprimer avec success');
}
}


