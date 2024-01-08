<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Toronto</title>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="" href="{{asset('/web/images/logo2.png')}}">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('/web/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/web/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/web/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/web/css/jquery-ui.min.css')}}" type="text/css">
    <!-- <link rel="stylesheet" href="{{asset('/web/css/magnific-popup.css')}}" type="text/css"> -->
    <!-- <link rel="stylesheet" href="{{asset('/web/css/owl.carousel.min.css')}}" type="text/css"> -->
    <!-- <link rel="stylesheet" href="{{asset('/web/css/slicknav.min.css')}}" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('/web/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/web/css/styleBanner.css')}}" type="text/css">

    <!-- Custom -->
    <link rel="stylesheet" href="{{asset('/fe/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fe/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fe/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('/fe/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('/fe/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('/fe/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/fe/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('/fe/css/style.css')}}">


</head>

<body>
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a href="{{route('home')}}">Toronto</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i> Menu
            </button>

            <div class="collapse navbar-collapse header__right" id="ftco-nav">
                <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="nav-item"><a href="{{route('shop')}}">Cửa hàng</a></li>
                    <li class="nav-item"><a href="{{route('blog')}}">Bài viết</a></li>
                    <li class="nav-item"><a href="{{route('contact')}}">Liên hệ</a></li>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <div class="nav-item" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <!-- User is logged in, display user's name -->
                            <p>{{ \Illuminate\Support\Facades\Auth::user()->name }}</p>
                            @else
                            <!-- User is not logged in, display the logo -->
                            <i class="fa fa-user"></i>
                            @endif

                        </div>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow" style="z-index: 99999;" aria-labelledby="userDropdown">
                            <a class="dropdown-item p-2 text-dark" href="{{route('profile')}}">
                                <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Hồ sơ
                            </a>
                            <a class="dropdown-item p-2 text-dark" href="{{route('my-order')}}">
                                <i class="fa fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Theo dõi đơn hàng
                            </a>
                            <div class="dropdown-divider"></div>
                            @auth
                            <!-- User is logged in, display logout link -->
                            <a class="dropdown-item p-2 text-dark" href="{{ route('logout-user') }}" onclick="return confirm('Bạn có thật sự muốn đăng xuất?');">
                                <i class="fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Đăng xuất
                            </a>
                            @else
                            <!-- User is not logged in, display login link -->
                            <a class="dropdown-item p-2 text-dark" href="{{ route('signin') }}">
                                <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Đăng nhập
                            </a>
                            @endauth
                        </div>
                    </li>
                    <li>
                        <a href="{{route('shop-cart')}}">
                            <i class="fa fa-shopping-bag"></i>
                            <div id="carts">
                                @if(session('CART'))
                                <div class="tip" id="bag-carts">
                                    {{count(session('CART'))}}
                                </div>
                                @endif
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAV -->

    <!-- CONTENT -->
    @yield('content_web')
    <!-- CONTENT -->

    <!-- Footer Section Begin -->
    <footer class="ftco-footer bg-light ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><i class="fa fa-sort-up"></i></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Toronto</h2>
                        <p>Hệ thống cửa hàng thời trang cao cấp hàng đầu Việt Nam. Thiết kế tinh tế, mang đến sự lịch lãm và mạnh mẽ.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Cửa hàng</a></li>
                            <li><a href="#" class="py-2 d-block">Bài viết</a></li>
                            <li><a href="#" class="py-2 d-block">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Hỗ trợ</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">Chính sách giao hàng</a></li>
                                <li><a href="#" class="py-2 d-block">Đổi & trả hàng</a></li>
                                <li><a href="#" class="py-2 d-block">Điều khoản</a></li>
                                <li><a href="#" class="py-2 d-block">Chính sách bảo mật</a></li>
                                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                                <li><a href="#" class="py-2 d-block">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Thông tin cửa hàng</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">809 Giải Phóng, Phường Giáp Bát, Quận Hoàng Mai, TP Hà Nội</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+84 667 72 508</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">admin@toronto.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Bản quyền ©2024 Mọi quyền được bảo lưu | Mẫu này được tạo bởi Toronto
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{asset('/web/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/web/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/web/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/web/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/web/js/mixitup.min.js')}}"></script>
    <script src="{{asset('/web/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('/web/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('/web/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/web/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('/web/js/main.js')}}"></script>
    <script src="{{asset('/web/js/myJavascript.js')}}"></script>

    <!--  -->

    <!-- <script src="{{asset('/fe/js/aos.js')}}"></script>
    <script src="{{asset('/fe/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('/fe/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('/fe/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('/fe/js/google-map.js')}}"></script>
    <script src="{{asset('/fe/js/main.js')}}"></script> -->
    <script>
        let bg = document.getElementById("bg");
        let moon = document.getElementById("moon");
        let mountain = document.getElementById("mountain");
        let road = document.getElementById("road");
        let text = document.getElementById("text");
        window.addEventListener('scroll', function() {
            var value = window.scrollY;
            bg.style.top = value * 0.5 + 'px';
            moon.style.left = -value * 0.5 + 'px';
            mountain.style.top = -value * 0.2 + 'px';
            road.style.top = value * 0.2 + 'px';
            text.style.top = value * 1 + 'px';
        })
    </script>
    <script>
        $(document).on('click', '.del-cart', function() {
            var id = $(this).attr('id');
            $.ajax({
                url: "{{ route('api.cart.delete') }}",
                method: "get",
                data: {
                    id: id,
                },
                success: function(response) {
                    // Reload the entire page or navigate to a different route
                    window.location.reload(); // or window.location.href = "{{ route('shop-cart') }}";
                },
            });
        });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).on('keyup', '#search_input', function(e) {
            let searchText = $(this).val();
            if (searchText != " ") {
                $.ajax({
                    url: "{{ route('search') }}",
                    method: "get",
                    data: {
                        name: searchText,
                    },
                    success: function(response) {
                        let result = response.map(value => {
                            return '<a href="/product/' + value.id + '" class="list-group-item list-group-item-action border-1"><img style="width: 10%;" src="http://127.0.0.1:8000/' + value.main_image + '" alt=""> &ensp;' + value.name + '</a>'
                        })
                        $("#show-list").html(result);
                    },
                });
            } else {
                $("#show-list").html("");
            }
        });
    </script>
    <script>
        $(document).on('click', '.cart-btn', function(e) {
            var id = $(this).attr('id');
            $.ajax({
                url: "{{ route('api.cart.add') }}",
                method: "post",
                data: {
                    id: id,
                },
                success: function(response) {
                    $("#carts").load(' #bag-carts');
                    $('.notiProduct').slideDown('fast');
                    $('.notiProduct').delay(2000).slideUp('fast');
                },
            });
        });
    </script>
    <script>
        $(document).on('click', '.order', function(e) {
            var id = $(this).attr('id');
            $.ajax({
                url: "{{ route('api.cart.add') }}",
                method: "post",
                data: {
                    id: id,
                },
                success: function(response) {
                    $("#carts").load(' #bag-carts');
                    $('.notiProduct').slideDown('fast');
                    $('.notiProduct').delay(2000).slideUp('fast');
                },
            });
        });
    </script>

    <script>
        $(document).on('click', '.inc', function() {
            let qty = new Number($(this).attr('name'));
            qty += 1;
            let id = $(this).attr('id');
            $.get("{{ route('api.cart.update') }}", {
                id: id,
                qty: qty
            },
             function(data) {
                $("#cart").load(' #data-cart');
                $("#total-price").load(' .total-price');
                window.location.reload();
            },
            );
            
        });
        $(document).on('click', '.dec', function() {
            let qty = new Number($(this).attr('name'));
            qty -= 1;
            let id = $(this).attr('id');
            $.get("{{ route('api.cart.update') }}", {
                id: id,
                qty: qty
            }, function(data) {
                $("#cart").load(' #data-cart');
                $("#total-price").load(' .total-price');
                window.location.reload();
            });
        });
    </script>
    <script>
        $(document).on('click', '.heart', function(e) {
            var id = $(this).attr('id');
            $.ajax({
                url: "{{ route('api.heart.add') }}",
                method: "get",
                data: {
                    id: id,
                },
                success: function(response) {
                    $("#heart").load(' #like');
                    $('.favorite_list').slideDown('fast');
                    $('.favorite_list').delay(2000).slideUp('fast');
                },
            });
        });
    </script>
    <script>
        $(document).on('click', '.delete', function(e) {
            var id = $(this).attr('id');
            $.ajax({
                url: "{{ route('api.heart.delete') }}",
                method: "get",
                data: {
                    id: id,
                },
                success: function(response) {
                    $("#heart").load(' #like');
                    $('body').load('/favorite')
                },
            });
        });
    </script>
    <script>
        $(document).on('click', '.detail', function(e) {
            var id = $(this).attr('id');
            alert(1);
        });
    </script>
</body>

</html>