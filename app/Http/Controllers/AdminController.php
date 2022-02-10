<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Rating;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //
    function admin() {
        $data= Product::all();
        return view('admin',['products'=>$data]);
    }

    function addProduct() {
        return view('add_new_products');
    }
}
