<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="@lang('home.desc')">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="images/favicon.png">
<!-- Site Title  -->
<title> @lang('home.title') </title>
<!-- Bundle and Base CSS -->
<link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=192">
<link rel="stylesheet" href="assets/css/style-lavender.css?ver=192" id="changeTheme">
<!-- Extra CSS -->
<link rel="stylesheet" href="assets/css/theme.css?ver=192">

</head>
    <body class="nk-body body-wider mode-onepage">

<body class="nk-body body-wider mode-onepage">
    <div class="nk-wrap">
        <header class="nk-header page-header is-transparent is-sticky is-shrink" id="header">
            <!-- Header @s -->
            <div class="header-main">
                <div class="header-container container">
                    <div class="header-wrap">
                        <!-- Logo @s -->
                        <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".65">
                            <a href="./" class="logo-link">
                                <img class="logo-dark" src="images/logo.png" srcset="images/logo2x.png 2x" alt="logo">
                                <img class="logo-light" src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo">
                            </a>
                        </div>
                        <!-- Menu Toogle @s -->
                        <div class="header-nav-toggle">
                            <a href="#" class="navbar-toggle" data-menu-toggle="example-menu-04">
                                <div class="toggle-line">
                                    <span></span>
                                </div>
                            </a>
                        </div>
                        <!-- Menu @s -->
                        <div class="header-navbar header-navbar-s3">
                            <nav class="header-menu justify-content-between" id="example-menu-04">
                                <ul class="menu menu-s2 animated" data-animate="fadeInDown" data-delay=".75">
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{url('/')}}">@lang('home.home')</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="#about">@lang('home.about')</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="#why">@lang('home.which')</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="#token">@lang('home.coin')</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="#roadmap">@lang('home.road')</a></li>
                                    <li class="menu-item">
                                        <a class="menu-link nav-link" href="#faqs">@lang('home.other')</a>
                                    </li>
                                </ul>
                                <ul class="menu-btns align-items-center animated" data-animate="fadeInDown" data-delay=".85">
                                    <li>
                                        @guest
                                            @if (App::isLocale('en') || App::isLocale('tr'))
                                                <a href="{{route('panel.kayit', App::currentLocale())}}" class="btn btn-rg btn-round btn-primary"><span>@lang('home.register')</span></a> 
                                            @else 
                                                <a href="{{route('panel.kayit', 'en')}}" class="btn btn-rg btn-round btn-primary"><span>@lang('home.register')</span></a> 
                                            @endif
                                        @endguest
                                        @auth
                                           <a href="{{route('panel.home', App::currentLocale())}}" class="btn btn-rg btn-round btn-primary"><span>@lang('home.panel')</span></a> 
                                        @endauth
                                    </li>
                                    <li class="language-switcher toggle-wrap">
                                        @if (Request::segment(1) == 'en')
                                            <a class="btn btn-rg btn-round btn-outline btn-primary toggle-tigger tc-light" href="#">
                                                <img class="language-flag" src="images/flag-en.jpg" alt="en"><span>EN</span> <em class="icon ti ti-angle-down"></em>
                                            </a>
                                            <ul class="toggle-class toggle-drop drop-list drop-list-sm">
                                                <li><a href="{{url('/fr')}}"><img class="language-flag" src="images/flag-fr.jpg" alt="fr">FR</a></li>
                                                <li><a href="{{url('/tr')}}"><img class="language-flag" src="images/tr.svg" alt="tr">TR</a></li>
                                                <li><a href="{{url('/gr')}}"><img class="language-flag" src="images/almanya.png" alt="gr">GR</a></li>
                                                <li><a href="{{url('/es')}}"><img class="language-flag" src="images/es.jpg" alt="es">ES</a></li>
                                                <li><a href="{{url('/ae')}}"><img class="language-flag" src="images/sa.png" alt="ae">عربي</a></li>
                                                <li><a href="{{url('/ru')}}"><img class="language-flag" src="images/rusya.webp" alt="ru">RU</a></li>
                                            </ul>
                                        @elseif (Request::segment(1) == 'tr')
                                            <a class="btn btn-rg btn-round btn-outline btn-primary toggle-tigger tc-light" href="#">
                                                <img class="language-flag" src="images/tr.svg" alt="TR"><span>TR</span> <em class="icon ti ti-angle-down"></em>
                                            </a>
                                            <ul class="toggle-class toggle-drop drop-list drop-list-sm">
                                                <li><a href="{{url('/fr')}}"><img class="language-flag" src="images/flag-fr.jpg" alt="fr">FR</a></li>
                                                <li><a href="{{url('/en')}}"><img class="language-flag" src="images/flag-en.jpg" alt="en">EN</a></li>
                                                <li><a href="{{url('/gr')}}"><img class="language-flag" src="images/almanya.png" alt="gr">GR</a></li>
                                                <li><a href="{{url('/es')}}"><img class="language-flag" src="images/es.jpg" alt="es">ES</a></li>
                                                <li><a href="{{url('/ae')}}"><img class="language-flag" src="images/sa.png" alt="ae">عربي</a></li>
                                                <li><a href="{{url('/ru')}}"><img class="language-flag" src="images/rusya.webp" alt="ru">RU</a></li>
                                            </ul>
                                        @elseif (Request::segment(1) == 'fr')
                                            <a class="btn btn-rg btn-round btn-outline btn-primary toggle-tigger tc-light" href="#">
                                                <img class="language-flag" src="images/flag-fr.jpg" alt="FR"><span>FR</span> <em class="icon ti ti-angle-down"></em>
                                            </a>
                                            <ul class="toggle-class toggle-drop drop-list drop-list-sm">
                                                <li><a href="{{url('/tr')}}"><img class="language-flag" src="images/tr.svg" alt="tr">TR</a></li>
                                                <li><a href="{{url('/en')}}"><img class="language-flag" src="images/flag-en.jpg" alt="en">EN</a></li>
                                                <li><a href="{{url('/gr')}}"><img class="language-flag" src="images/almanya.png" alt="gr">GR</a></li>
                                                <li><a href="{{url('/es')}}"><img class="language-flag" src="images/es.jpg" alt="es">ES</a></li>
                                                <li><a href="{{url('/ae')}}"><img class="language-flag" src="images/sa.png" alt="ae">عربي</a></li>
                                                <li><a href="{{url('/ru')}}"><img class="language-flag" src="images/rusya.webp" alt="ru">RU</a></li>
                                            </ul>
                                        @elseif (Request::segment(1) == 'gr')
                                            <a class="btn btn-rg btn-round btn-outline btn-primary toggle-tigger tc-light" href="#">
                                                <img class="language-flag" src="images/almanya.png" alt="GR"><span>GR</span> <em class="icon ti ti-angle-down"></em>
                                            </a>
                                            <ul class="toggle-class toggle-drop drop-list drop-list-sm">
                                                <li><a href="{{url('/tr')}}"><img class="language-flag" src="images/tr.svg" alt="tr">TR</a></li>
                                                <li><a href="{{url('/en')}}"><img class="language-flag" src="images/flag-en.jpg" alt="en">EN</a></li>
                                                <li><a href="{{url('/fr')}}"><img class="language-flag" src="images/flag-fr.jpg" alt="fr">FR</a></li>
                                                <li><a href="{{url('/es')}}"><img class="language-flag" src="images/es.jpg" alt="es">ES</a></li>
                                                <li><a href="{{url('/ae')}}"><img class="language-flag" src="images/sa.png" alt="ae">عربي</a></li>
                                                <li><a href="{{url('/ru')}}"><img class="language-flag" src="images/rusya.webp" alt="ru">RU</a></li>
                                            </ul>
                                        @elseif (Request::segment(1) == 'es')
                                            <a class="btn btn-rg btn-round btn-outline btn-primary toggle-tigger tc-light" href="#">
                                                <img class="language-flag" src="images/es.jpg" alt="FR"><span>ES</span> <em class="icon ti ti-angle-down"></em>
                                            </a>
                                            <ul class="toggle-class toggle-drop drop-list drop-list-sm">
                                                <li><a href="{{url('/tr')}}"><img class="language-flag" src="images/tr.svg" alt="tr">TR</a></li>
                                                <li><a href="{{url('/en')}}"><img class="language-flag" src="images/flag-en.jpg" alt="en">EN</a></li>
                                                <li><a href="{{url('/fr')}}"><img class="language-flag" src="images/flag-fr.jpg" alt="fr">FR</a></li>
                                                <li><a href="{{url('/gr')}}"><img class="language-flag" src="images/almanya.png" alt="gr">GR</a></li>
                                                <li><a href="{{url('/ae')}}"><img class="language-flag" src="images/sa.png" alt="ae">عربي</a></li>
                                                <li><a href="{{url('/ru')}}"><img class="language-flag" src="images/rusya.webp" alt="ru">RU</a></li>
                                            </ul>
                                        @elseif (Request::segment(1) == 'ru')
                                            <a class="btn btn-rg btn-round btn-outline btn-primary toggle-tigger tc-light" href="#">
                                                <img class="language-flag" src="images/rusya.webp" alt="RU"><span>RU</span> <em class="icon ti ti-angle-down"></em>
                                            </a>
                                            <ul class="toggle-class toggle-drop drop-list drop-list-sm">
                                                <li><a href="{{url('/tr')}}"><img class="language-flag" src="images/tr.svg" alt="tr">TR</a></li>
                                                <li><a href="{{url('/en')}}"><img class="language-flag" src="images/flag-en.jpg" alt="en">EN</a></li>
                                                <li><a href="{{url('/fr')}}"><img class="language-flag" src="images/flag-fr.jpg" alt="fr">FR</a></li>
                                                <li><a href="{{url('/gr')}}"><img class="language-flag" src="images/almanya.png" alt="gr">GR</a></li>
                                                <li><a href="{{url('/ae')}}"><img class="language-flag" src="images/sa.png" alt="ae">عربي</a></li>
                                                <li><a href="{{url('/es')}}"><img class="language-flag" src="images/es.jpg" alt="es">ES</a></li>
                                            </ul>
                                        @else
                                            <a class="btn btn-rg btn-round btn-outline btn-primary toggle-tigger tc-light" href="#">
                                                <img class="language-flag" src="images/sa.png" alt="ae"><span>عربي</span> <em class="icon ti ti-angle-down"></em>
                                            </a>
                                            <ul class="toggle-class toggle-drop drop-list drop-list-sm">
                                                <li><a href="{{url('/tr')}}"><img class="language-flag" src="images/tr.svg" alt="tr">TR</a></li>
                                                <li><a href="{{url('/en')}}"><img class="language-flag" src="images/flag-en.jpg" alt="en">EN</a></li>
                                                <li><a href="{{url('/fr')}}"><img class="language-flag" src="images/flag-fr.jpg" alt="fr">FR</a></li>
                                                <li><a href="{{url('/gr')}}"><img class="language-flag" src="images/almanya.png" alt="gr">GR</a></li>
                                                <li><a href="{{url('/ru')}}"><img class="language-flag" src="images/rusya.webp" alt="ae">RU</a></li>
                                                <li><a href="{{url('/es')}}"><img class="language-flag" src="images/es.jpg" alt="es">ES</a></li>
                                            </ul>
                                        @endif
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- .header-navbar @e -->
                    </div>
                </div>
            </div><!-- .header-main @e -->

            <!-- Banner @s -->
            <div class="header-banner bg-white">
                <div class="nk-banner">
                    <div class="banner banner-single">
                        <div class="banner-rounded-bg bg-theme-alt">
                            <span class="banner-shade-1"><span class="banner-shade-2"><span class="banner-shade-3"></span></span></span>
                        </div>
                        <div class="banner-wrap">
                            <div class="container container-z">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-12 col-xl-10 text-center">
                                        <div class="banner-caption wide-auto-xl pdb-l pdt-r tc-light">
                                            <div class="cpn-head">
                                                <h1 class="title title-md animated" data-animate="fadeInUp" data-delay="1.25">@lang('home.anabaslik') </h1>
                                            </div>
                                            <div class="cpn-text cpn-text-s1 cpn-text-center">
                                                <p class="lead animated" data-animate="fadeInUp" data-delay="1.35">@lang('home.anayazi')</p>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-xl-8 col-lg-10">
                                        <div class="tc-light text-center pdb-r">
                                            <span class="badge badge-sm badge-warning px-4 animated" data-animate="fadeInUp" data-delay="1.45">@lang('home.round')</span>
                                            <h4 class="title title-md title-semibold pdt-m animated" data-animate="fadeInUp" data-delay="1.55">@lang('home.rtitle')</h4>
                                        </div>
                                        <div class="token-status bg-white token-status-s6 shadow-dark round mb-5 animated" data-animate="fadeInUp" data-delay="1.65">
                                            <h6 class="title title-xs-alt fw-4 tc-default">@lang('home.app1'):</h6>
                                            <ul class="cpn-links flex-wrap flex-sm-nowrap cpn-links-s1 pt-0 pb-3 pb-sm-0">
                                                <li class="order-sm-0"><a href="https://www.youtube.com/watch?v=SSo_EIwHSd4" class="link link-xs link-light video-popup"><em class="link-icon fas fa-play"></em><span>@lang('home.app2')</span></a></li>
                                                <li class="order-sm-0 order-last w-100"><a href="https://bit.ly/2NlMucG" class="btn btn-round btn-primary btn-lg">@lang('home.app3')</a></li>
                                                <li class="order-sm-0"><a href="
													@if (Request::segment(1) == 'tr')
														beyaz-kagit.pdf
													@elseif (Request::segment(1) == 'en')
														white-paper.pdf
													@elseif (Request::segment(1) == 'gr')
														Weißes-Papier.pdf
													@elseif (Request::segment(1) == 'ru')
														белая-бумага.pdf
													@else
														white-paper.pdf
													@endif
													" class="link link-xs link-light" target="blank"><em class="link-icon fas fa-file"></em><span>@lang('home.app4')</span></a></li>
                                            </ul>
                                            <ul class="icon-list fz-7 pt-3 tc-alternet">
                                                <li>@lang('home.app5'):</li>
                                                <li><em class="fab fa-bitcoin"></em></li>
                                                <li><em class="fas fa-pound-sign"></em></li>
                                                <li><em class="fas fa-dollar-sign"></em></li>
                                            </ul>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div>
                        </div>
                    </div>
                    <div class="nk-ovm ovm-top ovm-h-80 bg-theme-alt d-lg-none"></div>
                </div><!-- .nk-banner -->
            </div>
            <!-- .header-banner @e -->
        </header>

        <main class="nk-pages">
            <section class="section py-0 ov-h">
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block block-partners">
                        <div class="section-head section-head-xs">
                            <h6 class="title title-xs text-center animated" data-animate="fadeInUp" data-delay=".1">@lang('home.partner')</h6>
                        </div>
                        <ul class="partner-list flex-lg-nowrap">
                            <li class="partner-logo-s3 animated" data-animate="fadeInUp" data-delay=".2"><img src="images/partners/f.png" alt="partner"></li>
                            <li class="partner-logo-s3 animated" data-animate="fadeInUp" data-delay=".3"><img src="images/partners/b.jpg" alt="partner"></li>
                            <li class="partner-logo-s3 animated" data-animate="fadeInUp" data-delay=".35"><img src="images/partners/c.png" alt="partner"></li>
                            <li class="partner-logo-s3 animated" data-animate="fadeInUp" data-delay=".4"><img src="images/partners/d.png" alt="partner"></li>
                            <li class="partner-logo-s3 animated" data-animate="fadeInUp" data-delay=".45"><img src="images/partners/e.png" alt="partner"></li>
                        </ul>
                    </div>
                    <!-- Block @e -->
                </div>
            </section>
            <!-- // -->
            <section class="section bg-white pb-0" id="roadmap">
                <div class="container">
                    <div class="section-head section-head-s5 wide-auto-sm text-center">
                        <h2 class="title title-s2 title-s2-alt animated" data-animate="fadeInUp" data-delay=".1">@lang('home.roadmap')</h2>
                        <p class="animated" data-animate="fadeInUp" data-delay=".2">@lang('home.rmyazi')</p>
                    </div><!-- Section Head @s -->
                    <!-- Block @s -->
                    <div class="nk-block">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="roadmap-carousel-container text-center animated" data-animate="fadeInUp" data-delay=".3">
                                    <div class="has-carousel roadmap-carousel" data-items="5" data-items-mobile-s="1" data-margin="15" data-dots="true">
                                        <div class="roadmap roadmap-done roadmap-s3 roadmap-s3-1">
                                            <div class="roadmap-step roadmap-step-s3">
                                                <div class="roadmap-head roadmap-head-s3">
                                                    <span class="roadmap-time roadmap-time-s3">@lang('home.agustos') 2020</span>
                                                </div>
                                                <p>@lang('home.road1')</p>
                                            </div>
                                        </div>
                                        <div class="roadmap roadmap-done roadmap-s3 roadmap-s3-1">
                                            <div class="roadmap-step roadmap-step-s3">
                                                <div class="roadmap-head roadmap-head-s3">
                                                    <span class="roadmap-time roadmap-time-s3">@lang('home.eylul') 2020</span>
                                                </div>
                                                <p>@lang('home.road2')</p>
                                            </div>
                                        </div>
                                        <div class="roadmap roadmap-s3 roadmap-s3-1">
                                            <div class="roadmap-step roadmap-step-s3">
                                                <div class="roadmap-head roadmap-head-s3">
                                                    <span class="roadmap-time roadmap-time-s3">@lang('home.ekim') 2020</span>
                                                </div>
                                                <p>@lang('home.road3')</p>
                                            </div>
                                        </div>
                                        <div class="roadmap roadmap-s3 roadmap-s3-1">
                                            <div class="roadmap-step roadmap-step-s3">
                                                <div class="roadmap-head roadmap-head-s3">
                                                    <span class="roadmap-time roadmap-time-s3">@lang('home.kasim') 2020</span>
                                                </div>
                                                <p>@lang('home.road4')</p>
                                            </div>
                                        </div>
                                        <div class="roadmap roadmap-s3 roadmap-s3-1">
                                            <div class="roadmap-step roadmap-step-s3">
                                                <div class="roadmap-head roadmap-head-s3">
                                                    <span class="roadmap-time roadmap-time-s3">@lang('home.aralik') 2020</span>
                                                </div>
                                                <p>@lang('home.road5')</p>
                                            </div>
                                        </div>
                                        <div class="roadmap roadmap-s3 roadmap-s3-1">
                                            <div class="roadmap-step roadmap-step-s3">
                                                <div class="roadmap-head roadmap-head-s3">
                                                    <span class="roadmap-time roadmap-time-s3">@lang('home.ocak') 2021</span>
                                                </div>
                                                <p>@lang('home.road6')</p>
                                            </div>
                                        </div>
                                        <div class="roadmap roadmap-s3 roadmap-s3-1">
                                            <div class="roadmap-step roadmap-step-s3">
                                                <div class="roadmap-head roadmap-head-s3">
                                                    <span class="roadmap-time roadmap-time-s3">@lang('home.subat') 2021</span>
                                                </div>
                                                <p>@lang('home.road7')</p>
                                            </div>
                                        </div>
                                        <div class="roadmap roadmap-s3 roadmap-s3-1">
                                            <div class="roadmap-step roadmap-step-s3">
                                                <div class="roadmap-head roadmap-head-s3">
                                                    <span class="roadmap-time roadmap-time-s3">@lang('home.mart') 2021</span>
                                                </div>
                                                <p>@lang('home.road8')</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </section>
            <!-- // -->
            <section class="section tc-light bg-white ov-h pb-0" id="about">
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block nk-block-text-wrap">
                        <div class="row align-items-center gutter-vr-30px">
                            <div class="col-lg-5 order-last">
                                <div class="nk-block-img-s1 mb-5 mb-lg-0 animated" data-animate="fadeInUp" data-delay=".8">
                                    <img src="images/lavender/gfx-x-light.png" alt="app">
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-7">
                                <div class="nk-block-text nk-block-shape-s1 bg-theme-alt animated" data-animate="fadeIn" data-delay=".1">
                                    <div class="nk-block-shade"></div>
                                    <h6 class="animated" data-animate="fadeInUp" data-delay=".2">@lang('home.mini')</h6>
                                    <h3 class="title animated" data-animate="fadeInUp" data-delay=".3">@lang('home.atitle').</h3>
                                    <p class="animated" data-animate="fadeInUp" data-delay=".6">@lang('home.ayazi') </p>
                                    <div class="nk-block-note animated" data-animate="fadeInUp" data-delay=".7">
                                        <em class="icon ti ti-rocket"></em>
                                        <p>@lang('home.agolge').</p>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </section>

            <!-- // -->
           
                <div class="container">
                    <div class="section-head section-head-s4 wide-auto-sm text-center">
                        
                    </div>
                    <!-- Block @s -->
         
                    <!-- Block @s -->
                   
                    <!-- Block @s -->
                    <div class="nk-block nk-block-token">
                        <div class="row justify-content-center gutter-vr-30px">
                            <div class="col-mb-6 col-md-5 col-lg-4">
                                <div class="stage-info animated" data-animate="fadeInUp" data-delay=".2">
                                    <h6 class="title title-s6 title-xs-s2">@lang('home.d1')</h6>
                                    <p>100.000.000 MAO</p>
                                </div>
                            </div><!-- .col  -->
                            <div class="col-mb-6 col-md-5 col-lg-4">
                                <div class="stage-info animated" data-animate="fadeInUp" data-delay=".3">
                                    <h6 class="title title-s6 title-xs-s2">@lang('home.d2')</h6>
                                    <p>50.000.000 MAO (50%)</p>
                                </div>
                            </div><!-- .col  -->
                            <div class="col-mb-6 col-md-5 col-lg-4">
                                <div class="stage-info animated" data-animate="fadeInUp" data-delay=".4">
                                    <h6 class="title title-s6 title-xs-s2">@lang('home.d3')</h6>
                                    <p>50.000.000 MAO (50%)</p>
                                </div>
                            </div><!-- .col  -->
                            <div class="col-mb-6 col-md-5 col-lg-4">
                                <div class="stage-info animated" data-animate="fadeInUp" data-delay=".5">
                                    <h6 class="title title-s6 title-xs-s2">@lang('home.d4')</h6>
                                    <p>0,01 $</p>
                                </div>
                            </div><!-- .col  -->
                            <div class="col-mb-6 col-md-5 col-lg-4">
                                <div class="stage-info animated" data-animate="fadeInUp" data-delay=".6">
                                    <h6 class="title title-s6 title-xs-s2">@lang('home.d5')</h6>
                                    <p>BNB , ETH , BTC , LTC , USDT , CHZ , DOGE</p>
                                </div>
                            </div><!-- .col  -->
                            <div class="col-mb-6 col-md-5 col-lg-4">
                                <div class="stage-info animated" data-animate="fadeInUp" data-delay=".7">
                                    <h6 class="title title-s6 title-xs-s2">@lang('home.d6')</h6>
                                    <p>250 MAO</p>
                                </div>
                            </div><!-- .col  -->
                        </div><!-- .row  -->
                    </div><!-- .block @e -->
                    <div class="nk-block">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-9">
                                <div class="single-chart animated" data-animate="fadeInUp" data-delay=".8">
                                    <div class="chart">
                                        <img src="images/lavender/i-light.png" alt="chart">
                                    </div>
                                </div>
                            </div><!-- .col  -->
                            <div class="col-md-6 col-sm-9">
                                <div class="single-chart animated" data-animate="fadeInUp" data-delay=".9">
                                    <div class="chart">
                                        <img src="images/lavender/j-light.png" alt="chart">
                                    </div>
                                </div>
                            </div><!-- .col  -->
                        </div><!-- .row  -->
                    </div><!-- .block @e -->
                </div>
            </section>
            <!-- // -->
            
            <section class="section pb-0 bg-white" id="faqs">
                <div class="container">
                   <div class="section-head section-head-s4 wide-auto-sm text-center">
                        <h2 class="title title-s2 title-s2-alt animated" data-animate="fadeInUp" data-delay=".1">@lang('home.sbaslik')</h2>
                    </div>
                    <!-- Block @s -->
                    <div class="nk-block">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8">
                                <div class="accordion accordion-faq animated" data-animate="fadeInUp" data-delay=".2" id="faq-67">
                                    <div class="accordion-item accordion-item-s4 bg-light-alt">
                                        <h5 class="accordion-title accordion-title-sm" data-toggle="collapse" data-target="#faq-67-1">
                                            @lang('home.stitle1') 
                                            <span class="accordion-icon accordion-icon-s2"></span>
                                        </h5>
                                        <div id="faq-67-1" class="collapse show" data-parent="#faq-67">
                                            <div class="accordion-content">
                                                <p>@lang('home.sdesc1')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s4 bg-light-alt">
                                        <h5 class="accordion-title collapsed" data-toggle="collapse" data-target="#faq-67-2">
                                            @lang('home.stitle2') 
                                            <span class="accordion-icon accordion-icon-s2"></span>
                                        </h5>
                                        <div id="faq-67-2" class="collapse" data-parent="#faq-67">
                                            <div class="accordion-content">
                                                <p>@lang('home.sdesc2')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s4 bg-light-alt">
                                        <h5 class="accordion-title collapsed" data-toggle="collapse" data-target="#faq-67-3">
                                            @lang('home.stitle3')
                                            <span class="accordion-icon accordion-icon-s2"></span>
                                        </h5>
                                        <div id="faq-67-3" class="collapse" data-parent="#faq-67">
                                            <div class="accordion-content">
                                                <p>@lang('home.sdesc3')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item accordion-item-s4 bg-light-alt">
                                        <h5 class="accordion-title collapsed" data-toggle="collapse" data-target="#faq-67-4">
                                            @lang('home.stitle4')
                                            <span class="accordion-icon accordion-icon-s2"></span>
                                        </h5>
                                        <div id="faq-67-4" class="collapse" data-parent="#faq-67">
                                            <div class="accordion-content">
                                                <p>@lang('home.sdesc4')</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </section>
            <section class="section section-r pt-0 bg-white">
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block">
                        <div class="row justify-content-center text-center">
                            <div class="col-sm-9 col-lg-6">
                                <div class="section-head section-head-xs wide-auto-sm">
                                    <h5 class="title title-sm animated" data-animate="fadeInUp" data-delay=".1">@lang('home.ebaslik')</h5>
                                    <p class=" animated" data-animate="fadeInUp" data-delay=".2">@lang('home.eyazi')</p>
                                </div>
                                <form action="form/subscribe.php" class="nk-form-submit" method="post">
                                    <div class="field-inline field-inline-round field-inline-s2-sm bg-light-alt animated" data-animate="fadeInUp" data-delay=".3">
                                        <div class="field-wrap">
                                            <input class="input-solid input-solid-md required email" type="text" name="contact-email" placeholder="@lang('home.edoldur')">
                                            <input type="text" class="d-none" name="form-anti-honeypot" value="">
                                        </div>
                                        <div class="submit-wrap">
                                            <button class="btn btn-md btn-round btn-dark h-100">@lang('home.eabone')</button>
                                        </div>
                                    </div>
                                    <div class="form-results"></div>
                                </form>
                                <div class="pdt-r animated" data-animate="fadeInUp" data-delay=".4">
                                    <a href="https://t.me/justmaobit" class="link link-light link-xs">
                                        <em class="link-icon fa fa-paper-plane"></em><span>@lang('home.telegram')</span>
                                    </a>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </section>
        </main>
        <footer class="nk-footer bg-theme-alt">
            <div class="social-overlap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-10">
                            <ul class="social-bar bg-white round shadow-heavy animated" data-animate="fadeInUp" data-delay=".1">
                                <li class="social-bar-title"><span>@lang('home.takipet')</span></li>
                                <li><a href="https://www.facebook.com/justmaobit/"><em class="icon fab fa-facebook-f"></em></a></li>
                                <li><a href="https://twitter.com/justmaobit"><em class="icon fab fa-twitter"></em></a></li>
                                <li><a href="https://github.com/justmaobit/MaoBit-Project"><em class="icon fab fa-github"></em></a></li>
                            </ul>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
                <div class="nk-ovm ovm-top ovm-h-50 bg-white"></div>
            </div>
            <div class="section section-m section-footer bg-transparent tc-light">
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block block-footer mgb-m50 mgt-m10">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-10">
                                <div class="wgs animated" data-animate="fadeInUp" data-delay=".2">
                                    <a href="#"><img src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo"></a>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-2 col-mb-3 col-sm-3 col-6">
                                <div class="wgs wgs-menu">
                                    <div class="wgs-body">
                                        <ul class="wgs-links wgs-links-uline wgs-links-s4 animated" data-animate="fadeInUp" data-delay=".3">
                                            <li><a href="#token">@lang('home.coin')</a></li>
                                            <li><a href="#roadmap">@lang('home.road')</a></li>
                                            <li><a href="#why">@lang('home.which')</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-2 col-mb-3 col-sm-3 col-6">
                                <div class="wgs wgs-menu">
                                    <div class="wgs-body">
                                        <ul class="wgs-links wgs-links-uline wgs-links-s4 animated" data-animate="fadeInUp" data-delay=".4">
                                            <li><a href="#about">@lang('home.about')</a></li>
                                            <li><a href="#faqs">@lang('home.sbaslik')</a></li>
                                            <li><a href="https://t.me/justmaobit">@lang('home.ilekatil')</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </div>
            <hr class="hr-white-10 my-0">
            <div class="section py-5 tc-light">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-7">
                            <div class="copyright-text copyright-text-s3 op-70">
                                <p><span>Copyright &copy; 2020-2021 MaoBit.</span></p>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-5 text-md-right">
                            <ul class="footer-links">
                                <li><a href="#">@lang('home.gizlilik')</a></li>
                            </ul>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
            </div>
        </footer>
    </div>
    
    <div class="preloader"><span class="spinner spinner-round"></span></div>

    <!-- JavaScript -->
    <script src="assets/js/jquery.bundle.js?ver=192"></script>
    <script src="assets/js/scripts.js?ver=192"></script>
    <script src="assets/js/charts.js"></script>
</body>

</html>