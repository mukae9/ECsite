<?php
namespace App\libs;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartCommon
{
  public function cartShow($myId)
  {
    $myCarts = Cart::where('user_id',$myId)->get();
    foreach($myCarts as $myCart){
    $data['mycartIn'][]=$myCart->stock;
    }
    if(isset($data)){
    return $data;
    }
    else{
      return false;
    }
  }
}