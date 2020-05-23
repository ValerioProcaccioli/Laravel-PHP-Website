<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Models;

use App\Models\Resources\Category;
use App\Models\Resources\Product; 

/**
 * Description of staffOperation
 *
 * @author utente
 */
class Staff{
     public function getProdsCats() {
        return Category::where('parId', '!=', 0)->get();
    }
    
   public function getParId(){
        return Category::where('parId', '=', 0)->get();
    }
}
