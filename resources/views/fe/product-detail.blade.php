@extends('fe.layout')
@section('content_web')
<div class="product_detail">
    <!-- Product Details Section Begin -->
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel px-2">
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
                <div class="col-lg-6">
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
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="related__title">
                        <h5>SẢN PHẨM TƯƠNG TỰ</h5>
                    </div>
                </div>
                @foreach($proRelate as $product)
                <div class="'col-lg-3 col-md-4 col-sm-6 mix pro{{$product->category->id}}cat">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{asset($product->main_image)}}" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text px-3">
                            <h3><a href="{{route('product',['id'=>$product->id])}}">{{$product->name}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p><span class="mr-2">{{number_format($product->price, 0) }} đ</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <a href="#order" class="order" id="{{$product->id}}" class="add-to-cart text-center px-2 py-2">Thêm vào giỏ hàng <i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xem nhanh thông tin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6" id="imgDetail">
                                <img src="" alt="">
                            </div>
                            <div class="col-md-6" style="text-align: center;">
                                <h3></h3><br>
                                <div class="proDes"></div>
                                <h4></h4><br>
                                <div class="product__details__button">
                                    <a href="#order" class="cart-btn" id="" style="float: none;"><span class="icon_bag_alt"></span>Thêm giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection