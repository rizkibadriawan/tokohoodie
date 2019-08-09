@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">Pesanan Anda Telah kami Proses</h3>
        <p class="text-center">Terima kasih atas Pesanan Anda</p>
        <p class="text-center">Kami akan menghubungi Anda melalui Email(<b>{{$user_order->users_email}}</b>) dan NO Handphone anda (<b>{{$user_order->mobile}}</b>)</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection