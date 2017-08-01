<?php

namespace App\Http\Controllers;

use App\ZaraProduct;
use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    public function __construct() {
        $this->middleware('LaunchRedirect');
    }

    public function getStores() {
        return view('Stores.stores');
    }

    public function getJD() {
        $products = Product::all();
        $store = 'JD Sports';
        $del_time = '37';
        return view('Stores.Jd', ['products' => $products, 'store'=>$store, 'del_time' => $del_time]);
    }

    public function getZara() {
        $products = ZaraProduct::all();
        $store = 'Zara';
        $del_time = '38';
        return view('Stores.Zara', ['products' => $products, 'store'=>$store, 'del_time' => $del_time]);
    }

    public function getRI() {
        $store = 'River Island';
        $del_charge = '3.95';
        $del_time = '44';
        $image = asset('images/FallingInLove.jpg');
        $img_desc = "White 'falling in love' print pom pom T-shirt";
        return view('Stores.store', ['store'=>$store, 'del_charge' => $del_charge, 'del_time' => $del_time, 'image' => $image, 'img_desc' => $img_desc]);
    }
    public function getMS() {
        $store = 'Miss Selfridge';
        $del_charge = '3.95';
        $del_time = '45';
        $image = "http://media.missselfridge.com/wcsstore/MissSelfridge/images/catalog/MS18A04VPNK_Zoom_M_1.jpg";
        $img_desc ="Pink Metallic Playsuit";
        return view('Stores.store', ['store'=>$store, 'del_charge' => $del_charge, 'del_time' => $del_time, 'image' => $image, 'img_desc' => $img_desc]);
    }
    public function getFL() {
        $store = 'Foot Locker';
        $del_charge = '5.95';
        $del_time = '44';
        $image = "https://runnerspoint.scene7.com/is/image/rpe/314211079604_01?id=q79Qp2&wid=232&hei=232&fmt=jpg";
        $img_desc = "Black Nike Tuned1 Ultra";
        return view('Stores.store', ['store'=>$store, 'del_charge' => $del_charge, 'del_time' => $del_time, 'image' => $image, 'img_desc' => $img_desc]);
    }
    public function getBoots() {
        $store = 'Boots';
        $del_charge = '4.95';
        $del_time = '46';
        $img_desc = "Paco Rabanne 1 Million 50ml set";
        $image = "https://boots.scene7.com/is/image/Boots/10229806?id=-Klmv1&fmt=jpg&fit=constrain,1&wid=504&hei=548";
        return view('Stores.store', ['store'=>$store, 'del_charge' => $del_charge, 'del_time' => $del_time, 'image' => $image, 'img_desc' => $img_desc]);
    }
    public function getBS() {
        $store = 'Body Shop';
        $del_charge = '4.95';
        $del_time = '44';
        $image = "https://assets.thebodyshop.com/medias/spa-of-the-world-hawaiian-kukui-cream-6-640x640.jpg?context=product-images/h5e/h14/10909626138654/spa-of-the-world-hawaiian-kukui-cream_6-640x640.jpg";
        $img_desc = "Hawaiian Kukui Cream";
        return view('Stores.store', ['store'=>$store, 'del_charge' => $del_charge, 'del_time' => $del_time, 'image' => $image, 'img_desc' => $img_desc]);
    }
    public function getApple() {
        $store = 'Apple Store';
        $del_charge = '5.95';
        $del_time = '44';
        $image = "https://store.storeimages.cdn-apple.com/4662/as-images.apple.com/is/image/AppleInc/aos/published/images/m/ac/macbook/select/macbook-select-rose-gold-201706?wid=452&hei=420&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp&.v=1497296296578";
        $img_desc = "MacBook Air";
        return view('Stores.store', ['store'=>$store, 'del_charge' => $del_charge, 'del_time' => $del_time, 'image' => $image, 'img_desc' => $img_desc]);
    }

    public function getCustom() {
        return view('custom');
    }
}
