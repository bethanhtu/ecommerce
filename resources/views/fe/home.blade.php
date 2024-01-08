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
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center">
                <h2 class="mb-4">Sản phẩm mới nhất</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($listNewProduct as $product)
            <div class="col-sm col-md-3 col-lg">

                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{asset($product->main_image)}}" alt="Colorlib Template">
                    </a>
                    <div class="text py-3 px-3">
                        <h3><a href="#">{{$product->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">{{number_format($product->price, 0) }} đ</span></p>
                            </div>
                        </div>
                        <p class="bottom-area d-flex px-3">
                            <a href="#order" id="{{$product->id}}" class="add-to-cart text-center px-2 py-2">Thêm vào giỏ hàng <i class="fa fa-shopping-cart"></i></a>
                        </p>
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
                <img class="w-100 h-100" src="https://images.unsplash.com/photo-1517938889432-a2ac9241a486?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGZhc2hpb24lMjBtYW58ZW58MHx8MHx8fDA%3D" alt="">
            </div>
            <div class="col-md-4">
                <div class="text py-3">
                    <h2 class="mb-4">BỘ SƯU TẬP QUẦN ÁO NAM MỚI MÙA ĐÔNG 2023</h2>
                    <p><a href="{{route('shop')}}" class="btn btn-white px-4 py-3">Xem ngay</a></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-last d-flex align-items-stretch">
                <img class="w-100 h-100" src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZmFzaGlvbnxlbnwwfHwwfHx8MA%3D%3D" alt="">

            </div>
            <div class="col-md-8 py-3 py-md-5">
                <div class="text text-2 py-md-5">
                    <h2 class="mb-4">BỘ SƯU TẬP QUẦN ÁO NỮ MỚI MÙA ĐÔNG 2023</h2>
                    <p><a href="{{route('shop')}}" class="btn btn-white px-4 py-3">Xem ngay</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <!-- Trend Section Begin -->--}}
<section class="">
    <div class="container">
        <!-- NEW -->
        <h4>Áo khoác</h4>
        <div class="row">
            @foreach($listCoatProduct as $product)
            <div class="col-sm col-md-3 col-lg">

                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{asset($product->main_image)}}" alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 px-3">
                        <h3><a href="#">{{$product->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">{{number_format($product->price, 0) }} đ</span></p>
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
        <!-- HOT -->
        <h4>Áo thể thao</h4>
        <div class="row">
            @foreach($listSport as $product)
            <div class="col-sm col-md-3 col-lg">

                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{asset($product->main_image)}}" alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 px-3">
                        <h3><a href="#">{{$product->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">{{number_format($product->price, 0) }} đ</span></p>
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
        <!-- HIGHT CLASS -->
        <h4>Áo polo</h4>
        <div class="row">
            @foreach($listPolo as $product)
            <div class="col-sm col-md-3 col-lg">

                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{asset($product->main_image)}}" alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 px-3">
                        <h3><a href="#">{{$product->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">{{number_format($product->price, 0) }} đ</span></p>
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
    </div>
</section>
@endsection