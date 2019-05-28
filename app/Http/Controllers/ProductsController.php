<?php

namespace App\Http\Controllers;

use App\tbl_products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $this->homepage();
    }

    public function homepage(){
        $this->data['products'] = tbl_products::orderBy('created_at',"ASC")->get();
        return view('products.index', $this->data);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $product = new tbl_products;
        $product->fill($request->all());
        $product->save();
        return redirect()->route('homepage');
    }

    public function update($id = NULL){
        $this->data['product'] = tbl_products::find($id);
        return view('products.edit', $this->data);
    }

    public function modify(Request $request, $id = NULL){
        $product = tbl_products::find($id);
        $product->fill($request->all());
        $product->save();
        return redirect()->route('homepage');
    }

    public function destroy($id = NULL){
        $product = tbl_products::find($id);
        $product->delete();
        return redirect()->back();
    }
}
