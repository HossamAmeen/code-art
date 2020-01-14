@extends('layout')
@section('content')

<section>
    <div class="service-details">
        <div class="container-fluid">
            <form action="order-application.html">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="service-details-up-intro row">
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <div class="service-introImgs-div row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="service-introImg-div">
                                            <img class="service-introImg" width="100%" src="./assets/imgs/item-img.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 clickable-img">
                                        <div class="service-imgs row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 service-imgs-col">
                                                <div class="service-img-div service-img-1-div">
                                                    <img class="service-img service-img-1" width="100%"
                                                        src="./assets/imgs/item-img.png">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 service-imgs-col">
                                                <div class="service-img-div service-img-2-div">
                                                    <img class="service-img service-img-2" width="100%"
                                                        src="./assets/imgs/item-img.png">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 service-imgs-col">
                                                <div class="service-img-div service-img-3-div">
                                                    <img class="service-img service-img-3" width="100%"
                                                        src="./assets/imgs/item-img.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="service-info-details">
                                    <p class="service-info-details-title"><b>تصميم موقع احترافي بطريقة مميزه</b></p>
                                    <p class="service-info-details-info">نقوم بتصميم مواقع الكترونية محترفة من خلال احدث
                                        التقنيات واحدث
                                        البرامج المتخصصة للتصميم.</p>
                                    <p class="service-info-details-category"><i class="fas fa-bars pl-3"></i> تصميم
                                        مواقع</p>
                                    <p class="service-info-details-rate">
                                        <span class="pl-3"><b>التقييم</b></span>
                                        <i class="item-rate-star fas fa-star pl-0 active"></i>
                                        <i class="item-rate-star fas fa-star pl-0 active"></i>
                                        <i class="item-rate-star fas fa-star pl-0 active"></i>
                                        <i class="item-rate-star fas fa-star pl-0 "></i>
                                        <i class="item-rate-star fas fa-star pl-0 "></i>
                                    </p>
                                    <!-- <p class="service-info-details-price service-info-details-title-prive-before">
                                        <b>قبل</b> &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span
                                            class="service-info-details-prive-before"><del>1234
                                                ريال </del></span></p> -->
                                    <!-- <p class="service-info-details-price service-info-details-title-price-after"><b> بعد
                                        </b> &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span
                                            class="service-info-details-prive-after">23456
                                            ريال</span> </p> -->
                                    <p class="service-info-details-price service-info-details-title-price-off"><b> الخصم
                                        </b> &nbsp;
                                        &nbsp; &nbsp; &nbsp;<span class="service-info-details-prive-off"> 22 %</span>
                                    </p>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-light priceBtn active">
                                            <input type="radio" name="price-form" id="price-Class-1-form" autocomplete="off" value="75" checked> 75 ريال
                                        </label>
                                        <label class="btn btn-light priceBtn">
                                            <input type="radio" name="price-form" id="price-Class-1-form" autocomplete="off" value="100"> 100 ريال
                                        </label>
                                        <label class="btn btn-light priceBtn">
                                            <input type="radio" name="price-form" id="price-Class-1-form" autocomplete="off" value="150"> 150 ريال
                                        </label>
                                    </div>
                                    
                                    <div class="deliver-day">
                                        <span class="service-info-details-deliver-day">ميعاد التسليم&nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 3
                                            أيام</span>
                                    </div>
                                    <div class="deliver-count">
                                        العدد
                                        <br>
                                        <div class="service-info-details-deliver-count row">
                                            <div
                                                class=" btn-group col-lg-4 col-md-4 col-sm-4 col-xs-4 count-div-col count-div-col-1">
                                                <select class="form-control deliver-count-dropdown" name="count-form"
                                                    id="count-form">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div
                                                class="btn-group col-lg-8 col-md-8 col-sm-8 col-xs-8 count-div-col count-div-col-2">
                                                <button type="submit" class="btn order-delivrty-btn">شراء
                                                    الخدمة</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="service-details-up-info row">
                            <div class="col-lg-12 col-md-4">
                                <ul class="list-group list-group-flush info-list">
                                    <li class="list-group-item">
                                        <span class="line-hight-span">ضمان الخدمة &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            <span> 3
                                                سنوات</span></span>
                                        <br>
                                        <span class="line-hight-span">شحن موثوق به</span>
                                        <br>
                                        <span class="line-hight-span">شحن مجانا عند الشراء ب 200 ريال او اكثر</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-4">
                                <ul class="list-group list-group-flush info-list">
                                    <a href="serviceProfile_User.html">
                                        <li class="list-group-item list-group-item-orange">
                                            <span class="white-span"> البائع &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; أسامة
                                                عسكر</span></li>
                                    </a>
                                    <li class="list-group-item">ارجاع سهل<br><span
                                            class="line-hight-span grey-span">ارجاع سهل ومجاني
                                            للخدمة</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-4">
                                <ul class="list-group list-group-flush info-list">
                                    <a href="delieverToHome.html">
                                        <li class="list-group-item list-group-item-orange"><span class="white-span">خدمة
                                                توصيل الي
                                                المنازل</span></li>
                                    </a>
                                    <li class="list-group-item"> تسوق آمن<br><span
                                            class="line-hight-span grey-span">متقلقش على بياناتك
                                            دايما في أمان</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="additional-order">
                            <p>اضافات مقترحة</p>
                            <br>
                            <div class="row additional-row">
                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-check mb-20">
                                        <input type="checkbox" class="form-check-input" id="additional-1">
                                        <label class="form-check-label" for="additional-1">ترجمة 400 كلمة</label>
                                        <br><br>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                    <div class="form-group row pr-10">
                                        <label for="exampleFormControlSelect1">&nbsp; &nbsp; &nbsp;العدد</label>
                                        <div class="col-lg-7 col-md-5 col-sm-7">
                                            <select class="form-control additional-seleceOption"
                                                id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                    <div class="form-group row">
                                        <label for="exampleFormControlSelect1">&nbsp; &nbsp; &nbsp;النوع</label>
                                        <div class="col-lg-7 col-md-5 col-sm-7">
                                            <select class="form-control additional-seleceOption"
                                                id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                    <span class="grey-span"><i class="fas fa-plus ml-1"></i> يوم واحد</span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                    <span class="grey-span"><i class="fas fa-plus ml-1"></i>2 ريال</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
