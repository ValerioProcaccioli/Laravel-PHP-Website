<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdController extends Controller
{
    protected $adminModel;
    
    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->adminModel = new Admin();
    }
    
    public function index(){
        return view('admin');
    }
}
