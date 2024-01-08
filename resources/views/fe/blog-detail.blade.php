@extends('fe.layout')
@section('content_web')
<div>

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 mx-auto">
                    <h4 class="mb-4">{{$post->title}}</h4>
                    <div class="blog__details__content">
                        <div class="blog__details__item">
                            <img src="{{asset($post->image)}}" alt="">
                            <div class="blog__details__item__title">
                                <h4>{{$post->title}}</h4>
                                <ul>
                                    <li>by <span>admin</span></li>
                                    <li>{{$post->created_at}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__details__desc">@php echo $post->content; @endphp</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
</div>
@endsection