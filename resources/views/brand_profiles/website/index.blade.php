@extends('layout.mainlayout')
@include('layouts.sweetalert.sweetalert_css')
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
                    <img src="{{asset($brand_profile->brand_image ?? '')}}" style="width: 590px; height:561px;" alt="" class="img-fluid"> 
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
                    @if($products)
                        @foreach($products as $product)
                        <div class="sliderCommonDiv" style="width:20px !important;">
                            <img src="{{asset($product->image ?? '')}}" alt="" style="width:188.27px; height:205.69px;" class="img-fluid">
                            <div class="ratingDiv">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="brandInfo">
                                <h5>{{ $product->name}}</h5>
                                <p>₪ {{$product->old_from_price}}-₪ {{$product->old_to_price}}</p>
                                <p class="price">₪ {{$product->new_from_price}}-₪ {{$product->new_to_price}}</p>
                            </div>
                        </div>
                        @endforeach
                    @else
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
                    @endif
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
            @if($blog_1 != null)
            <div class="col-md-4">
                <div class="articleRightDiv">
                    <div class="articleCard">
                        <img src="{{asset($blog_1->image ?? '')}}" alt="" style="width:446.59px; height:301.78px;" class="img-fluid">
                        <div class="articleInfo">
                            <div class="dateInput">
                                <img src="{{asset('assets_admin/img/calendar.png')}}" alt="" style="width:18px !important; height: 18px !important;">
                                <span style="border: none;color: #747474;font-size: 12px;font-family: PloniRegular;">{{ date('Y/m/d', strtotime($blog_1->created_at)) }}</span>
                            </div>
                            <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                            <p> {!!asset($blog_1->description ?? '')!!} </p>
                            <div class="readMore">
                                <p>
                                    <a href="{{url('article',$blog_1->id)}}">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-4">
                <div class="articleRightDiv">
                    <div class="articleCard">
                        <img src="{{asset('assets/img/user/article1.svg')}}" alt="" class="img-fluid">
                        <div class="articleInfo">
                            <div class="dateInput">
                                <input type="date">
                            </div>
                            <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                            <div class="readMore">
                                <p>
                                    <a href="#">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="col-md-8">
                <div class="articleLeftDiv">
                    @if($blog_2 != null)
                    <div class="articleCard">
                        <div class="row">
                            <div class="col-md-6 desktopHide">
                                <img src="{{asset($blog_2->image ?? '')}}" alt="" style="width:378.96px; height:287.03px;" class="img-fluid">
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
                                            <a href="{{url('article',$blog_2->id)}}">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mobileHide">
                                <img src="{{asset($blog_2->image ?? '')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="articleCard">
                        <div class="row">
                            <div class="col-md-6 desktopHide">
                                <img src="{{asset('assets/img/user/article1img.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <div class="articleInfo">
                                    <div class="dateInput">
                                        <input type="date">
                                    </div>
                                    <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                    <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                    <div class="readMore">
                                        <p>
                                            <a href="#">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mobileHide">
                                <img src="{{asset('assets/img/user/article1img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($blog_3 != null)
                    <div class="articleCard">
                        <div class="row">
                            <div class="col-md-6 desktopHide">
                                <img src="{{asset($blog_3->image ?? '')}}" alt="" style="width:378.96px; height:287.03px;" class="img-fluid">
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
                                            <a href="{{url('article',$blog_3->id)}}">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mobileHide">
                                <img src="{{asset($blog_3->image ?? '')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="articleCard">
                        <div class="row">
                            <div class="col-md-6 desktopHide">
                                <img src="{{asset('assets/img/user/articale2img.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <div class="articleInfo">
                                    <div class="dateInput">
                                        <input type="date">
                                    </div>
                                    <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                    <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                    <div class="readMore">
                                        <p>
                                            <a href="#">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mobileHide">
                                <img src="{{asset('assets/img/user/articale2img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    @endif
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
                        <form action="" method="post" >
                            @csrf
                            <div class="d-flex">
                                <div class="inputdiv">
                                    <input type="text" name="first_name" id="first_name" value="" placeholder="אימייל">
                                    <div style="color:red;">{{$errors->first('first_name')}}</div> <br>
                                </div>
                                <div class="inputdiv">
                                    <input type="text" name="last_name" id="last_name" value="" placeholder="םש">
                                    <div style="color:red;">{{$errors->first('last_name')}}</div> <br>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="inputdiv">
                                    <input type="email" name="email" id="email" value="" placeholder="אשונ">
                                    <div style="color:red;">{{$errors->first('email')}}</div> <br>
                                </div>
                                <div class="inputdiv">
                                    <input type="number" name="phone" id="phone" value="" placeholder="מספר טלפון">
                                    <div style="color:red;">{{$errors->first('phone')}}</div> <br>
                                </div>
                            </div>
                            <div class="inputdiv" style="width: 100%; margin: 18px 0px 0px;">
                                    <textarea name="subject" id="subject" cols="30" rows="10" placeholder="שלח עיסוי"></textarea>
                                </div>
                                <button style="submit" class="commonBtn">שלח עיסוי</button>
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
<!-- The Modal -->
  <div class="modal" id="email_subscriber">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-body">
            <div class="form-content p-2">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Subscribe</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form id="update_category" method="post" autocomplete="off" action="{{ route('subscriber.store') }}" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                        @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" value="" name="name" id="name" data-bv-field="name">
                                <input class="form-control" type="hidden" value="{{$brand_profile->id}}" name="brand_profile_id" id="brand_profile_id">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control" type="number" name="phone" id="phone">
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-primary" name="form_submit" value="submit" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
        
      </div>
    </div>
  </div>
@section('js')
@include('layouts.sweetalert.sweetalert_js')
    <script type="text/javascript">
        jQuery(document).ready(function ()
        {
            const myTimeout = setTimeout(myGreeting, 10000);

            function myGreeting() {
              $("#email_subscriber").modal();
            }
        });
    </script>
@endsection