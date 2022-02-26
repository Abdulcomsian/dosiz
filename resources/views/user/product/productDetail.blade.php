@extends('layout.mainlayout')
@section('content') 
<section id="detailArticle" class="productDetail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="productReviewDetail">
                    <ul>
                        <li>
                            <img src="{{asset('assets/img/user/savedIcon.png')}}" alt="">
                            <span>21</span>
                        </li>
                        <li>
                            <img src="{{asset('assets/img/user/commentIcon.png')}}" alt="">
                            <span>21</span>
                        </li>
                        <li>
                            <img src="{{asset('assets/img/user/heartIcon.png')}}" alt="">

                            <span>21</span>
                        </li>
                    </ul>
                </div>
                <div class="articleDetailBox">
                    <!-- <div class="row">
                        <div class="col-6">
                            <p class="trendingText">Trending</p>
                        </div>
                        <div class="col-6 text-left">
                            <div class="dateDiv">
                                <p>24 Oct,2021</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-12">
                            <h3>   ךלש םיטי'צה ףד הנה ,לכה התא םא וא ךל תפכא 2022 לוברפוסל ישוקב םא ןיב</h3>
                            <p>.לודגה קחשמב תופצל ,םיט ,ונלש רחא רבח םע קלחש הרידל ינפג תא ןימזה קרידו ,עיגה לוברפוסהשכ .לודגה קחשמב תופצל ,םיט ,ונלש רחא רבח םע קלחש הרידל ינפג תא ןימזה קרידו ,עיגה לוברפוסהשכ תאצל וליחתה קוידב ינפגו קריד ירבח ,םינש המכ ינפל</p>
                            <p>.)ןושאר םויב םהלש םינבה ינש םע קחשמב ופציו ןכמ רחאל רצק ןמז ונתחתה ינפגו קריד :רבד לש ופוסב רדתסה לכה ,יובא( "!סטרבור הילו'ג לע הכוב ,הפסה לע קרידו לוברפוס לש ןושאר םוי הז !הָרזֶע" .רבחל הריהמ הקינאפ תחישל םיתורישל ץר ינפג .הפסה לע תוילונגמ ליטסב הייפצ ידכ ךות םיכוב ,םיריוצמ םינווגה םע הפסה לע םיטו קריד תא אוצמל ידכ קר - שוערל הנכומו טייל דאב לש זראמ תזרוא ,קחשמה ינפל העש םיטו קריד לש םתרידל הסנכנ איה .יניצר םידקמ קחשמ הזיא היהיש הבשח איהש המל תונמדזהה לע הצפק ינפג - החותפ תלדה תא ריאשי אוה - תע לכב לוברפוסל אובל ינפגל רמא קרידשכ זא .תיבח ןכודל הנכומ 'גלוקב םירוקיבל העיפוהש​​ אמא הללכש הביצי תלשוש לש גוסהמ עיגה ינפגש דועב - לגרודכ רשאמ רתוי הברה םינפוג ריכה ,ףוריטב רשכומ יפרג בצעמ ,קרידש ןאכ ןייצל שי</p>
                            <p>.לעה דהואל דעו לד עדימ יעיבצמ לחה ,םלוכ רובע ,ןמז יוליבל תויורשפא שולש ןלהל .ךב יולת ירמגל הז ןושאר םויב תושעל התא המ ,הרוק הזש הזל עדומ ישוקב התאש וא הנועה לכ ךשמב )תימור  תאצל וליחתה קוידב ינפגו קריד ירבח ,םינש המכ ינפלהרפס</p>
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
                        </div>
                    </div>
                    <div class="reviewBox">
                        <!-- <div class="reveiwTagDiv">
                            <ul>
                                <li>
                                    <a class="active" href="">םיגת <img src="{{asset('assets/img/user/tagIcon.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="">םיגת</a>
                                </li>
                                <li>
                                    <a href="">םיגת</a>
                                </li>
                                <li>
                                    <a href="">םיגת</a>
                                </li>
                            </ul>
                        </div> -->
                        <div class="editHeartText">
                            <ul>
                                <li>
                                    <a href="">?תבהא <img src="{{asset('assets/img/user/heartIcon2.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="">ךתעד עומשל חמשנ <img src="{{asset('assets/img/user/edit.png')}}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="reviewForm">
                            <form action="">
                                <h5>הבוגת תביתכ</h5>
                                <label> םינמוסמ הבוחה תודש .רתאב גצוי אל ליימיאה <span>*</span></label>
                                <div class="inputDiv">
                                    <label for="">םש <span>*</span></label>
                                    <input type="text">
                                </div>
                                <div class="inputDiv">
                                    <label for="">םש <span>*</span></label>
                                    <input type="text">
                                </div>
                                <div class="inputDiv">
                                    <label for="">םש <span>*</span></label>
                                    <textarea name="" id="" cols="30" rows="5"></textarea>
                                </div>
                                <button class="commonBtn">חלש</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="sliderDiv">
                    <div class="mainImg">
                        <img src="{{asset('assets/img/mainSlider.png')}}" alt="">
                    </div>
                    <div class="productSlider">
                        <div class="sliderImg">
                            <img src="{{asset('assets/img/user/productImg.png')}}" alt="">
                        </div>
                        <div class="sliderImg">
                            <img src="{{asset('assets/img/user/productImg.png')}}" alt="">
                        </div>
                        <div class="sliderImg">
                            <img src="{{asset('assets/img/user/productImg.png')}}" alt="">
                        </div>
                        <div class="sliderImg">
                            <img src="{{asset('assets/img/user/productImg.png')}}" alt="">
                        </div>
                        <div class="sliderImg">
                            <img src="{{asset('assets/img/user/productImg.png')}}" alt="">
                        </div>
                        <div class="sliderImg">
                            <img src="{{asset('assets/img/user/productImg.png')}}" alt="">
                        </div>
                        <div class="sliderImg">
                            <img src="{{asset('assets/img/user/productImg.png')}}" alt="">
                        </div>
                        <div class="sliderImg">
                            <img src="{{asset('assets/img/user/productImg.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="tabContent">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active show">
                            <div class="relatedArticle">
                                <h2>ספספל הצור אל התאש םירבד המכ דוע</h2>
                                <ul>
                                    <li>
                                        <div class="articleDiv">
                                            <div class="imgDiv">
                                                <img src="{{asset('assets/img/user/realtedArticle1.png')}}" alt="">
                                            </div>
                                            <div class="articleInfo">
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
                                                <p> תומקרהמ ,בטיה בשוחמ םי תינור לש בוציעו הפילק ,תונוהבב לוח"</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
       
    </div>
</section>
@endsection