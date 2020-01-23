@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mycart</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p style="text-align:center"> {{ Auth::user()->name }}さんのカート内容</p><br>
                    {{$message ?? ''}}
                    @isset($mycartIn)
                        @php 
                        $count=0;
                        $sum=0; 
                        @endphp
                        @foreach($mycartIn as $in)
                            <div class="mycart_box">
                                {{$in->name}} <br>                                
                                {{$in->fee}} <br>
                                <img src="/image/{{$in->imgpath}}" alt="" class="incart" >
                                <br>
                                <form action="/cartdelete" method="post">
                                    @csrf
                                    <input type="hidden" name="delete" value="delete">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="stock_id" value="{{ $in->id }}">
                                    <input type="submit" value="カートから削除する">
                                </form>
                            </div>
                            @php 
                            $fees= $in->fee; 
                            $count += 1;    //合計個数を計算していく、全然モデル側でやっていいけど参考までに
                            $sum += $fees; //合計金額を計算していく、全然モデル側でやっていいけど参考までに
                            @endphp
                            @if ($loop->last)
                                @php $sum = number_format($sum); @endphp
                                <div class="text-center p-2">
                                    個数：{{$count}}個<br>
                                    <p style="font-size:1.2em; font-weight:bold;">合計金額：{{$sum}}円</p>  
                                </div>                          
                            @endif
                        @endforeach 
                    @else
                        <p class="text-center">カートはからっぽです。</p>
                    @endisset
                    <form action="/buydone" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button type="submit" class="btn btn-danger btn-lg text-center buy-btn" >購入する</button>
                    </form>
                    <a class="text-center" href="/shop">商品一覧へ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
