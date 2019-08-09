@extends('frontEnd.layouts.master')
@section('title','Cart Page')
@section('slider')
@endsection
@section('content')
    <section id="cart_items">
        <div class="container">
            @if(Session::has('message'))
                
            @endif
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Produk</td>
                        <td class="description"></td>
                        <td class="price">Harga</td>
                        <td class="quantity">jumlah</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($cart_datas as $cart_data)
                            <?php
                                $image_products=DB::table('products')->select('image')->where('id',$cart_data->products_id)->get();
                            ?>
                            <tr>
                                <td class="cart_product">
                                    @foreach($image_products as $image_product)
                                        <a href=""><img src="{{url('products/small',$image_product->image)}}" alt="" style="width: 100px;"></a>
                                    @endforeach
                                </td>
                                <td class="cart_description">
                                    <h4><a href="">{{$cart_data->product_name}}</a></h4>
                                    <p>{{$cart_data->product_code}} | {{$cart_data->size}}</p>
                                </td>
                                <td class="cart_price">
                                    <p>IDR {{$cart_data->price}}</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$cart_data->id.'/1')}}"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="{{$cart_data->quantity}}" autocomplete="off" size="2">
                                        @if($cart_data->quantity>1)
                                            <a class="cart_quantity_down" href="{{url('/cart/update-quantity/'.$cart_data->id.'/-1')}}"> - </a>
                                        @endif
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">IDR {{$cart_data->price*$cart_data->quantity}}</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{url('/cart/deleteItem',$cart_data->id)}}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            
            <div class="row">
                
                <div class="col-sm-6">
                    @if(Session::has('message_apply_sucess'))
                        <div class="alert alert-success text-center" role="alert">
                            {{Session::get('message_apply_sucess')}}
                        </div>
                    @endif
                    <div class="total_area">
                        
                        <div style="margin-left: 20px;"><a class="btn btn-default check_out" href="{{url('/check-out')}}">Bayar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
@endsection