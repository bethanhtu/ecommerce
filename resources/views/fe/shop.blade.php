@extends('fe.layout')
@section('content_web')
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-2 sidebar">
                <div class="shop__sidebar">
                    <div class="sidebar__categories">
                        <div class="">
                            <h4>Danh mục</h4>
                        </div>
                        <div class="categories__accordion">
                            <div class="accordion" id="accordionExample">
                                @foreach($categories as $category)
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a data-filter=".pro{{$category->id}}cat" onclick="displayCategoryName('{{$category->name}}')">{{$category->name}}</a></li>
                                </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-10 order-md-last">
                <h4 id="categoryNameContainer"></h4>
                <div class="row property__gallery">
                    @foreach($products as $product)
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
                                <div class="bottom-area d-flex px-3 text-center">
                                    <a href="#order" id="{{$product->id}}" class="order text-center px-2 py-2 text-white">Thêm vào giỏ hàng <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>
</section>
<script>
    function displayCategoryName(categoryName) {
        // Update the content of the categoryNameContainer with the selected category name
        $('#categoryNameContainer').text(categoryName);
    }
</script>
@endsection