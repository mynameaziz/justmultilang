@extends('panel.layouts.master')
<br><br><br><br>
@section('content')
<div class="user-wraper">
    <div class="container">
        <div class="d-flex">
            @include('panel.layouts.sidebar')
            <div class="user-content">
                <div class="user-panel">
                    <h2 class="user-panel-title">@lang('panel.identy') - KYC</h2>
                    <p>@lang('panel.identydes')</p>
                    <div class="gaps-2x"></div>
                    <div class="status status-empty">
                        <div class="status-icon">
                            <em class="ti ti-files"></em>
                            <div class="status-icon-sm">
                                <em class="ti ti-close"></em>
                            </div>
                        </div>
                        @if ($kycControl)
                            @if ($kycControl->status == 0) <!-- İnceleniyor -->
                                <span class="status-text">@lang('panel.kycwait')</span>
                                <a href="kyc-application.html" class="btn btn-primary">@lang('panel.kycwclick')</a>
                            @elseif ($kycControl->status == 1) <!-- Red Edilmiş -->
                                <span class="status-text">@lang('panel.kycred')</span>
                                <a href="{{route('panel.kyccreate', App::currentLocale())}}" class="btn btn-primary">@lang('panel.kycbutton')</a>
                            @else
                                <span class="status-text">@lang('panel.kycsucces')</span>
                                <a href="kyc-application.html" class="btn btn-primary">@lang('panel.kycwclick')</a>
                            @endif
                        @else
                            <span class="status-text">@lang('panel.notkyc')</span>
                            <a href="{{route('panel.kyccreate', App::currentLocale())}}" class="btn btn-primary">@lang('panel.yeskyc')</a>
                        @endif
                        
                    </div>
                    <div class="note note-md note-info note-plane">
                        <em class="fas fa-info-circle"></em> 
                        <p>@lang('panel.kycinfo')</p>
                    </div>
                </div><!-- .user-kyc -->
            </div><!-- .user-content -->
        </div><!-- .d-flex -->
    </div><!-- .container -->
</div>
@endsection