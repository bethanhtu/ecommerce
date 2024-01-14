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

        .toast-body p {
            color: #8f2c24;
        }
    </style>
</head>

<body>
    @if(\Illuminate\Support\Facades\Session::has('success'))
    <div class="toast show">
        <div class="toast-header">
            <strong class="me-auto">{{\Illuminate\Support\Facades\Session::get('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            <a href="{{route('home')}}">Trở về trang chủ</a>
        </div>
    </div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('error'))
    <div class="toast show">
        <div class="toast-header">
            <strong class="me-auto">{{\Illuminate\Support\Facades\Session::get('error')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            <a href="{{route('home')}}">Trở về trang chủ</a>
        </div>
    </div>
    @endif
    <section>
        <div class="shadow p-5 rounded w-50 ">
            <h2>Đăng nhập</h2>
            <form action="{{route('login-user')}}" method="post">
                @csrf
                <div class="form-outline mb-4">
                    <p style="color: #e2e8f0">@error('email'){{$message}}@enderror</p>
                    <input class="form-control" type="email" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-outline mb-4">
                    <p style="color: #e2e8f0">@error('email'){{$message}}@enderror</p>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-outline mb-4">
                    <input class="form-control btn btn-secondary btn-block mb-4" type="submit" value="login" id="btn">
                </div>
                <div class="group">
                    <a class="text-secondary" href="{{route('signup')}}">Tôi chưa có tài khoản!</a>
                </div>

                <div class="text-center mt-5">
                    <a class="text-center text-secondary" href="{{route('home')}}">Trang chủ</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>