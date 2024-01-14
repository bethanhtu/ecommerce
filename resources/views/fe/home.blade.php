@extends('fe.layout')
@section('content_web')
@if(\Illuminate\Support\Facades\Session::has('success'))
<div class="alert alert-success alert-dismissible" style="position: absolute; top: 30%; width: 20%; z-index: 40">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{\Illuminate\Support\Facades\Session::get('success')}}</strong>
</div>
@endif
<section class="banner1" style="z-index: 1;">
    <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/slider_1.jpg?1704535309064" id="bg">
</section>

<!-- Best seller -->
<section class="">
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-12">
                <h4 class="mb-4">Sản phẩm mới nhất</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($listNewProduct as $product)
            <div class="col-sm col-md-3">

                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{asset($product->main_image)}}" alt="Colorlib Template">
                    </a>
                    <div class="text py-3 px-3">
                        <h3><a href="{{route('product',['id'=>$product->id])}}">{{$product->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price">{{number_format($product->price, 0) }} đ</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3 text-center">
                            <a href="#order" id="{{$product->id}}" class="order text-center px-2 py-2 text-white">Thêm vào giỏ hàng <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="w-100 h-100" src="https://cdn.mozo.com.au/images/atwood/14828/clothes.jpg" alt="">
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h1 class="mb-4">BỘ SƯU TẬP THU ĐÔNG 2024</h1>
                    <p>Đa dạng lựa chọn dành cho bạn</p>
                    <p><a href="{{route('shop')}}" class="btn btn-white px-4 py-3">Xem ngay</a></p>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-5 order-md-last d-flex align-items-stretch">
                <img class="w-100 h-100" src="https://images.unsplash.com/photo-1560243563-062bfc001d68?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Y2xvdGhpbmd8ZW58MHx8MHx8fDA%3D" alt="">

            </div>
            <div class="col-md-7 py-3 py-md-5">
                <div class="text text-2 py-md-5">
                    <h1 class="mb-4">QUẦN DÀI NAM</h1>
                    <p><a href="{{route('shop')}}" class="btn btn-white px-4 py-3">Xem ngay</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <!-- Trend Section Begin -->--}}
<section class="">
    <div class="container">
        @foreach($categories as $category)
        <h4 class="title">{{ $category->name }}</h4>

        <div class="row">
            @foreach($products->where('category_id', $category->id) as $product)
            <div class="col-sm col-md-3">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{asset($product->main_image)}}" alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 px-3">
                        <h3><a href="{{route('product',['id'=>$product->id])}}">{{$product->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price">{{number_format($product->price, 0) }} đ</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3 text-center">
                            <a href="#order" id="{{$product->id}}" class="order text-center px-2 py-2 text-white">Thêm vào giỏ hàng <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach

    </div>
    </div>
    </div>
</section>
@endsection