@extends('fe.layout')
@section('content_web')
<section class="">
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-title">
                        <h2>Thông tin liên hệ</h2>
                        <p>Cửa hàng: <b>807 đường Giải Phóng, phường Hoàng Liệt, Quận Hoàng Mai, TP Hà Nội</b></p>
                        <p>Email: <b>toronto@gmail.com</b></p>
                        <p>Số điện thoại: <b>+84 854502397</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <form action="/" class="mb-4 mb-lg-0">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tên của bạn" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Tiêu đề" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Lời nhắn"></textarea>
                        </div>
                        <button type="submit" class="btn btn-black w-100">Gửi</button>
                    </form>
                </div>

                <div class="col-lg-5">
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.216293892788!2d105.8388304737958!3d20.98396518931848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac6801ff868f%3A0xcce37fc88964a1fb!2zODA5IEdp4bqjaSBQaMOzbmcsIEdpw6FwIELDoXQsIEhvw6BuZyBNYWksIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1704723905007!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection