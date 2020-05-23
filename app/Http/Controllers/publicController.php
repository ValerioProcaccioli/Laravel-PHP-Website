<?php

namespace App\Http\Controllers;

use App\Models\Catalog;

class PublicController extends Controller {
    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog;
    }

    public function showAllCatalog() {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        //Prodotti in sconto di tutte le categorie, ordinati per sconto decrescente DA INSERIRE NELL'USER CONTROLLER
        //$prods = $this->_catalogModel->getProdsByCat($topCats->map->only(['catId']), 3, 'desc', true);
        //Tutti i prodotti ordinati per prezzo 
        $prods = $this->_catalogModel->getOrderProds($topCats->map->only(['catId']), 'asc');
        //tutti i prodotti 
        //$prods = $this->_catalogModel->getAllProds();
        
        return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('products', $prods);
    }
    
    public function showCategoryCatalog($topCatId) {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        //Categoria Top selezionata
        $selTopCat = $topCats->where('catId', $topCatId)->first(); //?

        // Sottocategorie
        $subCats = $this->_catalogModel->getCatsByParId([$topCatId]);

        //Prodotti in sconto della categoria Top selezionata, ordinati per sconto decrescente
        $prods = $this->_catalogModel->getProdsByCat([$topCatId], 2 , 'desc', true);

        return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('selectedTopCat', $selTopCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }

    
    public function showSubCategoryCatalog($topCatId, $catId) {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        //Categoria Top selezionata
        $selTopCat = $topCats->where('catId', $topCatId)->first();

        // Sottocategorie
        $subCats = $this->_catalogModel->getCatsByParId([$topCatId]);

        // Prodotti della sotto-categoria selezionata
        $prods = $this->_catalogModel->getProdsByCat([$catId]);

        return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('selectedTopCat', $selTopCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }
    
    public function showProduct($prodId){
        $product = $this->_catalogModel->getProdById([$prodId]);
        return \view('product.product')
            ->with('product', $product);
    }
}
