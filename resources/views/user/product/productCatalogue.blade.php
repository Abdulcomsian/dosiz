@extends('layout.mainlayout')
@section('content')
<section id="productBanner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('assets/img/user/productBanner.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section id="productCatalogue">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2>קולקציית הפרימיום שלנו</h2>
            </div>
        </div>
        <div class="tabDiv">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#home">כל המוצרים</a></li>
                        <li><a data-toggle="pill" href="#menu1">םידימצ</a></li>
                        <li><a data-toggle="pill" href="#menu2">תוארשרש</a></li>
                        <li><a data-toggle="pill" href="#menu3">תועבט</a></li>
                        <li><a data-toggle="pill" href="#menu4">םירזיבא</a></li>
                        <li><a data-toggle="pill" href="#menu5">תונתמ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tabContent">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="productCommon">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-20">
                                    <button class="commonBtn">דוע הלג</button>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                        <div class="productCommon">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-20">
                                    <button class="commonBtn">דוע הלג</button>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                        <div class="productCommon">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-20">
                                    <button class="commonBtn">דוע הלג</button>
                                </div>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                        <div class="productCommon">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="sliderCommonDiv">
                                            <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                                            <div class="ratingDiv">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="brandInfo">
                                                <h5>ןטק ףדצ – CROSS דימצ</h5>
                                                <p>₪ 490.00-₪ 590.00</p>
                                                <p class="price">₪ 531.00-₪ 441.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-20">
                                    <button class="commonBtn">דוע הלג</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sliderSection">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>םישדח םירצומ םי תינור</h2>
                <div class="brandSlider">
                    <div class="sliderCommonDiv">
                        <img src="{{asset('assets/img/user/brand1.svg')}}" alt="" class="img-fluid">
                        <div class="ratingDiv">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="brandInfo">
                            <h5>ןטק ףדצ – CROSS דימצ</h5>
                            <p>₪ 490.00-₪ 590.00</p>
                            <p class="price">₪ 531.00-₪ 441.00</p>
                        </div>
                    </div>
                    <div class="sliderCommonDiv">
                        <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                        <div class="ratingDiv">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="brandInfo">
                            <h5>ןטק ףדצ – CROSS דימצ</h5>
                            <p>₪ 490.00-₪ 590.00</p>
                            <p class="price">₪ 531.00-₪ 441.00</p>
                        </div>
                    </div>
                    <div class="sliderCommonDiv">
                        <img src="{{asset('assets/img/user/brand3.svg')}}" alt="" class="img-fluid">
                        <div class="ratingDiv">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="brandInfo">
                            <h5>ןטק ףדצ – CROSS דימצ</h5>
                            <p>₪ 490.00-₪ 590.00</p>
                            <p class="price">₪ 531.00-₪ 441.00</p>
                        </div>
                    </div>
                    <div class="sliderCommonDiv">
                        <img src="{{asset('assets/img/user/brand4.svg')}}" alt="" class="img-fluid">
                        <div class="ratingDiv">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="brandInfo">
                            <h5>ןטק ףדצ – CROSS דימצ</h5>
                            <p>₪ 490.00-₪ 590.00</p>
                            <p class="price">₪ 531.00-₪ 441.00</p>
                        </div>
                    </div>
                    <div class="sliderCommonDiv">
                        <img src="{{asset('assets/img/user/brand5.svg')}}" alt="" class="img-fluid">
                        <div class="ratingDiv">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="brandInfo">
                            <h5>ןטק ףדצ – CROSS דימצ</h5>
                            <p>₪ 490.00-₪ 590.00</p>
                            <p class="price">₪ 531.00-₪ 441.00</p>
                        </div>
                    </div>
                    <div class="sliderCommonDiv">
                        <img src="{{asset('assets/img/user/brand2.svg')}}" alt="" class="img-fluid">
                        <div class="ratingDiv">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="brandInfo">
                            <h5>ןטק ףדצ – CROSS דימצ</h5>
                            <p>₪ 490.00-₪ 590.00</p>
                            <p class="price">₪ 531.00-₪ 441.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection