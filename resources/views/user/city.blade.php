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
                                    <img src="{{asset('assets/img/user/realtedArticle1.png')}}" alt="">
                                    <span class="badge">ףד הנה</span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="articleContent">
                                    <h2>ךלש םיטי'צה ףד הנה ,לכה התא םא</h2>
                                    <p>.)ןושאר םויב םהלש םינבה ינש םע קחשמב ופציו ןכמ רחאל רצק ןמז ונתחתה ינפגו קריד :רבד לש ופוסב רדתסה לכה ,יובא( "!סטרבור הילו'ג לע הכוב ,הפסה לע קרידו לוברפוס לש ןושאר םוי הז !הָרזֶע" .רבחל הריהמ הקינאפ תחישל םיתורישל ץר ינפג .הפסה לע תוילונגמ ליטסב הייפצ ידכ ךות םיכוב ,םיריוצמ םינווגה םע הפסה לע םיטו קריד תא אוצמל ידכ קר - שוערל הנכומו טייל דאב לש זראמ תזרוא ,קחשמה ינפל העש םיטו קריד לש םתרידל הסנכנ איה .יניצר םידקמ קחשמ הזיא היהיש</p>
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
                                                <img src="{{asset('assets/img/user/realtedArticle3.png')}}" alt="">
                                                <span class="badge">ףד הנה</span>
                                            </div>
                                            <div class="articleDetail">
                                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                                <p>תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                            </div>
                                            <a class="seeDetail" href=""><i class="fa fa-chevron-left"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="articleCardBox">
                                            <div class="articleImg">
                                                <img src="{{asset('assets/img/user/realtedArticle2.png')}}" alt="">
                                                <span class="badge">ףד הנה</span>
                                            </div>
                                            <div class="articleDetail">
                                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                                <p>תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                            </div>
                                            <a class="seeDetail" href=""><i class="fa fa-chevron-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="horizontalCardBox">
                                    <div class="articleImg">
                                        <img src="{{asset('assets/img/user/realtedArticle4.png')}}" alt="">
                                    </div>
                                    <div class="articleDetail">
                                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                                <p>תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                                <a class="seeDetail" href=""><i class="fa fa-chevron-left"></i></a>
                                            </div>
                                            
                                </div>
                                <div class="horizontalCardBox">
                                    <div class="articleImg">
                                        <img src="{{asset('assets/img/user/realtedArticle5.png')}}" alt="">
                                    </div>
                                    <div class="articleDetail">
                                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                                <p>תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
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
                                <img src="{{asset('assets/img/user/articleCategory.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <div class="categoryDetail">
                                    <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                    <p>תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח</p>
                                    <button>עובשמ רתויב</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="subCategory">
                        <div class="horizontalCategory">
                            <img src="{{asset('assets/img/user/articleCategory.png')}}" alt="" class="img-fluid">
                            <div class="categoryDetail">
                            <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                    <p>תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח</p>
                            </div>
                        </div>
                        <div class="horizontalCategory">
                            <img src="{{asset('assets/img/user/articleCategory.png')}}" alt="" class="img-fluid">
                            <div class="categoryDetail">
                            <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                    <p>תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח</p>
                            </div>
                        </div>
                        <div class="horizontalCategory">
                            <img src="{{asset('assets/img/user/articleCategory.png')}}" alt="" class="img-fluid">
                            <div class="categoryDetail">
                            <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                    <p>תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח</p>
                            </div>
                        </div>
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