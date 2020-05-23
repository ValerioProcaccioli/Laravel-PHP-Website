<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\Resources\Product;
use App\Models\Resources\Category;
use App\Http\Requests\ProdRequest;
use App\Http\Requests\CatRequest;

class StaffController extends Controller {

    protected $staffModel;

    public function __construct() {
        $this->middleware('can:isStaff');
        $this->staffModel = new Staff();
    }

    public function index() {
        return view('staff');
    }

    public function retInsert(){
        $cats = $this->staffModel->getProdsCats()->pluck('name','catId');
        return view('product.insert')
            ->with('cats', $cats);
    }

    public function upProd (ProdRequest $request) {

        $image=$request->file('image');
        $imageName=$image->getClientOriginalName();
        $product=new Product;
        $product->fill($request->validated());
        $product->image=$imageName;
        $product->save();
        return redirect()->action('StaffController@index'); 
    }
    
    public function newCat(){
        $parId = $this->staffModel->getParId()->pluck('name' , 'catId');
        return view('product.newCat')
            ->with ('parId' , $parId);
    }
    
    public function upCat(CatRequest $request){
        $category = new Category;
        $category->fill($request->validated());
        $category->save();
        return redirect()->action('StaffController@index');
    }
}
