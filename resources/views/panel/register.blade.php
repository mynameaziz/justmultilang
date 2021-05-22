
<!DOCTYPE html>
<html lang="{{App::currentLocale()}}" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="@lang('desc')">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="{{asset('passets/images/favicon.png')}}">
	<!-- Site Title  -->
	<title>Maobit User Center</title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="{{asset('passets/css/vendor.bundle.css?ver=101')}}">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{asset('passets/css/style.css?ver=101')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
</head>

<body class="user-ath">
    @if (App::isLocale('tr'))
        @if (session('empty'))
            <script>swal("Hata", "İsim, mail yada şifre boş bırakılamaz!")</script>
        @elseif (session('mail'))
            <script>swal("Hata", "Belirttiğiniz mail adresi zaten kullanılıyor!")</script>
        @elseif (session('sifre'))
            <script>swal("Hata", "Şifre 6 karakterden az olamaz!")</script>
        @elseif (session('repeat'))
            <script>swal("Hata", "Girdiğiniz şifreler birbiri ile uyuşmuyor.")</script>
        @elseif (session('term'))
            <script>swal("Hata", "Şartlar ve politikaları kabul etmek zorundasınız!")</script>
        @elseif (session('registered'))
            <script>swal("Kayıt Başarılı", "Başarılı bir şekilde kayıt oldunuz, hesap bilgileriniz mail adresinize gönderildi. Lütfen mail adresinizi onaylamayı unutmayın", "success")</script>
        @endif
    @else
        @if (session('empty'))
            <script>swal("Hata", "Name, mail or password cannot be left blank!")</script>
        @elseif (session('mail'))
            <script>swal("Hata", "The e-mail address you specified is already in use!")</script>
        @elseif (session('sifre'))
            <script>swal("Hata", "Password cannot be less than 6 characters!")</script>
        @elseif (session('repeat'))
            <script>swal("Hata", "The passwords you entered do not match!")</script>
        @elseif (session('term'))
            <script>swal("Hata", "You have to accept the terms and policies!")</script>
        @elseif (session('registered'))
            <script>swal("Kayıt Başarılı", "You have successfully registered, your account information has been sent to your e-mail address. Please don't forget to confirm your e-mail address.", "success")</script>
        @endif
    @endif
   <div class="user-ath-page">
       <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 text-center">
                    <div class="user-ath-logo">
                        <a href="#">
                            <img src="{{asset('passets/images/logo-sm.png')}}"  srcset="{{asset('passets/images/logo-sm2x.png')}} 2x" alt="icon">
                        </a>
                    </div>
                    <div class="user-ath-box">
                        <h4>@lang('panel.rtitle')</h4>
                        <form method="POST" action="{{route('panel.register')}}" class="user-ath-form">
                            @csrf
                            <div class="input-item">
                                <input type="text" name="name" placeholder="@lang('panel.rname')" class="input-bordered">
                            </div>
                            <div class="input-item">
                                <input type="email" name="mail" placeholder="@lang('panel.email')" class="input-bordered">
                            </div>
                            <div class="input-item">
                                <input type="password" name="password" placeholder="@lang('panel.password')" class="input-bordered">
                            </div>
                            <div class="input-item">
                                <input type="password" name="repeat" placeholder="@lang('panel.prepeat')" class="input-bordered">
                            </div>
                            <div class="input-item">
                                <input type="text" name="referance" placeholder="@lang('panel.referance')" class="input-bordered">
                            </div>
                            <div class="input-item text-left">
                                <input class="input-checkbox" name="terms" value="on" id="term-condition" type="checkbox">
                                <label for="term-condition">@lang('panel.kabul') <a href="#">@lang('panel.terms')</a></label>
                            </div>
                            <div class="gaps"></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary">@lang('panel.register')</button>
                            </div>
                        </form>
                    </div>
                    <div class="gaps-2x"></div>
                    <div class="form-note">
                        @lang('panel.amember') <a href="{{route('panel.giris', App::currentLocale())}}">@lang('panel.login')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
	<!-- JavaScript (include all script here) -->
	<script src="{{asset('passets/js/jquery.bundle.js?ver=101')}}"></script>
	<script src="{{asset('passets/js/script.js?ver=101')}}"></script>
</body>
</html>
