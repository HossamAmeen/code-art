@extends('layoutlogin')
@section('contentlogin')

<section>
    <div class="section-login">
        <div class="login">
            <div class="container-fluid">
                <div class="">
                    <div class="login-div">
                        <div class="login-div-body">
                            <div class="item">
                                <span class="login-hdr">تسجيل الدخول
                                    <br><br>
                                </span>
                                <div class="data-cell">
                                    <form class="needs-validation"  >
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="data-cell">
                                                    <div class="form-group">
                                                        <label for="name-form" class="data-cell-label-title">البريد
                                                            الالكتروني</label>
                                                        <input type="email" class="form-control txtBox-name"
                                                            id="name-form" value="" required>
                                                        <div class="invalid-feedback invalid-lbl">البريد الالكتروني
                                                            مطلوب</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="data-cell">
                                                    <div class="form-group">
                                                        <label for="phone-form" class="data-cell-label-title">كلمة
                                                            المرور</label>
                                                        <input type="password" class="form-control txtBox-name"
                                                            id="phone-form" value="" required>
                                                        <div class="invalid-feedback invalid-lbl"> كلمة المرور
                                                            مطلوبة</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="data-cell">
                                                        <label class="forgetPass">هل نسيت كلمة المرور ؟</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="btn-submit-div">
                                                        <button class="btn btn-primary btn-submit" id="submit" type="button">سجل
                                                            الدخول ك مستخدم</button>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="btn-submit-div">
                                                        <button class="btn btn-secondary btn-submit" type="button"
                                                            onclick="window.location.replace('user-profile.html')">سجل
                                                            الدخول ك مقدم خدمة</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="data-cell mt-50">
                                                        <label>ليس لديك حساب؟ <a href="signup.html"><label
                                                                    class="newAccount">سجل الآن</label></a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="data-cell newAccount-options">
                                                        <p>or</p>
                                                        <div class="col-12 newAccount-icon-div">
                                                            <a><img src="assets/imgs/facebookicon.png"></a>
                                                            <a><img src="assets/imgs/googleicon.png"></a>
                                                            <a><img src="assets/imgs/twittericon.png" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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


@section('scriptlogin')
{{-- <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script> --}}

<script>
    $(document).ready(function(){
         $('#submit').click(function(){

          


             var $username = $('#name-form').val();
             var $password = $('#phone-form').val();
            // alert($username +$password);
            $.ajax({
                 url: 'http://localhost/code-art/public/api/client/login',
                 type: 'POST',
                // headers: {"Authorization" : "Bearer "+response.data},
                 data: {email:$username,password:$password},
                         
       

                 success: function(response){
                     console.log(response); 
                   
                     var token=response.token;
                       //alert(token);
                       sessionStorage.setItem("tokenname",token);
                       console.log(sessionStorage.getItem('tokenname')); 

                     
                       window.location="{{ url('index') }}";
                    
                 },
                 
                 error: function(xhr, resp, text) {
                  console.log("error")
                     window.location="login";
        }
        //beforeSend: function(xhr, settings) { xhr.setRequestHeader('Authorization','Bearer ' + token); 
       // alert("token");
        //}             
                 
                               });
             
                   
//                                $.ajax({
//   url:  "http://localhost/code-art/public/api/client/login",
//   type: 'GET',
//   // Fetch the stored token from localStorage and set in the header
//   headers: {"Authorization": sessionStorage.getItem('tokenname')},
//   success: function(response){
//                      console.log(sessionStorage.getItem('tokenname')); 
                   
                    
//                  },
// });
                
         });
     });
 </script>
@stop