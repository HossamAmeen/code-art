@extends('layout')
@section('content')

<section>
    <div class="container-fluid">
        <div class="section-row new-categoriesOfServices">
            <div class="section-hdr">
                <h3 class="section-hdr-txt"><b> </b></h3>
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
        </div>
    </div>
</section>
<section>
    <div class="service-page">
        <div class="container-fluid">
            <div class="row" id="servicecat">
               
              
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

<script>

    $(document).ready(function(){
// show html form when 'update product' button was clicked
console.log(sessionStorage.getItem('tokenname')); 
// product ID will be here
const service=localStorage.getItem("serviceid");
console.log(service)
$.ajax({
  url: "http://localhost/code-art/public/api/services?category_id="+service,
  type: 'GET',
  // Fetch the stored token from localStorage and set in the header
  headers: {"Authorization":"Bearer "+sessionStorage.getItem('tokenname')},
  success: function(response){
                     console.log(sessionStorage.getItem('tokenname')); 
                   console.log(response)
                   var obj=response;
                 
                   var attr="";
                   for(var i=0;i<obj.data.length;i++)
                   {
                        attr+=' <div class="col-lg-4 col-md-4 col-sm-6 service-page-item-col"><div class="service-page-item-div">';
                        attr+=' <a class="service-page-item-href-div" href="{{ url('details') }}"><div class="service-page-item service-page-item-2">';
                        attr+='<img src="../public/imgs/services-item-2.png" /><div class="item-info"><p class="item-name" ><b>'+obj.data[i].name+'</b> </p></div></div></a></div></div>';
                   }
                   $("#servicecat").append(attr);
                 },
});

    });
      </script>
@stop