</section>

<section>
    <div class="service-details-bottom">
        <div class="">
            <div class="nav-details">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab"
                            aria-controls="overview" aria-selected="true">نظرة عامة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="specifications-tab" data-toggle="tab" href="#specifications"
                            role="tab" aria-controls="specifications" aria-selected="false">المواصفات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="rating-tab" data-toggle="tab" href="#rating" role="tab"
                            aria-controls="rating" aria-selected="false">التقييم</a>
                    </li>
                </ul>
                <div class="tab-content nav-info-container" id="myTabContent">
                    <div class="tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <div class="nav-info-div">
                            <div class="nav-info-hdr"><b>مميزات الخدمة</b></div>
                            <div class="nav-info-details">
                                في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك
                                - فكرتك.
                            </div>
                            <div class="nav-info-details">
                                في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك
                                - فكرتك.
                            </div>
                            <div class="nav-info-details">
                                في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك
                                - فكرتك.
                            </div>
                            <div class="nav-info-details">
                                في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك
                                - فكرتك.
                            </div>
                            <div class="nav-info-details">
                                في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك
                                - فكرتك.
                            </div>
                            <div class="nav-info-details">
                                في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك
                                - فكرتك.
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="specifications" role="tabpanel"
                        aria-labelledby="specifications-tab">
                        <div class="nav-info-hdr"><b>المواصفات</b></div>
                        <div class="nav-info-div row">
                            <div class="col-lg-12">
                                <div class="nav-info-div">
                                    <div class="nav-info-specification row container-fluid">
                                        <div class="col-lg-3 col-md-3 col-sm-6 cell-info row">
                                            <div class="col-12">
                                                <div class="specification-tbl-col specification-tbl-hdr">
                                                    <span>اسم الخدمة</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="specification-tbl-col specification-tbl-info">
                                                    <span>تصميم مواقع</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 cell-info row">
                                            <div class="col-12">
                                                <div class="specification-tbl-col specification-tbl-hdr">
                                                    <span>البرامج المستخدمة</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="specification-tbl-col specification-tbl-info">
                                                    <span>wordpress</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 cell-info row">
                                            <div class="col-12">
                                                <div class="specification-tbl-col specification-tbl-hdr">
                                                    <span>مدة التسليم</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="specification-tbl-col specification-tbl-info">
                                                    show active <span>3 ايام</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 cell-info row">
                                            <div class="col-12">
                                                <div class="specification-tbl-col specification-tbl-hdr">
                                                    <span>مقدم الخدمة</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="specification-tbl-col specification-tbl-info">
                                                    <span>اسامة عسكر</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="rating" role="tabpanel" aria-labelledby="rating-tab">
                        <div class="nav-info-hdr"><b>التقييم العام</b></div>
                        <div class="nav-info-div row">
                            <div class="col-lg-8">
                                <div class="nav-info-rating row container-fluid">
                                    <div
                                        class="col-lg-5 col-md-5 col-sm-3 col-cell-info cell-row-rating col-cell-info-1 row">
                                        <div class="col-12">
                                            <div class="rating-tbl-col-rating rating-tbl-hdr-rating">
                                                <p class="rate-value">4.66</p>
                                                <p class="item-rating">
                                                    <i class="item-rate-star fas fa-star pl-0 active"></i>
                                                    <i class="item-rate-star fas fa-star pl-0 active"></i>
                                                    <i class="item-rate-star fas fa-star pl-0 active"></i>
                                                    <i class="item-rate-star fas fa-star pl-0"></i>
                                                    <i class="item-rate-star fas fa-star pl-0"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="rating-tbl-col-rating rating-tbl-info-rating">
                                                <p>حسب تقييم 1234 شخص</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-cell-info col-cell-info-2 row">
                                        <div class="rating-progress-div col-12">
                                            <div class="rating-progress">
                                                <div class="progress progress-item">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="progress-item-details">5</div>
                                                <div class="progress-item-details-count">123</div>
                                            </div>
                                            <div class="rating-progress">
                                                <div class="progress progress-item">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="progress-item-details">4</div>
                                                <div class="progress-item-details-count">123</div>
                                            </div>
                                            <div class="rating-progress">
                                                <div class="progress progress-item">
                                                    <div class="progress-bar" role="progressbar" style="width: 47%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="progress-item-details">3</div>
                                                <div class="progress-item-details-count">123</div>
                                            </div>
                                            <div class="rating-progress">
                                                <div class="progress progress-item">
                                                    <div class="progress-bar" role="progressbar" style="width: 40%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="progress-item-details">2</div>
                                                <div class="progress-item-details-count">123</div>
                                            </div>
                                            <div class="rating-progress">
                                                <div class="progress progress-item">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="progress-item-details">1</div>
                                                <div class="progress-item-details-count">123</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-info-div-2">
                            <div class="hdr">
                                <label class="btn title-rating-comments">تقييم 35 عميل</label>
                            </div>
                            <div class="comment-div">
                                <div class="comment-body">
                                    <div class="comment-head">
                                        <p class="item-rating">
                                            <i class="item-rate-star fas fa-star pl-0 active"></i>
                                            <i class="item-rate-star fas fa-star pl-0 active"></i>
                                            <i class="item-rate-star fas fa-star pl-0 active"></i>
                                            <i class="item-rate-star fas fa-star pl-0"></i>
                                            <i class="item-rate-star fas fa-star pl-0"></i>
                                            <span class="rating-value">5.0</span>
                                        </p>
                                        <label class="rate-comment-date2">12-3-2019</label>
                                        <!-- <label class="rate-comment-date">12-3-2019</label> -->
                                    </div>
                                    <div class="comment-content row">
                                        <div class="col-lg-2">
                                            <label class="rate-comment-username"><b>asd.com</b></label>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="comment-text">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
                                                    temporibus, pariatur facilis,
                                                    saepe ducimus quaerat velit magnam culpa, minus quae dicta!
                                                    Dolorem hic, quia in voluptatem
                                                    repellendus iusto eius similique?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-div">
                                <div class="comment-body">
                                    <div class="comment-head">
                                        <p class="item-rating">
                                            <i class="item-rate-star fas fa-star pl-0 active"></i>
                                            <i class="item-rate-star fas fa-star pl-0 active"></i>
                                            <i class="item-rate-star fas fa-star pl-0 active"></i>
                                            <i class="item-rate-star fas fa-star pl-0"></i>
                                            <i class="item-rate-star fas fa-star pl-0"></i>
                                            <span class="rating-value">5.0</span>
                                        </p>
                                        <label class="rate-comment-date2">12-3-2019</label>
                                        <!-- <label class="rate-comment-date">12-3-2019</label> -->
                                    </div>
                                    x <div class="comment-content row">
                                        <div class="col-lg-2">
                                            <label class="rate-comment-username"><b>asd.com</b></label>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="comment-text">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
                                                    temporibus, pariatur facilis,
                                                    saepe ducimus quaerat velit magnam culpa, minus quae dicta!
                                                    Dolorem hic, quia in voluptatem
                                                    repellendus iusto eius similique?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@stop

