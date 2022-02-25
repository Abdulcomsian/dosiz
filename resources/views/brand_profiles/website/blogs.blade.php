@extends('layout.mainlayout')
@section('content') 
<section id="articleSection" class="articleCategory">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                <img src="{{asset('assets/img/user/articleMain.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="articleLeftDiv">
                    <div class="articleCard">
                                <div class="articleInfo">
                                    <div class="dateInput">
                                        <input type="date">
                                    </div>
                                    <h3>ןונגס 2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה </h3>
                                    <p> הבילה יכרע םה ולא ,םיעבצו תוידוחיי ,תוישנ ,החוור ,תוחונ ,שפוח
                                        תויווח ררועל םיפאוש ונא ,םי תינור תא םיבצעמ ונא רשאכ .םי תינור לש
                                        םש לע םיארקנ ונלש תונונגסהש הביסה וזו ,ונלש םידגבה םע תושדח
                                        וא הדובעב ,תיבב םי תינור תא תשבול תא םא ןיב .םידעי םייטוזקא
                                        תשגרה תא ךל םיעיצמ ונא ,השפוחב 
                                    </p>
                                    <p> לוברפוסהשכ תאצל וליחתה קוידב ינפגו קריד ירבח ,םינש המכ ינפל
                                        ,ונלש רחא רבח םע קלחש הרידל ינפג תא ןימזה קרידו ,עיגה
                                        וא הדובעב ,תיבב םי תינור תא תשבול תא םא ןיב .םידעי םייטוזקא
                                        תשגרה תא ךל םיעיצמ ונא ,השפוחב </p>
                                    <div class="readMore">
                                        <p>
                                            <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="multiArticle">
    <div class="articleCommon">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>תעשייה</h2>
                </div>
            </div>
            <div class="underLine"></div>
            <div class="multiDiv">
                <div class="row">
                    <div class="col-md-4">
                        <div class="articleCard">
                            <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                        <img src="{{asset('assets/img/user/article1.svg')}}" alt="" class="img-fluid">
                            <div class="articleInfo">
                                <div class="dateInput">
                                    <input type="date">
                                </div>
                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                <div class="readMore">
                                    <p>
                                        <a href="{{url('blog',$brand_profile->id)}}">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="articleCard">
                        <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                        <img src="{{asset('assets/img/user/articleCategory.png')}}" alt="" class="img-fluid">
                            <div class="articleInfo">
                                <div class="dateInput">
                                    <input type="date">
                                </div>
                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                <div class="readMore">
                                    <p>
                                        <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="articleCard">
                        <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                        <img src="{{asset('assets/img/user/article1.svg')}}" alt="" class="img-fluid">
                            <div class="articleInfo">
                                <div class="dateInput">
                                    <input type="date">
                                </div>
                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                <div class="readMore">
                                    <p>
                                        <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="articleCommon">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>תעשייה</h2>
                </div>
            </div>
            <div class="underLine"></div>
            <div class="multiDiv">
                <div class="row">
                    <div class="col-md-4">
                        <div class="articleCard">
                        <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                        <img src="{{asset('assets/img/user/article1.svg')}}" alt="" class="img-fluid">
                            <div class="articleInfo">
                                <div class="dateInput">
                                    <input type="date">
                                </div>
                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                <div class="readMore">
                                    <p>
                                        <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="articleCard">
                        <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                        <img src="{{asset('assets/img/user/articleCategory.png')}}" alt="" class="img-fluid">
                            <div class="articleInfo">
                                <div class="dateInput">
                                    <input type="date">
                                </div>
                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                <div class="readMore">
                                    <p>
                                        <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="articleCard">
                        <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                        <img src="{{asset('assets/img/user/article1.svg')}}" alt="" class="img-fluid">
                            <div class="articleInfo">
                                <div class="dateInput">
                                    <input type="date">
                                </div>
                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                <div class="readMore">
                                    <p>
                                        <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="articleCommon">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>תעשייה</h2>
                </div>
            </div>
            <div class="underLine"></div>
            <div class="multiDiv">
                <div class="row">
                    <div class="col-md-4">
                        <div class="articleCard">
                        <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                        <img src="{{asset('assets/img/user/article1.svg')}}" alt="" class="img-fluid">
                            <div class="articleInfo">
                                <div class="dateInput">
                                    <input type="date">
                                </div>
                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                <div class="readMore">
                                    <p>
                                        <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="articleCard">
                        <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                        <img src="{{asset('assets/img/user/articleCategory.png')}}" alt="" class="img-fluid">
                            <div class="articleInfo">
                                <div class="dateInput">
                                    <input type="date">
                                </div>
                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                <div class="readMore">
                                    <p>
                                        <a href="">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="articleCard">
                        <div class="badgeDiv">
                                <img src="{{asset('assets/img/user/badge.png')}}" alt="">
                                <span class="whishlistText">
                                    <span>0</span>
                                    <img src="{{asset('assets/img/user/heart.png')}}" alt="">
                                </span>
                            </div>
                        <img src="{{asset('assets/img/user/article1.svg')}}" alt="" class="img-fluid">
                            <div class="articleInfo">
                                <div class="dateInput">
                                    <input type="date">
                                </div>
                                <h3>2022 ויתס םלוהקוטשב הנפואה עובשמ רתויב בוטה בוחרה ןונגס</h3>
                                <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו בוציע לכ .ךלת  ךרוא דעו תלפכמה אלש ןאל ,"סיכב הפילק ,תונוהבב לוח"</p>
                                <div class="readMore">
                                    <p>
                                        <a href="{{url('blog',$brand_profile->id)}}">דוע ארק <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection