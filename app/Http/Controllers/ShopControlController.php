<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_detail;
use App\Unit;
use App\Order_detail;
use App\Delivery;
use App\User;
use Carbon\Carbon;
use GuzzleHttp\Handler\Proxy;

class ShopControlController extends Controller
{
    //
    public function mainShop(){
        $products = Product::All();
        // dd($products);

        return view('kpmShop.mainShop', compact('products'));
    }

    public function addProduct(){
        return view('kpmShop.addProduct');
    }

    public function addConfig(Request $request){
        // dd($req);
        $product = new Product;
        // $product->document_at = Carbon::createFromFormat('d/m/Y', $req->document_at);
        $product->name = $request->name;
        $product->type = $request->type;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->unit_id = $request->unit;
        $product->total = $request->total;
        $product->save();

        return redirect()->route('shop.main-shop');
    }

    public function deleteProduct($id){
        dd($id);
        $product = Product::where('id', $id)->delete();
        return redirect()->route('shop.main-shop');
    }
}
