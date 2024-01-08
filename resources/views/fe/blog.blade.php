@extends('fe.layout')
@section('content_web')
    <div>
        <!-- Blog Section End -->
        <section class="blog spad">
            <div class="container">
                <h2>Bài viết nổi bật</h2>
                <div class="row">
                    @foreach($blog as $item)
                    <div class="col-md-4">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{asset($item->image)}}"></div>
                            <div class="blog__item__text">
                                <h6><a href="{{route('blog.detail',['id'=>$item->id])}}">{{$item->title}}</a></h6>
                                <ul>
                                    <li>đăng bởi <span>admin</span></li>
                                    <li>{{$item->created_at}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection