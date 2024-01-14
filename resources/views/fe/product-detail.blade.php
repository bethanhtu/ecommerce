@extends('fe.layout')
@section('content_web')
<div class="product_detail">
    <!-- Product Details Section Begin -->
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product__details__pic">
                        <div class="">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="{{asset($product->main_image)}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{asset($product->second_image)}}" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="product__details__pic__left product__thumb nice-scroll">
                        <a class="pt active" href="#product-1">
                            <img src="{{asset($product->main_image)}}" alt="">
                        </a>
                        <a class="pt" href="#product-2">
                            <img src="{{asset($product->second_image)}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product__details__text">
                        <h3>{{$product->name}}</h3>
                        <div class="rating d-flex">
                            <p class="text-left mr-4">
                                <a href="#" class="mr-2">5.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                            </p>
                            <p class="text-left mr-4">
                                <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Đánh giá</span></a>
                            </p>
                            <p class="text-left">
                                <a href="#" class="mr-2" style="color: #000;">86 <span style="color: #bbb;">Đã bán</span></a>
                            </p>
                        </div>
                        <div>
                            <p>Xuất xứ: {{$product->origin}}</p>
                        </div>
                        <div><?php
                                echo $product->content;
                                ?></div>

                        <div class="price"><span>{{number_format($product->price, 0) }} đ</span></div>
                        <div class="product__details__button">
                            <a href="#order" class="btn btn-black py-3 px-5" id="{{$product->id}}">Thêm vào giỏ hàng</a>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="related__title">
                    <h5>SẢN PHẨM TƯƠNG TỰ</h5>
                </div>
            </div>
            <div class="row">
                @foreach($proRelate as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix pro{{$product->category->id}}cat">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{asset($product->main_image)}}" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="{{route('product',['id'=>$product->id])}}">{{$product->name}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class=""><span class="">{{number_format($product->price, 0) }} đ</span></p>
                                </div>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="#order" id="{{$product->id}}" class="add-to-cart text-center px-2 py-2"><span>Thêm vào giỏ hàng <span class="icon_bag_alt" type="buy"></span></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection