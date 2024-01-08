<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card-block shadow rounded w-50 p-5">
            <div class="col-sm-4 bg-c-lite-green user-profile">
                <div class="card-block text-center">
                    <div class="m-b-25">
                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h6 class="f-w-600">{{\Illuminate\Support\Facades\Auth::user()->name}}</h6>
                </div>
            </div>
            <h6 class="m-b-20 p-b-5 b-b-default f-w-600"></h6>
            <div class="row">
                <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Email</p>
                    <h6 class="text-muted f-w-400">{{\Illuminate\Support\Facades\Auth::user()->email}}</h6>
                </div>
                <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Số điện thoại</p>
                    <h6 class="text-muted f-w-400">{{\Illuminate\Support\Facades\Auth::user()->phone}}</h6>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Ngày tạo</p>
                    <h6 class="text-muted f-w-400">{{\Illuminate\Support\Facades\Auth::user()->created_at}}</h6>
                </div>
                
            </div>
            <ul class="social-link list-unstyled m-t-40 m-b-10">
                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="fa fa-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="fa fa-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="fa fa-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</body>

</html>