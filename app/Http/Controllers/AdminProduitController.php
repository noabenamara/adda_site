<?php

namespace App\Http\Controllers;

use App\Models\Producteur;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminProduitController extends Controller
{
    public function index(): View{
        return view('administration.produit.index', [
            'produits' => Produit::all(),
            'producteurs' => Producteur::all()
        ]);
    }

    public function create(): View{
        return view('administration.produit.create', [
            'producteurs' => Producteur::all()
        ]);
    }

    public function store(Request $request){
        $produit = Produit::create([
            'libelle'=>$request->string('libelle'),
            'producteur_id'=>$request->string('producteur_id'),
        ]);
        return redirect(route('administration.produit.index'))->with('success','Nouvel produit sauvegardé');
    }

        public function edit(Produit $produit): View{
        return view('administration.produit.edit',[
                'produit' => $produit,
                'producteurs' => Producteur::all()
        ]);
    }

    public function update(Request $request,produit $produit){
        $produit->update([
            'libelle'=>$request->string('libelle'),
            'producteur_id'=>$request->integer('producteur_id'),
        ]);
        return redirect(route('administration.produit.index'))->with('success','produit modifié');
    }

    public function destroy(Request $request,Produit $produit){
        $produit->delete();
        return redirect(route('administration.produit.index'))->with('success','produit supprimé');
    }
}
