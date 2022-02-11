@extends('layout.app')

@section('page-title')
    Prodotto
@endsection

@section('main-content')
<div class="main-product">
    <div class="top-product">
        <div class="container-product">
            <div class="thumb-position">
                <img src="{{ $product['thumb']}}" alt="">
                <span class="comic">Comic Book</span>
                <div class="view">View Gallery</div>
            </div>
        </div>
    </div>

    <div class="middle-product">
        <div class="container-product">
            <div class="product-position">
                <div class="product-info">
                    <div class="product-title">
                        {{ $product['title']}}
                    </div>
                    <div class="product-price">
                        <div class="price">
                            U.S. Price: 
                            <span class="white">{{ $product['price']}}</span>
                        </div>
                        <div class="available">
                            Available
                        </div>
                        <div class="check">
                            Check Availability
                            <i class="fas fa-sort-down arrow"></i>
                        </div>
                    </div>
                    <div class="product-description">
                        {{ $product['description']}}
                    </div>
                </div>
                <div class="advertisement">
                    <div>
                        Advertisement
                    </div>
                    <div class="adv-img">
                        <img src="{{asset('images/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-product">
        <div class="container-product">
            <div class="bottom-position">
                <div class="talent-specs">
                    <div class="bottom-title">
                        Talent
                    </div>
                    <div class="bottom-table">
                        <div class="left">
                            Art by:
                        </div>
                        <div class="right blue">
                            @foreach ($product['artists'] as $artist)
                                {{ $artist }} {{ !$loop->last ? ', ' : '' }}
                            @endforeach
                        </div>
                    </div>
                    <div class="bottom-table">
                        <div class="left bottom-border">
                            Written by:
                        </div>
                        <div class="right blue bottom-border">
                            @foreach ($product['writers'] as $writer)
                                {{ $writer }} {{!$loop->last ? ', ' : '' }}
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="talent-specs">
                    <div class="bottom-title">
                        Specs
                    </div>
                    <div class="bottom-table">
                        <div class="left">
                            Series:
                        </div>
                        <div class="right series blue">
                            {{ $product['type'] }}
                        </div>
                    </div>
                    <div class="bottom-table">
                        <div class="left">
                            U.S. Price:
                        </div>
                        <div class="right">
                            {{ $product['price'] }}
                        </div>
                    </div>
                    <div class="bottom-table">
                        <div class="left bottom-border">
                            On Sale Date:
                        </div>
                        <div class="right bottom-border">
                            {{ $product['sale_date'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('components.nav-product')
@endsection