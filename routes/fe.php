<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\OrderController;
    use App\Http\Controllers\Api\HeartController;
    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('/product/{id}',[HomeController::class,'product'])->name('product');
    Route::get('/shop',[HomeController::class,'shop'])->name('shop');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::get('/signin',[HomeController::class,'signin'])->name('signin');
    Route::get('/signup',[HomeController::class,'signup'])->name('signup');
    Route::post('/signup',[AuthController::class,'register'])->name('register');
    Route::get('/check-out',[OrderController::class,'ckeckOut'])->name('check-out');
    Route::get('/check-out-vnpay',[OrderController::class,'vnpay'])->name('checkout-vnpay');
    Route::post('/login',[AuthController::class,'loginUser'])->name('login-user');
    Route::get('/logout',[AuthController::class,'logoutUser'])->name('logout-user');
    Route::get('/edit-profile',[HomeController::class,'editProfile'])->name('edit-profile');
    Route::get('/profile',[HomeController::class,'profile'])->name('profile');
    Route::middleware('user')->post('/order',[OrderController::class,'makeOrder'])->name('order');
    Route::middleware('user')->post('/order-vnpay',[OrderController::class,'makeOrderVnpay'])->name('order-vnpay');
    Route::get('/vnpay/{data}',[OrderController::class,'vnpayReturn'])->name('vnpay.return');
    Route::post('/edit-profile/{id}',[HomeController::class,'doEditProfile'])->name('doEdit.profile');
    Route::get('/profile',[HomeController::class,'profile'])->name('profile');
    Route::get('/favorite',[HeartController::class,'favorite'])->name('favorite-list');
    Route::get('/my-order',[HomeController::class,'myOrder'])->name('my-order');
    Route::get('/blog',[HomeController::class,'blog'])->name('blog');
    Route::get('/blog/{id}',[HomeController::class,'blogDetail'])->name('blog.detail');
?>