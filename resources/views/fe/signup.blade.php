<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="" href="{{asset('/web/images/logo2.png')}}">
    <link rel="stylesheet" href="{{asset('/web/css/login.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Moon Light</title>
    <style>
        .show {
            position: relative;
            margin-right: 10px;
            text-align: center;
        }

        .toast-body a {
            text-decoration: none;
            color: #8f2c24;
        }
    </style>
</head>

<body>
    <section>
        <div class="shadow p-5 rounded w-50 ">
            <h2>Đăng ký</h2>
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="form-outline mb-4">
                    <input class="form-control" type="text" id="name" placeholder="Tên" name="name" required>
                </div>
                <div class="form-outline mb-4">
                    <input class="form-control" type="email" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-outline mb-4">
                    <input class="form-control" type="password" id="password" name="Mật khẩu" placeholder="Password" required>
                </div>
                <div class="form-outline mb-4">
                    <input class="form-control" type="tel" id="phone" name="phone" placeholder="Số điện thoại" required>
                </div>
                <div class="form-outline mb-4" style="display:none">
                    <input class="form-control" type="tel" id="" name="" placeholder="Level" value="2" required readonly>
                </div>
                <div class="form-outline mb-4">
                    <input class="form-control btn btn-primary btn-block mb-4" type="submit" value="Đăng ký" id="btn">
                </div>
            </form>
            <a class="" href="{{route('signin')}}">Đăng nhập !</a>
            <div class="text-center mt-5">
                <a class="text-center" href="{{route('home')}}">Trang chủ</a>
            </div>

        </div>
    </section>
    {{--<script src="@{../cms/js/myjs.js}"></script>--}}
</body>

</html>