@section('scripts')
<script>

    $(document).ready(function(){
// show html form when 'update product' button was clicked
console.log(sessionStorage.getItem('tokenname')); 
// product ID will be here
const idservice=localStorage.getItem("storageName");
console.log(idservice)
$.ajax({
  url: "http://localhost/code-art/public/api/service-category/service-provider?service_category_id="+idservice,
  type: 'GET',
  // Fetch the stored token from localStorage and set in the header
  headers: {"Authorization":"Bearer "+sessionStorage.getItem('tokenname')},
  success: function(response){
                     console.log(sessionStorage.getItem('tokenname')); 
                   console.log(response.data)
                    
                 },
});
// let xhr4 = new XMLHttpRequest;
//      //Call the open function, GET-type of request, url, true-asynchronous
//      let url ="http://localhost/code-art/public/api/service-category/service-provider?service_category_id="+idservice
//      console.log(url)
//      xhr4.setRequestHeader(token,)
//      xhr4.open('GET', url, true)
//      //call the onload
//      xhr4.onload = function()
//      {
//         var attr="";
//         //check if the status is 200(means everything is okay)
//         if (this.status === 200)
//             {
//              console.log(JSON.parse(this.responseText));
     
//                 var obj=JSON.parse(this.responseText);
//              //  alert(obj[1].name);
//                 //return server response as an object with JSON.parse
     
//      for(var x=0;x<obj.data.length;x++)
//      {
    
    
//      }
        
   
     
     
//      }
//             }
//      //call send
     
     
//      xhr4.send();
     //Common Types of HTTP Statuses
     // 200: OK
     // 404: ERROR
     // 403: FORBIDDEN
    });
      </script>
@stop