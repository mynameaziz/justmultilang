<div class="user-sidebar">
    <div class="user-sidebar-overlay"></div>
    <div class="user-box d-none d-lg-block">
        <div class="user-image">
            <img src="{{asset('passets/images/user-thumb-lg.png')}}" alt="user" style="height: 70px">
        </div>
        <h6 class="user-name">{{Auth::user()->name}}</h6>
        <div class="user-uid">@lang('panel.walletid') ID: <span>{{Auth::user()->wallet_code}}</span></div>
        <ul class="btn-grp guttar-10px">
            @if (Auth::user()->email_verified_at == null)
                <li><a href="#" class="btn btn-xs btn-warning">@lang('panel.conmail')</a></li>
            @endif
            @if (Auth::user()->kyc == 0)
               <li><a href="{{route('panel.kyc', App::currentLocale())}}" class="btn btn-xs btn-warning">@lang('panel.kycdogru')</a></li> 
            @endif
        </ul>
    </div><!-- .user-box -->
    <ul class="user-icon-nav">
        <li><a href="{{route('panel.home', App::currentLocale())}}"><em class="ti ti-dashboard"></em>@lang('panel.dashboard')</a></li>
        @if (Auth::user()->kyc == 0)
            <li><a href="{{route('panel.kyc', App::currentLocale())}}"><em class="ti ti-files"></em>KYC @lang('panel.app')</a></li>
        @endif
        <li><a href="tokens.html"><em class="ti ti-pie-chart"></em>Contributions</a></li>
        <li><a href="transactions.html"><em class="ti ti-control-shuffle"></em>@lang('panel.trans')</a></li>
        <li><a href="referrals.html"><em class="ti ti-infinite"></em>@lang('panel.refferal')</a></li>
        <li><a href="account.html"><em class="ti ti-user"></em>@lang('panel.account')</a></li>
        <li><a href="security.html"><em class="ti ti-lock"></em>@lang('panel.security')</a></li>
    </ul><!-- .user-icon-nav -->
    <div class="user-sidebar-sap"></div><!-- .user-sidebar-sap -->
    <ul class="user-nav">
        <li><a href="how-to.html">@lang('panel.how')</a></li>
        <li><a href="faq.html">@lang('panel.faqs')</a></li>
        <li>
            @if (App::isLocale('tr'))
                <a href="{{url('tr')}}">Whitepaper</a>
            @else
                <a href="{{url('en')}}">Whitepaper</a>
            @endif
            
        </li>
        <li>@lang('panel.contact')<span>info@icocrypto.com</span></li>
    </ul><!-- .user-nav -->
    <div class="d-lg-none">
        <div class="user-sidebar-sap"></div>
        <div class="gaps-1x"></div>
        <ul class="topbar-action-list">
            <li class="topbar-action-item topbar-action-link">
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
            <li class="dropup topbar-action-item topbar-action-language">
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
        </ul><!-- .topbar-action-list -->
    </div>
</div><!-- .user-sidebar -->