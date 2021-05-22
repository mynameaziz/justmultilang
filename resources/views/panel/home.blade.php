@extends('panel.layouts.master')
<br><br><br><br>
@section('content')
@if (session('logged'))
    @if (App::isLocale('tr'))
        <script>swal("Giriş Başarılı", "Başarılı bir şekilde giriş yaptınız", "success")</script>
    @else
        <script>swal("Login Success", "You have successfully logged in", "success")</script>
    @endif
@endif
@if (App::isLocale('tr'))
    @if (session('zaten'))
        <script>swal("Hata", "Zaten KYC Doğrulaması yapmışsın!")</script>
    @endif
@else
    @if (session('zaten'))
        <script>swal("Hata", "You have already done KYC Verification!")</script>
    @endif
@endif
    <div class="user-wraper">
        <div class="container">
            <div class="d-flex">
                @include('panel.layouts.sidebar')
                <div class="user-content">
                    <div class="user-panel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tile-item tile-primary">
                                    <div class="tile-bubbles"></div>
                                    <h6 class="tile-title">@lang('panel.balance')</h6>
                                    <h1 class="tile-info">{{Auth::user()->wallet}} MAO</h1>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="tile-item tile-light">
                                    <div class="tile-bubbles"></div>
                                    <h6 class="tile-title">YOUR CONTRIBUTION</h6>
                                    <ul class="tile-info-list">
                                        <li><span>1.646</span>ETH</li>
                                        <li><span>~</span>BTC</li>
                                        <li><span>5,940</span>USD</li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <div class="info-card info-card-bordered">
                            <div class="row align-items-center">
                                <div class="col-sm-3">
                                    <div class="info-card-image">
                                        <img src="{{asset('passets/images/vector-a.png')}}" alt="vector">
                                    </div>
                                    <div class="gaps-2x d-md-none"></div>
                                </div>
                                <div class="col-sm-9">
                                    <h4>Thank you for your interest towards to our ICO Crypto Projects</h4>
                                    <p>You can contribute ICOX tokens in <a href="#">Contributions</a> section.</p>
                                    <p>You can get a quick response to any questions, and chat with the project in our Telegram: <a href="htts://t.me/icocrypto">htts://t.me/icocrypto</a></p>
                                    <p>Don’t hesitate to invite your friends! If your invited referral purchased token then both of you get 10% bonus.</p>
                                </div>
                            </div>
                        </div><!-- .info-card -->
                        <div class="token-card">
                            <div class="token-info">
                                <span class="token-smartag">ICO Phase 2</span>
                                <h2 class="token-bonus">20% <span>Current Bonus</span></h2>
                                <ul class="token-timeline">
                                    <li><span>START DATE</span>14 Jul 2018</li>
                                    <li><span>END DATE</span>25 Aug 2018</li>
                                </ul>
                            </div>
                            <div class="token-countdown">
                                <span class="token-countdown-title">THE BONUS END IN</span>
                                <div class="token-countdown-clock" data-date="2018/09/05"></div>
                            </div>
                        </div><!-- .token-card -->
                        <div class="progress-card">
                            <h4>Token Sale Progress</h4>
                            <ul class="progress-info">
                                <li><span>Raised -</span> 2,758 ICOX</li>
                                <li><span>TOTAL -</span> 1,500,000 ICOX</li>
                            </ul>
                            <div class="progress-bar">
                                <div class="progress-hcap" style="width:90%">
                                    <div>Hard cap <span>1,400,000</span></div>
                                </div>
                                <div class="progress-scap" style="width:34%">
                                    <div>Soft cap <span>40,000</span></div>
                                </div>
                                <div class="progress-psale" style="width:12%">
                                    <div>Pre Sale <span>10,000</span></div>
                                </div>
                                <div class="progress-percent" style="width:25%"></div>
                            </div>
                        </div>
                        <div class="gaps-3x"></div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>PreSale</th>
                                        <th>Sale Stage 1</th>
                                        <th>Sale Stage 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span>Start Date</span>03 July 2018</td>
                                        <td><span>Start Date</span>15 August 2018</td>
                                        <td><span>Start Date</span>28 October 2018</td>
                                    </tr>
                                    <tr>
                                        <td><span>End Date</span>19 July 2018</td>
                                        <td><span>End Date</span>02 September 2018</td>
                                        <td><span>End Date</span>16 November 2018</td>
                                    </tr>
                                    <tr>
                                        <td><span>Bonus</span>30%</td>
                                        <td><span>Bonus</span>20%</td>
                                        <td><span>Bonus</span>10%</td>
                                    </tr>
                                    <tr>
                                        <td><span>Soft Cap</span>$ 20M</td>
                                        <td><span>Hard Cap</span>$ 50M</td>
                                        <td><span>Hard Cap</span>$ 30M</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div><!-- .user-panel -->
                </div><!-- .user-content -->
            </div><!-- .d-flex -->
        </div><!-- .container -->
    </div>
    <!-- UserWraper End -->
@endsection
