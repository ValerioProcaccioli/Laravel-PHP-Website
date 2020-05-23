<?php

namespace App\Models;

use App\Models\Resources\Category;
use App\Models\Resources\Product;

class Catalog {
    
   
    public function getTopCats() {
        return Category::where('parId', 0)->get();
    }

    public function getCatsByParId($topId) {
        return Category::whereIn('parId', $topId)->get();
    }

    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsByCat($catId, $paged = 1, $order = null, $discounted = false) {

        $prods = Product::whereIn('catId', $catId)
                ->orWhereHas('prodCat', function ($query) use ($catId) {
                        $query->whereIn('parId', $catId);
        });
        if ($discounted) {
            $prods = $prods->where('discounted', true);
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('prodId', $order);
        }
        return $prods->paginate($paged);
    }
    
    public function getProdById($prodId) {
        return Product::whereIn('prodId', $prodId)->get()->first();
    }
    
    public function getAllProds() {
        $prods = Product::where('prodId','>','0');
        return $prods->paginate(3);
    }
    //dovrebbe estrarre i prodotti ordinati per prezzo
    public function getOrderProds($catId, $order = null ){
        
        $prods = Product::whereIn('catId', $catId)
                ->orWhereHas('prodCat', function ($query) use ($catId) {
                    $query->whereIn('parId', $catId);
                });
        if(!is_null($order)){
        $prods = $prods->orderBy('price', $order);
        return $prods->paginate(3);
        }
        else 
        return $prods->paginate(3);
   
        
    }

}