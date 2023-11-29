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
class CategorieController extends Controller
{
    public function liste_categorie(){

        $categories = Categorie::all();
           return view('categorie.liste', compact('categories'));
        }
        public function ajouter2_categorie()
        {
            // $stylistes =  Styliste::find($request->id);
            // $produits = Produit::all();
            // $catégories = Catégorie::all();
            // $commandes = Commande::all();
            // $transactions = Transaction::all();
            // $users = User::all();
            // $commentaires = Commentaire::all();
            // $rendezvous = Rendezvou::all();
            return view('categorie.ajouter2');
        }
        public function ajouter2_categorie_traitement(Request $request)
        {
            $request->validate([
                'nom' => 'required',
        ]);

         $categorie = new Categorie();
         $categorie->nom = $request->nom;
         $categorie->save();
         return redirect('/categorie')->with('status', 'La categorie a bien été ajouté avec success');
        }
        public function update2_categorie($id){
        $categories =  Categorie::find($request->id);
        // $produits = Produit::all();
        return view('categorie.update2', compact('categories'));
    }
    public function update2_categorie_traitement(Request $request){
            $request->validate([
                'nom' => 'required',
        ]);
        $categorie->nom = $request->nom;
        // $produits = Produit::all();
        $categorie->update();
        return redirect('/categorie')->with('status', 'La categorie a bien été modifier avec susses');
    }
        public function delete_categorie($id){
        $categorie =  Categorie::find($id);
        //  $produits = Produit::all();
        $categorie->delete();
       return redirect('/categorie')->with('status', 'La categorie a bien été supprimer avec success');

    }
    }




