<?php

namespace App\Http\Controllers;

use App\Product;
use App\ZaraProduct;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Cart;
use App\Custom;

class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('LaunchRedirect');
    }

    public function getAddToCart(Request $request, $id) {
        $products = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($products, $products->id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getAddToCartZara(Request $request, $id){
        $products = ZaraProduct::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($products, $products->id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('Stores.cart');
        }
        else {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            if($cart->totalPrice == 'TBC') {
                return view('Stores.cart', ['item'=> $cart->items['item'], 'store' => $cart->items['store'], 'totalPrice'=>$cart->totalPrice]);
            } else {
                return view('Stores.cart', ['products'=> $cart->items, 'totalPrice'=>$cart->totalPrice]);
            }
        }
    }

    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function getCustom(Request $request) {
        $products = null;
        $store = $request->input('del_store');
        $item = $request->input('del_item');
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Custom($oldCart);
        $cart->addCustom($store, $item);
        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function getRemoveCustom() {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Custom($oldCart);
        $cart->removeCustom();

        Session::put('cart', $cart);
        //dd(Session::all());
        return redirect()->back();

    }
}
