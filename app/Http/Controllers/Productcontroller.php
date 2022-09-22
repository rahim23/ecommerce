<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product ;
use App\Models\cart ;
use App\Models\order ;
use Illuminate\Support\Facades\DB;
use Session ; 

class Productcontroller extends Controller
{
    function index() {
        $data= Product::all();      
        return view("product",["products"=>$data]) ;

    }
    function detail($id){
        $data = Product::find($id) ;
        return view('detail',['product'=>$data]);

    }
    function search(Request $req){
        $data=Product::
        where('name','like','%',$req->input('query'),'%')->get();
        return view('search',['products'=>$data]);

    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'] ; 
            $cart->product_id=$req->product_id ; 
            $cart->save();
            return redirect('/') ;
        }
        else{
            redirect('/login') ;
        
        }
        
    }

    static function cartItem(){
        $userid = session()-> get('user')['id'] ;  
        return Cart::where('user_id',$userid)->count() ;


    }
    function cartList(){
        $userid = session()-> get('user')['id'] ;  
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')         
        ->where('cart.user_id',$userid)  
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['products'=>$products])  ;
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect("cartlist");

    }
    function ordernow(){
        $userid = session()-> get('user')['id'] ;  
        $total= $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')         
        ->where('cart.user_id',$userid)  
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');

        return view('ordernow',['total'=>$total])  ;

    }

    function orderPlace(Request $req){
        $userid = session()-> get('user')['id'] ;  
        $allcart=Cart::where('user_id',$userid)->get();
        foreach($allcart as $cart){
            $order = new Order ; 
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status='pending';
            $order->payment_method=$req->payment;
            $order->payment_status='pending';
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userid)->delete();

        }
        $req->input();
        return redirect('/');


    }
    function myorders(){
        $userid = session()-> get('user')['id'] ;  
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')         
        ->where('orders.user_id',$userid)  
        ->get(); 
        return view('myorders',['orders'=>$orders])  ;



    }


}
