<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProduitController extends Controller
{
    public function index(): View{
        return view('produit.index',[
            'produits' => Produit::all()
        ]);
    }

    public function show(produit $produit): View{
        return view('produit.detail',[
            'produit' => $produit
        ]);
    }
}
