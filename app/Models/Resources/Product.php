<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'product';
    protected $primaryKey = 'prodId';
    public $timestamps = false;
    
    protected $fillable = [
         'name', 'catId', 'descShort' , 'descLong' , 'price' , 'discountPerc' , 'discounted' , 'image'
    ];
    
     protected $hidden = [
        'prodId'
    ];


    public function getDisPrice($withDiscount = false) {
        $price = $this->price;
        if (true == ($this->discounted) && true == $withDiscount) {
            $discount = ($price * $this->discountPerc) / 100;
            $price = round($price - $discount, 2);
        }
        return $price;
    }
    
    public function getPrice() {
        $price = $this->price;
        return $price;
    }
    // Realazione One-To-One con Category
    public function prodCat() {
        return $this->hasOne(Category::class, 'catId', 'catId');
    }
    
    

}
