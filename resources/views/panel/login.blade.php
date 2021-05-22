
<!DOCTYPE html>
<html lang="{{App::currentLocale()}}" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="ICO Crypto is a modern and elegant landing page, created for ICO Agencies and digital crypto currency investment website.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="{{asset('passets/images/favicon.png')}}">
	<!-- Site Title  -->
	<title>User Center - ICO Crypto</title>
	<!-- Vendor Bundle CSS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="{{asset('passets/css/vendor.bundle.css?ver=101')}}">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{asset('passets/css/style.css?ver=101')}}">
	
</head>

<body class="user-ath">
    @if (session('giris'))
        @if (App::isLocale('tr'))
            <script>swal("Hata", "Panele erişebilmek için giriş yapmalısınız!")</script>
        @else
            <script>swal("Error", "You must be logged in to access the panel!")</script>
        @endif
    @endif
    @if (session('logout'))
        @if (App::isLocale('tr'))
            <script>swal("Çıkış Başarılı", "Başarılı bir şekilde çıkış yaptın!")</script>
        @else
            <script>swal("Logout Success", "You have successfully logout!")</script>
        @endif
    @endif
   <div class="user-ath-page">
       <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8  text-center">
                    <div class="user-ath-logo">
                        <a href="#">
                            <img src="{{asset('passets/images/logo-sm.png')}}"  srcset="{{asset('passets/images/logo-sm2x.png')}} 2x" alt="icon">
                        </a>
                    </div>
                    <div class="user-ath-box">
                        <h4>@lang('panel.ltitle')</h4>
                        @if (session('hata'))
                            @if (App::isLocale('tr'))
                                <div class="alert alert-danger">E-posta yada şifre hatalı!</div>
                            @else
                                <div class="alert alert-danger">E-mail or password is incorrect!</div>
                            @endif
                        @endif
                        <form action="{{route('panel.login')}}" method="POST" class="user-ath-form">
                            @csrf
                            <div class="input-item">
                                <input type="text" name="mail" value="{{old('mail')}}" placeholder="@lang('panel.email')" class="input-bordered">
                            </div>
                            <div class="input-item">
                                <input type="password" name="password" placeholder="@lang('panel.password')" class="input-bordered">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-primary" type="submit">@lang('panel.login')</button>
                                <a href="recovery.html" class="simple-link">@lang('panel.forgot')</a>
                            </div>
                        </form>
                    </div>
                    <div class="gaps-2x"></div>
                    <div class="form-note">
                        @lang('panel.notmember') <a href="{{route('panel.kayit', App::currentLocale())}}">@lang('panel.register')</a>
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
