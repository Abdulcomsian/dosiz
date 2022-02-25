@extends('layout.mainlayout')
@section('content') 
<section id="brandBanner">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-6">
                <div class="brandMainIntro">
                    <h4 class="commonTitleText">{{$brand_profile->category->name ?? 'יתיללכ הריקס  '}} </h4>
                    <h1>סונייקוא חור ונחנא</h1>
                    <p>{{$brand_profile->description ?? ''}}</p>
                </div>
            </div>
            <div class="col-md-6 text-left">
                <div class="brandMainImg">
                    <img src="{{asset($brand_profile->brand_image ?? '')}}" alt="" class="img-fluid"> 
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sliderSection">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2><a href="{{url('products',$brand_profile->id)}}" >םישדח םירצומ םי תינור</a></h2>
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
<section id="articleSection">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2><a href="{{url('articles',$brand_profile->id)}}" >םלוכ תא ןכדעי ונלש םינורחאה םיגולבה</a></h2>
            </div>
            <div class="col-md-4">
                <div class="articleRightDiv">
                    <div class="articleCard">
                        <img src="{{asset($blog_1->image ?? '')}}" alt="" class="img-fluid">
                        <div class="articleInfo">
                            <div class="dateInput">
                                <img src="{{asset('assets_admin/img/calendar.png')}}" alt="" style="width:18px !important; height: 18px !important;">
                                <span style="border: none;color: #747474;font-size: 12px;font-family: PloniRegular;">{{ date('Y/m/d', strtotime($blog_1->created_at)) }}</span>
                            </div>
                            <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                            <p> {!!asset($blog_1->description ?? '')!!} </p>
                            <div class="readMore">
                                <p>
                                    <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="articleLeftDiv">
                    <div class="articleCard">
                        <div class="row">
                            <div class="col-md-6 desktopHide">
                                <img src="{{asset($blog_2->image ?? '')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <div class="articleInfo">
                                    <div class="dateInput">
                                        <img src="{{asset('assets_admin/img/calendar.png')}}" alt="" style="width:18px !important; height: 18px !important;">
                                        <span style="border: none;color: #747474;font-size: 12px;font-family: PloniRegular;">{{ date('Y/m/d', strtotime($blog_2->created_at)) }}</span>
                                    </div>
                                    <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                    <p> {!!asset($blog_2->description ?? '')!!} </p>
                                    <div class="readMore">
                                        <p>
                                            <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mobileHide">
                                <img src="{{asset($blog_2->image ?? '')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="articleCard">
                        <div class="row">
                            <div class="col-md-6 desktopHide">
                                <img src="{{asset($blog_3->image ?? '')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <div class="articleInfo">
                                    <div class="dateInput">
                                       <img src="{{asset('assets_admin/img/calendar.png')}}" alt="" style="width:18px !important; height: 18px !important;"> <span style="border: none;color: #747474;font-size: 12px;font-family: PloniRegular;">{{ date('Y/m/d', strtotime($blog_3->created_at)) }}</span>
                                    </div>
                                    <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                    <p>{!!asset($blog_3->description ?? '')!!} </p>
                                    <div class="readMore">
                                        <p>
                                            <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mobileHide">
                                <img src="{{asset($blog_3->image ?? '')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-60">
                <button class="loadMore">
                <a href="{{url('articles',$brand_profile->id)}}">ףסונ רמאמ</a>
                </button>
            </div>
        </div>
    </div>
</section>
<section id="contactSection">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>רשק ונתיא רוציל ישפוח שיגרת</h2>
            </div>
        </div>
        <div class="contactInfoDiv">
            <div class="row">
                <div class="col-md-4">
                    <div class="commonContactDiv">
                        <div class="iconDiv">
                            <img src="{{asset('assets/img/user/map.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="infoDiv">
                            <h5>םוקמ</h5>
                            <p>בקר אותנו</p>
                            <span>{{$brand_profile->city->name ?? ''}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="commonContactDiv">
                        <div class="iconDiv">
                            <img src="{{asset('assets/img/user/call.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="infoDiv">
                            <h5>7/24 תוריש</h5>
                            <p>ונילא רשקתה</p>
                            <span>{{$brand_profile->user->phone ?? ''}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="commonContactDiv">
                        <div class="iconDiv">
                            <img src="{{asset('assets/img/user/message.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="infoDiv">
                            <h5>הרוש קורז</h5>
                            <p>ראוד ונל חלש</p>
                            <span>{{$brand_profile->user->email ?? ''}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contactFormDiv">
            <div class="row">
                <div class="col-md-7">
                    <div class="formDiv">
                        <h3>ונילא ךתעדוה תא חלש</h3>
                        <form action="">
                            <div class="d-flex">
                                <div class="inputdiv">
                                    <input type="text" placeholder="אימייל">
                                </div>
                                <div class="inputdiv">
                                    <input type="text" placeholder="םש">
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="inputdiv">
                                    <input type="text" placeholder="אשונ">
                                </div>
                                <div class="inputdiv">
                                    <input type="text" placeholder="מספר טלפון">
                                </div>
                            </div>
                            <div class="inputdiv" style="width: 100%; margin: 18px 0px 0px;">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="שלח עיסוי"></textarea>
                                </div>
                                <button class="commonBtn">שלח עיסוי</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="imgDiv">
                        <img src="{{asset('assets/img/user/contactUs.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection