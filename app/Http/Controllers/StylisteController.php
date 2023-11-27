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
class StylisteController extends Controller
{
    public function liste_styliste(){

        $stylistes = Styliste::all();
           return view('styliste.liste', compact('stylistes'));
        }
        public function ajouter_styliste()
        {
            // $stylistes =  Styliste::find($request->id);
            // $produits = Produit::all();
            // $catégories = Catégorie::all();
            // $commandes = Commande::all();
            // $transactions = Transaction::all();
            // $users = User::all();
            // $commentaires = Commentaire::all();
            // $rendezvous = Rendezvou::all();
            return view('styliste.ajouter');
        }
        public function ajouter_styliste_traitement(Request $request)
        {
            $user= auth()->user();
            $request->validate([
                'nom_entreprise' => 'required',
                'contact' => 'required',
              'localisation' => 'required',
           'photo' => 'required',
          
        ]);

         $styliste = new Styliste();
         $styliste->nom_entreprise = $request->nom_entreprise;
         $styliste->contact = $request->contact;
         $styliste->localisation = $request->localisation;
         $styliste->user_id = $user->id;
         $styliste->photo= $request->photo;

         $styliste->save();
         return redirect('/styliste')->with('status', 'Le styliste a bien été ajouté avec success');
        }
        public function update_styliste(){
        $stylistes =  Styliste::find($request->id);
        $produits = Produit::all();
        $catégories = Catégorie::all();
        $commandes = Commande::all();
        $transaction = Transaction::all();
        $users = User::all();
        $commentaires = Commentaire::all();
         $rendezvous = Rendezvou::all();
        return view('/update_styliste', compact('styliste','produits', 'catégories','Commandes', 'transactions', 'users', 'commentaires'));
    }
    public function update_styliste_traitement(Request $request){

            $request->validate([
                'nom_entreprise' => 'required|string',
                'contact' => 'required|string',
              'localisation' => 'required|string',
           'photo' => 'photo',
        ]);
             if ($request->hasFile('photo')) {
               $photoPath = $request->file('photo')->store('stylistes_photos', 'public');
              $validatedData['photo'] = $photoPath;
         }
        $stylistes =  Styliste::find($request->id);
        $produits = Produit::all();
        $catégories = Catégorie::all();
        $commandes = Commande::all();
        $transactions = Transaction::all();
        $users = User::all();
        $commentaires = Commentaire::all();
        $rendezvous = Rendezvou::all();
        $styliste->update();
        return redirect('/styliste')->with('status', 'Le styliste a bien été modifier avec susses');

    }
        public function delete_styliste($id){
        $styliste=  Styliste::find($id);
         $produits = Produit::all();
         $catégories = Catégorie::all();
        $commandes = Commande::all();
        $transactions = Transaction::all();
        $users = User::all();
        $commentaires = Commentaire::all();
        $rendezvous = Rendezvou::all();
        $styliste->delete();
       return redirect('/styliste')->with('status', 'Le styliste a bien été supprimer avec success');

    }
    }


