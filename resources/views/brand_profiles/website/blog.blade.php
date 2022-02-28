@extends('layout.mainlayout')
@section('content') 
<section id="detailArticle">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="articleDetailBox">
                    <div class="row">
                        <div class="col-6">
                            <p class="trendingText">Trending</p>
                        </div>
                        <div class="col-6 text-left">
                            <div class="dateDiv">
                                <p>24 Oct,2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3>{!! $articles->description!!} </h3>
                            <p>{!! $articles->description!!}</p>
                            <div class="detailImg">
                                <img src="{{asset($articles->image)}}" alt="">
                            </div>
                            <div class="sharingOption">
                                <ul>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('assets/img/user/pintrest.png')}}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('assets/img/user/facebook.png')}}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('assets/img/user/linkdin.png')}}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('assets/img/user/twitter.png')}}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('assets/img/user/instagram.png')}}" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="articleDescription">
                                <p>{!! $articles->description!!}</p>
                            </div>
                            <h2>{!! $articles->description!!}</h2>
                            <p>{!! $articles->description!!}</p>
                            <div class="articleSuggestion">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset($articles->images[0])}}" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sugesstionInfo">
                                            <p>{!! $articles->description!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reviewDiv">
                                <h2>{!! $articles->description!!}</h2>
                                <p>{!! $articles->description!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tabDiv">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#home" class="active">רושק</a></li>
                        <li><a data-toggle="pill" href="#menu1">ירלופופ</a></li>
                        <li><a data-toggle="pill" href="#menu2">תומגמ</a></li>
                    </ul>
                </div>
                <div class="tabContent">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active show">
                        <div class="relatedArticle">
                            <ul>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle1.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle2.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle3.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle4.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle5.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle6.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                    <div class="relatedArticle">
                            <ul>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle1.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle2.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle3.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle4.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle5.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle6.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                    <div class="relatedArticle">
                            <ul>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle1.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle2.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle3.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle4.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle5.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="articleDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('assets/img/user/realtedArticle6.png')}}" alt="">
                                        </div>
                                        <div class="articleInfo">
                                            <div class="dateDiv">
                                                <p><a href="">  תואירב /</a> 24 Oct,2021 </p>
                                            </div>
                                            <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="categoryDiv commonDiv">
                    <div class="row">
                        <div class="col-12">
                            <h2>קטגוריות</h2>
                            <ul>
                                <li>
                                    <p>תעשייה</p>
                                    <p class="count">05</p>
                                </li>
                                <li>
                                    <p>תכשיט</p>
                                    <p class="count">15</p>
                                </li>
                                <li>
                                    <p>הקדמות</p>
                                    <p class="count">65</p>
                                </li>
                                <li>
                                    <p>תעשייה</p>
                                    <p class="count">08</p>
                                </li>
                                <li>
                                    <p>תעשייה</p>
                                    <p class="count">16</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tagDiv commonDiv">
                    <h2>יגת</h2>
                    <ul>
                        <li>
                            <a href="">תכשיט</a>
                        </li>
                        <li>
                            <a href="">תעשייה</a>
                        </li>
                        <li>
                            <a href="">בלוג עיצוב</a>
                        </li>
                        <li>
                            <a href="">הקדמות</a>
                        </li>
                        <li>
                            <a href="">הקדמות</a>
                        </li>
                        <li>
                            <a href="">תכשיט</a>
                        </li>
                    </ul>
                </div>
                <div class="socialDiv">
                    <div class="socialInfoDiv">
                        <p>
                            <div class="iconDiv"></div>
                            <div class="socialInfo">
                                <p class="totalCount">34,456</p>
                                <p>Subscribers</p>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>
@endsection