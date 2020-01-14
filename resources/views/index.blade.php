@extends('layout')
@section('content')

<section>
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="10000">
            <ol class="carousel-indicators" id="slidermain">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
            </ol>
            <div class="carousel-inner" id="slider">
                  
                <div class="carousel-item active">
                    <img src="{{asset('../public/imgs/carouselImg.png')}}" class="d-block w-100" alt="..." />
                    <div class="carousel-caption carousel-caption-l d-md-block">
                        <h1>
                            <span class="carousel-info-hdr-l"><b> كودآرت</b></span>
                        </h1>
                        <div class="carousel-info-l">
                            <p>كل ما هو جديد في عالم التصميم</p>
                        </div>
                        <a class="carousel-link-l">اطلب الآن <i class="fas fa-arrow-left pr-2"></i></a>
                    </div>
                    <div class="carousel-caption carousel-caption-r d-md-block">
                        <h1>
                            <span class="carousel-info-hdr-r"><b> عرض خاص</b></span>
                        </h1>
                        <div class="carousel-info-r">
                            <p>
                                خصم <span class="carousel-info-r-offer">30% </span> على كل
                                خدمة
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('../public/imgs/carouselImg.png')}}" class="d-block w-100" alt="..." />
                    <div class="carousel-caption carousel-caption-l d-md-block">
                        <h1>
                            <span class="carousel-info-hdr-l"><b> كودآرت</b></span>
                        </h1>
                        <div class="carousel-info-l">
                            <p>كل ما هو جديد في عالم التصميم</p>
                        </div>
                        <a class="carousel-link-l">اطلب الآن <i class="fas fa-arrow-left pr-2"></i></a>
                    </div>
                    <div class="carousel-caption carousel-caption-r d-md-block">
                        <h1>
                            <span class="carousel-info-hdr-r"><b> عرض خاص</b></span>
                        </h1>
                        <div class="carousel-info-r">
                            <p>
                                خصم <span class="carousel-info-r-offer">30% </span> على كل
                                خدمة
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="section-row special-services">
            <div class="section-hdr">
                <h3 class="section-hdr-txt"><b>خدمات مميزه</b></h3>
                <svg class="section-hdr-underline" height="40" width="300">
                    <g fill="none">
                        <path stroke="blue" class="underline-1" d="M0 1 l140 0" />
                        <path stroke="red" class="underline-2" d="M0 7 l120 0" />
                        <path stroke="orange" class="underline-3" d="M0 14 l100 0" />
                        <path stroke="green" class="underline-4" d="M0 21 l80 0" />
                        <path stroke="yellow" class="underline-5" d="M0 28 l60 0" />
                        <path stroke="purple" class="underline-6" d="M0 35 l40 0" />
                    </g>
                </svg>
            </div>
            <div class="row" id="specialservice">
           
                {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 services-item-col-div">
                    <div class="services-item-col">
                        <div class="services-item">
                            <div class="services-item-header">
                                <div class="on-item-option" onclick="addToFav(1)" data-toggle="popover"
                                    data-trigger="hover" data-placement="left" data-content="اضف الى قائمة المفضلة">
                                    <i class="far fa-heart fav-icon"></i>
                                </div>
                                <a href="service-details.html">
                                    <img src="./assets/imgs/services-item-2.png" alt="" width="100%;" />
                                </a>
                            </div>
                            <div class="services-item-info">
                                <a href="service-details.html">
                                    <span class="item-name">تصميم مواقع</span>
                                </a>

                                <div class="item-details">
                                    <span>تصميم مواقع بطريقة محترفة ومتميزة</span>
                                    <br /><br />
                                    <a href="serviceProfile_User.html">
                                        <span class="services-provider">مقدم الخدمة: اسامة عسكر</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="services-item-footer">
                            <a href="service-details.html" class="btn services-item-btn">اطلب الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 services-item-col-div">
                    <div class="services-item-col">
                        <div class="services-item">
                            <div class="services-item-header">
                                <div class="on-item-option" onclick="addToFav(1)" data-toggle="popover"
                                    data-trigger="hover" data-placement="left" data-content="اضف الى قائمة المفضلة">
                                    <i class="far fa-heart fav-icon"></i>
                                </div>
                                <a href="service-details.html">
                                    <img src="./assets/imgs/services-item-2.png" alt="" width="100%;" />
                                </a>
                            </div>
                            <div class="services-item-info">
                                <a href="service-details.html">
                                    <span class="item-name">تصميم مواقع</span>
                                </a>

                                <div class="item-details">
                                    <span>تصميم مواقع بطريقة محترفة ومتميزة</span>
                                    <br /><br />
                                    <a href="serviceProfile_User.html">
                                        <span class="services-provider">مقدم الخدمة: اسامة عسكر</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="services-item-footer">
                            <a href="service-details.html" class="btn services-item-btn">اطلب الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 services-item-col-div">
                    <div class="services-item-col">
                        <div class="services-item">
                            <div class="services-item-header">
                                <div class="on-item-option" onclick="addToFav(1)" data-toggle="popover"
                                    data-trigger="hover" data-placement="left" data-content="اضف الى قائمة المفضلة">
                                    <i class="far fa-heart fav-icon"></i>
                                </div>
                                <a href="service-details.html">
                                    <img src="./assets/imgs/services-item-2.png" alt="" width="100%;" />
                                </a>
                            </div>
                            <div class="services-item-info">
                                <a href="service-details.html">
                                    <span class="item-name">تصميم مواقع</span>
                                </a>

                                <div class="item-details">
                                    <span>تصميم مواقع بطريقة محترفة ومتميزة</span>
                                    <br /><br />
                                    <a href="serviceProfile_User.html">
                                        <span class="services-provider">مقدم الخدمة: اسامة عسكر</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="services-item-footer">
                            <a href="service-details.html" class="btn services-item-btn">اطلب الآن</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<section>
    <div class="offer-row-container">
        <div class="container-fluid offer-row">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="offer-row-col">
                        <p class="offer-row-hdr">
                            خصومات كبيرة ومميزه لطلبك خدمتين أو اكثر
                        </p>
                        <p class="offer-percent">20%</p>
                        <button class="btn offer-btn">
                            اطلب الآن <i class="fas fa-arrow-left pr-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="section-row new-services">
            <div class="section-hdr">
                <h3 class="section-hdr-txt"><b>   الاكثر طلبا</b></h3>
                <svg class="section-hdr-underline" height="40" width="300">
                    <g fill="none">
                        <path stroke="blue" class="underline-1" d="M0 1 l140 0" />
                        <path stroke="red" class="underline-2" d="M0 7 l120 0" />
                        <path stroke="orange" class="underline-3" d="M0 14 l100 0" />
                        <path stroke="green" class="underline-4" d="M0 21 l80 0" />
                        <path stroke="yellow" class="underline-5" d="M0 28 l60 0" />
                        <path stroke="purple" class="underline-6" d="M0 35 l40 0" />
                    </g>
                </svg>
            </div>
            <div class="row" id="bestseller">
                <div class="col-lg-6 col-md-6 col-sm-6 new-serivces-item-col-row ">
                    <div class="new-serivces-item-col new-serivces-item-col-r-1">
                        <a href="service-details.html">
                            <div class="new-services-item new-serivces-item-1 row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <p class="new-services-item-hdr">تصميم مواقع</p>
                                    <p class="new-services-item-info">تصميم مواقع بطريقة محترفة ومتميزة</p>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <img width="70%" src="./assets/imgs/services-item-2.png" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-6 col-sm-6 new-serivces-item-col-row ">
                    <div class="new-serivces-item-col new-serivces-item-col-l-2">
                        <a href="service-details.html">
                            <div class="new-services-item new-serivces-item-2 row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <p class="new-services-item-hdr">تصميم مواقع</p>
                                    <p class="new-services-item-info">تصميم مواقع بطريقة محترفة ومتميزة</p>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <img width="70%" src="./assets/imgs/services-item-2.png" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 new-serivces-item-col-row ">
                    <div class="new-serivces-item-col new-serivces-item-col-r-1">
                        <a href="service-details.html">
                            <div class="new-services-item new-serivces-item-3 row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <p class="new-services-item-hdr">تصميم مواقع</p>
                                    <p class="new-services-item-info">تصميم مواقع بطريقة محترفة ومتميزة</p>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <img width="70%" src="./assets/imgs/services-item-2.png" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 new-serivces-item-col-row ">
                    <div class="new-serivces-item-col new-serivces-item-col-l-2">
                        <a href="service-details.html">
                            <div class="new-services-item new-serivces-item-4 row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <p class="new-services-item-hdr">تصميم مواقع</p>
                                    <p class="new-services-item-info">تصميم مواقع بطريقة محترفة ومتميزة</p>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <img width="70%" src="./assets/imgs/services-item-2.png" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<section>
    <div class="offer-row-container">
        <div class="container-fluid offer-row">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="offer-row-col">
                        <p class="offer-row-hdr">
                            خصومات كبيرة ومميزه لطلبك خدمتين أو اكثر
                        </p>
                        <p class="offer-percent">20%</p>
                        <button class="btn offer-btn">
                            اطلب الآن <i class="fas fa-arrow-left pr-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    @stop

    @section('scripts')
 {{-- Slider
<script type="text/javascript">
    //Create the XHR Object
 let xhr3 = new XMLHttpRequest;
 //Call the open function, GET-type of request, url, true-asynchronous
 xhr3.open('GET', "http://localhost/code-art/public/api/sliders", true)
 //call the onload
 xhr3.onload = function()
 {
    var attr="";
    var attr1="";
    //check if the status is 200(means everything is okay)
    if (this.status === 200)
        {
         console.log(JSON.parse(this.responseText));
 
            var obj=JSON.parse(this.responseText);
         //  alert(obj[1].name);
            //return server response as an object with JSON.parse
 
 for(var x=0;x<obj.data.length;x++)
 {
//   if(x==0)
//  { attr+='<li data-target="#carouselExampleCaptions" data-slide-to="'+obj.data[x].id+'" class="active"></li>'}
// else
// {
    attr+='<li data-target="#carouselExampleCaptions" data-slide-to="'+obj.data[x].id+'" class=""></li>'
// }

 }
    
  $("#slidermain").append(attr);
 
  for(var i=0;i<obj.data.length;i++)
  {
      var img="localhost/code-art/public/"+obj.data[i].image;
    // if(i==0)
    //  { attr1+='<div class="carousel-item active"><img src="{{asset('+img+')}}" class="d-block w-100" alt="..." />';
    //     attr1+='<div class="carousel-caption carousel-caption-l d-md-block"> <h1><span class="carousel-info-hdr-l"><b> كودآرت</b></span>';
    //     attr1+='</h1><div class="carousel-info-l"> <p>كل ما هو جديد في عالم التصميم</p></div>';
    //     attr1+='<a class="carousel-link-l">اطلب الآن <i class="fas fa-arrow-left pr-2"></i></a> </div>';
    //     attr1+='<div class="carousel-caption carousel-caption-r d-md-block"> <h1><span class="carousel-info-hdr-r"><b> عرض خاص</b></span></h1>';
    //     attr1+='<div class="carousel-info-r"><p>  خصم  <span class="carousel-info-r-offer">30% </span> على كل       خدمة </p>';
    //     attr1+=' </div> </div> </div>'
        
    //     }
    //     else
    //     {
            attr1+='<div class="carousel-item "><img src="'+img+'" class="d-block w-100" alt="..." />';
        attr1+='<div class="carousel-caption carousel-caption-l d-md-block"> <h1><span class="carousel-info-hdr-l"><b> كودآرت</b></span>';
        attr1+='</h1><div class="carousel-info-l"> <p>كل ما هو جديد في عالم التصميم</p></div>';
        attr1+='<a class="carousel-link-l">اطلب الآن <i class="fas fa-arrow-left pr-2"></i></a> </div>';
        attr1+='<div class="carousel-caption carousel-caption-r d-md-block"> <h1><span class="carousel-info-hdr-r"><b> عرض خاص</b></span></h1>';
        attr1+='<div class="carousel-info-r"><p>  خصم  <span class="carousel-info-r-offer">30% </span> على كل       خدمة </p>';
        attr1+=' </div> </div> </div>'
        // }

  }
  $("#slider").append(attr1);
 }
        }
 //call send
 
 
 xhr3.send();
 //Common Types of HTTP Statuses
 // 200: OK
 // 404: ERROR
 // 403: FORBIDDEN
 
 </script> --}}


{{--  Special services --}}
    <script type="text/javascript">
        //Create the XHR Object
     let xhr = new XMLHttpRequest;
     //Call the open function, GET-type of request, url, true-asynchronous
     xhr.open('GET', "http://localhost/code-art/public/api/special/services", true)
     //call the onload
     xhr.onload = function()
     {
        var attr="";
        //check if the status is 200(means everything is okay)
        if (this.status === 200)
            {
             console.log(JSON.parse(this.responseText));
     
                var obj=JSON.parse(this.responseText);
             //  alert(obj[1].name);
                //return server response as an object with JSON.parse
     
     for(var x=0;x<obj.data.length;x++)
     {
       attr+=' <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 services-item-col-div">';
        attr+= '<div class="services-item-col"> <div class="services-item"><div class="services-item-header">';
     attr+= ' <div class="on-item-option" onclick="addToFav(1)" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="اضف الى قائمة المفضلة">';
     attr+= '<i class="far fa-heart fav-icon"></i> </div> <a class="order_button" href="{{ url('details') }}" data-id='+obj.data[x].id+'>';
        attr+= ' <img src="http://localhost/code-art/public/'+obj.data[x].image+'" alt="" width="100%;" /> </a> </div>';
        attr+= '  <div class="services-item-info"><a class="order_button" href="{{ url('details') }}" data-id='+obj.data[x].id+'> <span class="item-name">'+obj.data[x].name+' </span> </a>';
      attr+= '<div class="item-details"><span>تصميم مواقع بطريقة محترفة ومتميزة</span> <br /><br />';
     attr+= ' <a href="serviceProfile_User.html"> <span class="services-provider">مقدم الخدمة: اسامة عسكر</span> </a>';
     attr+= ' </div>  </div> </div> <div class="services-item-footer">';
     attr+= ' <a href="{{ url('details') }}"  class="btn services-item-btn order_button" data-id='+obj.data[x].id+'>اطلب الآن</a>  </div> </div>  </div>';
     

    
     }
        
      $("#specialservice").append(attr);
     
     
     }
            }
     //call send
     
     
     xhr.send();
     //Common Types of HTTP Statuses
     // 200: OK
     // 404: ERROR
     // 403: FORBIDDEN
     
     </script>


{{-- order --}}


<script>
    $(document).ready(function(){
      $(document).on('click', '.order_button', function(){
   // product id will be here
   var service_id = $(this).attr('data-id');
   
   localStorage.setItem("storageName",service_id);
   
   
      });
    });
   
   </script>
    @stop