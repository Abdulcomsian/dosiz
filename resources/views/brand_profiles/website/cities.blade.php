@extends('layout.city-layout')
@section('content') 
<section id="banner">

</section>
<section id="cityContentDiv">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="topBanner">
                    <img src="{{asset('assets/img/banner/topBanner.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="articlesDiv">
                    <div class="mainArticle">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="articleImg">
                                    <img src="{{asset($blog_1->image)}}" alt="">
                                    <span class="badge">ףד הנה</span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="articleContent">
                                    <h2>{{$blog_1->title}}</h2>
                                    <p>{!! \Illuminate\Support\Str::limit($blog_1->description, 300, $end='...') !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subArticles">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="articleCardBox">
                                            <div class="articleImg">
                                                <img src="{{asset($blog_2->image)}}" alt="">
                                                <span class="badge">ףד הנה</span>
                                            </div>
                                            <div class="articleDetail">
                                                <h3>{{$blog_2->title}}</h3>
                                                <p> {!! \Illuminate\Support\Str::limit($blog_2->description, 150, $end='...') !!} </p>
                                            </div>
                                            <a class="seeDetail" href=""><i class="fa fa-chevron-left"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="articleCardBox">
                                            <div class="articleImg">
                                                <img src="{{asset($blog_3->image)}}" alt="">
                                                <span class="badge">ףד הנה</span>
                                            </div>
                                            <div class="articleDetail">
                                                <h3> {{$blog_3->title}} </h3>
                                                <p> {!! \Illuminate\Support\Str::limit($blog_3->description, 150, $end='...') !!} </p>
                                            </div>
                                            <a class="seeDetail" href=""><i class="fa fa-chevron-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="horizontalCardBox">
                                    <div class="articleImg">
                                        <img src="{{asset($blog_4->image)}}" alt="">
                                    </div>
                                    <div class="articleDetail">
                                                <h3> {{$blog_4->title}} </h3>
                                                <p> {!! \Illuminate\Support\Str::limit($blog_4->description, 150, $end='...') !!} </p>
                                                <a class="seeDetail" href=""><i class="fa fa-chevron-left"></i></a>
                                            </div>
                                            
                                </div>
                                <div class="horizontalCardBox">
                                    <div class="articleImg">
                                        <img src="{{asset($blog_5->image)}}" alt="">
                                    </div>
                                    <div class="articleDetail">
                                                <h3> {{$blog_5->title}} </h3>
                                                <p> {!! \Illuminate\Support\Str::limit($blog_5->description, 150, $end='...') !!} </p>
                                                <a class="seeDetail" href=""><i class="fa fa-chevron-left"></i></a>
                                            </div>
                                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="row" style="margin-top: 50px;">
            <div class="col-12">
                <div class="topBanner">
                    <img src="{{asset('assets/img/banner/topBanner.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
                <div class="categoryDiv">
                    <div class="mainCategory">
                        <h2>תעשייה</h2>
                        <div class="row">
                        <div class="col-md-4">
                                <img src="{{asset($blog_1->image)}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <div class="categoryDetail">
                                    <h3>{{$blog_1->title}}</h3>
                                    <p> {!! \Illuminate\Support\Str::limit($blog_1->description, 150, $end='...') !!} </p>
                                    <button>עובשמ רתויב</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="subCategory">
                            @foreach($blogs as $blog)
                        
                        <div class="horizontalCategory">
                            <img src="{{asset($blog->image)}}" alt="" class="img-fluid">
                            <div class="categoryDetail">
                            <h3> {{$blog->title}}</h3>
                                    <p>{!! \Illuminate\Support\Str::limit($blog->description, 150, $end='...') !!}</p>
                            </div>
                        </div>
                            @endforeach
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="adds">
                    <div class="addDiv">
                        <img src="{{asset('assets/img/banner/add1.jpg')}}" alt="" class="img-fluid">
                        <img src="{{asset('assets/img/banner/add2.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection