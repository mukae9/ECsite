<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\libs\CartCommon;
use Illuminate\Support\Facades\Mail;
use App\Mail\BuyMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CartCommon $CartCommon)
    {
        $this->middleware('auth');
        $this->CartCommon = $CartCommon;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function mycart()
    {
        $myId = Auth::id();
        $data['id'] = $myId;
        $data=$this->CartCommon->cartShow($myId);    

        if($data===false){
            return view('cart');
        }
        else{
            return view('cart',$data);
        }
    }

    public function add_mycart(Request $request)
    {
        $post_myId=$request->user_id;
        $myId = Auth::id();
        if($post_myId!=$myId){ //不正
            Auth::logout();
            return redirect()->route('login');
        }       

        $stock_id=$request->stock_id;

        $firstorcreate=Cart::firstOrCreate(['stock_id' => $stock_id,'user_id' => $myId]);
        
        if($firstorcreate->wasRecentlyCreated){
            $message = 'カートに追加しました';
        }
        else{
            $message = 'カートに登録済みです';
        }
        $data=$this->CartCommon->cartShow($myId);
        if($data===false){
            return view('cart');
        }
        else{
            return view('cart',$data)->with('message',$message);
        }
    }

    public function delete_mycart(Request $request)
    {
        $post_myId=$request->user_id;
        $myId = Auth::id();
        if($post_myId!=$myId){ //不正
            Auth::logout();
            return redirect()->route('login');
        }       

        $stock_id=$request->stock_id;

        $delete=Cart::where('user_id', $myId)->where('stock_id',$stock_id)->delete();
        if($delete==true){
            $message = 'カートから一つの商品を削除しました';
        }else{
            $message = '';
        }

        $data=$this->CartCommon->cartShow($myId);

        if($data===false){
            return view('cart')->with('message',$message);
        }
        else{
            return view('cart',$data)->with('message',$message);
        }
    }

    public function buy_done()
    {
        $myId = Auth::id(); 
        Mail::to('test@example.com')->send(new BuyMail);
        Cart::where('user_id', $myId)->delete();
        //ここでcreateで購入履歴テーブルを残す
        return view('buydone');
    }


}

