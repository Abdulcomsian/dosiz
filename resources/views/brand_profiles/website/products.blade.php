@extends('layout.mainlayout')
@section('content') 
<section id="articleBanner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2>היישעתב םיגולב</h2>
            </div>
        </div>
    </div>
</section>
<div class="lineDiv">
    <img src="{{asset('assets/img/user/line 2.png')}}" alt="">
</div>
<section id="multiArticle" style="padding-bottom: 50px;">
    <div class="articleCommon">
        <div class="container-fluid">
            <div class="multiDiv">
                <div class="row">
                    @if($products)
                    @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="articleCard">
                            <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                        <img src="{{asset($product->image ?? '')}}" style="width:365px; height:345px;" alt="" class="img-fluid">
                            <div class="articleInfo">
                                <div class="dateInput">
                                    <span style="border: none;color: #747474;font-size: 12px;font-family: PloniRegular;">{{ date('Y/m/d', strtotime($product->created_at)) }}</span>
                                </div>
                                <h3> {{$product->name}} </h3>
                                <p> {!!$product->description!!} </p>
                                <div class="readMore">
                                    <p>
                                        <a href="{{url('product/'.$brand_id. '/' .$product->id)}}">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p>No Product Created Yet</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-80">
        <div class="col-12 text-center">
            <button class="commonBtn">דוע ןעט</button>
        </div>
    </div>
</section>
@endsection