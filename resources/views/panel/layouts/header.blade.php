
<!DOCTYPE html>
<html lang="{{App::currentLocale()}}" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Ömer Can">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="@lang('main.desc')">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="{{asset('passets/images/favicon.png')}}">
	<!-- Site Title  -->
	<title>@if (Request::segment(3) == null) {{ucfirst(Request::segment(2))}} @else {{ucfirst(Request::segment(3))}} @endif - MaoBit</title>
	<!-- Vendor Bundle CSS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="{{asset('passets/css/vendor.bundle.css?ver=101')}}">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{asset('passets/css/style.css?ver=101')}}">
	
</head>
<div class="topbar">
    <div class="topbar-md d-lg-none">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="toggle-nav">
                    <div class="toggle-icon">
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                        <span class="toggle-line"></span>
                    </div>
                </a><!-- .toggle-nav -->

                <div class="site-logo">
                    <a href="index.html" class="site-brand">
                        <img src="{{asset('passets/images/logo.png')}}" alt="logo" srcset="{{asset('passets/images/logo2x.png')}} 2x">
                    </a>
                </div><!-- .site-logo -->
                
                <div class="dropdown topbar-action-item topbar-action-user">
                    <a href="#" data-toggle="dropdown"> <img class="icon" src="{{asset('passets/images/user-thumb-sm.png')}}" alt="thumb"> </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="user-dropdown">
                            <div class="user-dropdown-head">
                                <h6 class="user-dropdown-name">{{Auth::user()->name}} <span>({{Auth::user()->wallet_code}})</span></h6>
                                <span class="user-dropdown-email">{{Auth::user()->email}}</span>
                            </div>
                            <div class="user-dropdown-balance">
                                <h6>MAO @lang('panel.balance')</h6>
                                <h3>{{Auth::user()->wallet}} MAO</h3>
                            </div>
                            <ul class="user-dropdown-btns btn-grp guttar-10px">
                                @if (Auth::user()->email_verified_at == null)
                                    <li><a href="#" class="btn btn-xs btn-warning">@lang('panel.conmail')</a></li>
                                @endif
                                @if (Auth::user()->kyv == 0)
                                    <li><a href="{{route('panel.kyc', App::currentLocale())}}" class="btn btn-xs btn-warning">@lang('panel.kycdogru')</a></li>
                                @endif
                            </ul>
                            <div class="gaps-1x"></div>
                            <ul class="user-dropdown-links">
                                <li><a href="account.html"><i class="ti ti-id-badge"></i>@lang('panel.profile')</a></li>
                                <li><a href="security.html"><i class="ti ti-lock"></i>@lang('panel.security')</a></li>
                                <li><a href="activity.html"><i class="ti ti-control-shuffle"></i>@lang('panel.trans')</a></li>
                            </ul>
                            <ul class="user-dropdown-links">
                                <form action="{{route('panel.logout')}}" method="POST">
                                    @csrf
                                        <li>
                                            <button type="submit" style="color: #6783b8;
                                            font-size: 15px;
                                            padding: 4px 20px;
                                            border: none;
                                            background: transparent"><i class="ti ti-power-off" style="width: 30px;
                                            display: inline-block;"></i>@lang('panel.logout')</button>
                                        </li>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .toggle-action -->
            </div><!-- .container -->
        </div><!-- .container -->
    </div><!-- .topbar-md -->
    <div class="container">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="topbar-lg d-none d-lg-block">
                <div class="site-logo">
                    <a href="index.html" class="site-brand">
                        <img src="{{asset('passets/images/logo.png')}}" alt="logo" srcset="{{asset('passets/images/logo2x.png')}} 2x">
                    </a>
                </div><!-- .site-logo -->
            </div><!-- .topbar-lg -->

            <div class="topbar-action d-none d-lg-block">
                <ul class="topbar-action-list">
                    <li class="dropdown topbar-action-item topbar-action-language">
                        @if (Auth::user()->type == 1)
                            <a href="#" data-toggle="dropdown"> Yönetici Menü <em class="ti ti-angle-down"></em> </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Token Ayarları</a></li>
                                <li><a href="#">Tüm Üyeler</a></li>
                                <?php
                                    $kyc = \App\Models\kyc_app::where('status', 0)->get();
                                ?>
                                <li><a href="#">KYC Başvurular ({{count($kyc)}})</a></li>
                            </ul>
                        @endif

                    </li><!-- .topbar-action-item -->
                    <li class="dropdown topbar-action-item topbar-action-language">
                        @if (App::isLocale('tr'))
                            <a href="#" data-toggle="dropdown"> TR <em class="ti ti-angle-down"></em> </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('panel.home', 'en')}}">EN</a></li>
                            </ul>
                        @else
                            <a href="#" data-toggle="dropdown"> EN <em class="ti ti-angle-down"></em> </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('panel.home', 'tr')}}">TR</a></li>
                            </ul>
                        @endif

                    </li><!-- .topbar-action-item -->

                    <li class="dropdown topbar-action-item topbar-action-user">
                        <a href="#" data-toggle="dropdown"> <img class="icon" src="{{asset('passets/images/user-thumb-sm.png')}}" alt="thumb"> </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="user-dropdown">
                                <div class="user-dropdown-head">
                                    <h6 class="user-dropdown-name">{{Auth::user()->name}} <span>({{Auth::user()->wallet_code}})</span></h6>
                                    <span class="user-dropdown-email">{{Auth::user()->email}}</span>
                                </div>
                                <div class="user-dropdown-balance">
                                    <h6>MAO @lang('panel.balance')</h6>
                                    <h3>{{Auth::user()->wallet}} MAO</h3>
                                </div>
                                <ul class="user-dropdown-links">
                                    <li><a href="account.html"><i class="ti ti-id-badge"></i>@lang('panel.profile')</a></li>
                                    <li><a href="security.html"><i class="ti ti-lock"></i>@lang('panel.security')</a></li>
                                    <li><a href="activity.html"><i class="ti ti-eye"></i>@lang('panel.trans')</a></li>
                                </ul>
                                <ul class="user-dropdown-links">
                                    <form action="{{route('panel.logout')}}" method="POST">
                                    @csrf
                                        <li>
                                            <button type="submit" style="color: #6783b8;
                                            font-size: 15px;
                                            padding: 4px 20px;
                                            border: none;
                                            background: transparent"><i class="ti ti-power-off" style="width: 30px;
                                            display: inline-block;"></i>@lang('panel.logout')</button>
                                        </li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .topbar-action-item -->
                </ul><!-- .topbar-action-list -->
            </div><!-- .topbar-action -->
        </div><!-- .d-flex -->
    </div><!-- .container -->
</div>
<!-- TopBar End -->