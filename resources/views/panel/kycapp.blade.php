@extends('panel.layouts.master')
<br><br><br><br>
@section('content')
<div class="user-wraper">
    <div class="container">
        <div class="d-flex">
            @include('panel.layouts.sidebar')
            <div class="user-content">
                <div class="user-kyc">
                    <form action="#">
                        <div class="from-step">
                            <div class="from-step-item">
                                <div class="from-step-heading">
                                    <div class="from-step-number">01</div>
                                    <div class="from-step-head">
                                        <h4>@lang('panel.step1')</h4>
                                        <p>@lang('panel.step1desc')</p>
                                    </div>
                                </div>
                                <div class="from-step-content">
                                    <div class="note note-md note-info note-plane">
                                        <em class="fas fa-info-circle"></em> 
                                        <p>@lang('panel.step1info')</p>
                                    </div>
                                    <div class="gaps-2x"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="first-name" class="input-item-label">@lang('panel.firstname')</label>
                                                <input class="input-bordered" type="text" id="first-name" name="ad">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="last-name" class="input-item-label">@lang('panel.lastname')</label>
                                                <input class="input-bordered" type="text" id="last-name" name="soyad">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="email" class="input-item-label">@lang('panel.mailadres')</label>
                                                <input class="input-bordered" type="text" id="email" name="email">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="telefon" class="input-item-label">@lang('panel.phone')</label>
                                                <input class="input-bordered" type="text" id="telefon" name="telefon">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="birth" class="input-item-label">@lang('panel.dateof')</label>
                                                <input class="input-bordered date-picker" type="text" id="birth" name="birth">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="ulke" class="input-item-label">@lang('panel.country')</label>
                                                <input type="text" class="input-bordered" id="ulke" name="ulke">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="adres1" class="input-item-label">@lang('panel.adress1')</label>
                                                <input class="input-bordered" id="adres1" type="text" name="adres1">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="adres2" class="input-item-label">@lang('panel.adress2') <span>(@lang('panel.optional'))</span></label>
                                                <input class="input-bordered" id="adres2" type="text" name="adres2">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="city" class="input-item-label">@lang('panel.city')</label>
                                                <input class="input-bordered" id="city" type="text" name="city">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="zipcode" class="input-item-label">@lang('panel.zipcode')</label>
                                                <input class="input-bordered" id="zipcode" type="text" name="zipcode">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .from-step-content -->
                            </div><!-- .from-step-item -->
                            <div class="from-step-item">
                                <div class="from-step-heading">
                                    <div class="from-step-number">02</div>
                                    <div class="from-step-head">
                                        <h4>@lang('panel.step2')</h4>
                                        <p>@lang('panel.step2desc')</p>
                                    </div>
                                </div>
                                <div class="from-step-content">
                                    <div class="note note-md note-info note-plane">
                                        <em class="fas fa-info-circle"></em> 
                                        <p>@lang('panel.step2info')</p>
                                    </div>
                                    <div class="gaps-2x"></div>
                                    <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#passport">
                                                <div class="nav-tabs-icon">
                                                    <img src="{{asset('passets/images/icon-passport.png')}}" alt="icon">
                                                    <img src="{{asset('passets/images/icon-passport-color.png')}}" alt="icon">
                                                </div>
                                                <span>@lang('panel.pasaport')</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#national-card">
                                                <div class="nav-tabs-icon">
                                                    <img src="{{asset('passets/images/icon-national-id.png')}}" alt="icon">
                                                    <img src="{{asset('passets/images/icon-national-id-color.png')}}" alt="icon">
                                                </div>
                                                <span>@lang('panel.natcart')</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#driver-licence">
                                                <div class="nav-tabs-icon">
                                                    <img src="{{asset('passets/images/icon-licence.png')}}" alt="icon">
                                                    <img src="{{asset('passets/images/icon-licence-color.png')}}" alt="icon">
                                                </div>
                                                <span>@lang('panel.license')</span>
                                            </a>
                                        </li>
                                    </ul><!-- .nav-tabs-line -->
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="passport">
                                            <h5 class="kyc-upload-title">@lang('panel.pastitle')</h5>
                                            <ul class="kyc-upload-list">
                                                <li>@lang('panel.pas1')</li>
                                                <li>@lang('panel.pas2')</li>
                                                <li>@lang('panel.pas3')</li>
                                            </ul>
                                            <div class="gaps-4x"></div>
                                            <span class="upload-title">@lang('panel.pasupload')</span>
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <div class="upload-box">
                                                        <div class="upload-zone">
                                                            <div class="dz-message" data-dz-message>
                                                                <input type="file" accept="image/png, image/jpeg" name="pasaport">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kyc-upload-img">
                                                        <img src="{{asset('passets/images/vector-passport.png')}}" alt="vector">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gaps-1x"></div>
                                        </div>
                                        <div class="tab-pane fade" id="national-card">
                                            <h5 class="kyc-upload-title">@lang('panel.pastitle')</h5>
                                            <ul class="kyc-upload-list">
                                                <li>@lang('panel.pas1')</li>
                                                <li>@lang('panel.pas2')</li>
                                                <li>@lang('panel.pas3')</li>
                                            </ul>
                                            <div class="gaps-4x"></div>
                                            <span class="upload-title">@lang('panel.kimupload')</span>
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <div class="upload-box">
                                                        <div class="upload-zone">
                                                            <div class="dz-message" data-dz-message>
                                                                <input type="file" accept="image/png, image/jpeg" name="kimlikon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kyc-upload-img">
                                                        <img src="{{asset('passets/images/vector-id-front.png')}}" alt="vector">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gaps-3x"></div>
                                            <span class="upload-title">@lang('panel.kiupload')</span>
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <div class="upload-box">
                                                        <div class="upload-zone">
                                                            <div class="dz-message" data-dz-message>
                                                                <input type="file" accept="image/png, image/jpeg" name="kimlikarka">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kyc-upload-img">
                                                        <img src="{{asset('passets/images/vector-id-back.png')}}" alt="vector">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gaps-1x"></div>
                                        </div>
                                        <div class="tab-pane fade" id="driver-licence">
                                            <h5 class="kyc-upload-title">@lang('panel.pastitle')</h5>
                                            <ul class="kyc-upload-list">
                                                <li>@lang('panel.pas1')</li>
                                                <li>@lang('panel.pas2')</li>
                                                <li>@lang('panel.pas3')</li>
                                            </ul>
                                            <div class="gaps-4x"></div>
                                            <span class="upload-title">@lang('panel.surucutit')</span>
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <div class="upload-box">
                                                        <div class="upload-zone">
                                                            <div class="dz-message" data-dz-message>
                                                                <input type="file" accept="image/png, image/jpeg" name="surucu">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kyc-upload-img">
                                                        <img src="{{asset('passets/images/vector-licence.png')}}" alt="vector">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gaps-1x"></div>
                                        </div>
                                    </div>
                                    <div class="gaps-2x"></div>
                                        <button class="btn btn-primary" type="submit">@lang('panel.bgonder')</button>
                                    <div class="gaps-2x"></div>
                                </div><!-- .from-step-content -->
                            </div><!-- .from-step-item -->
                            <!-- 
                            <div class="from-step-item">
                                <div class="from-step-heading">
                                    <div class="from-step-number">03</div>
                                    <div class="from-step-head">
                                        <h4>Step 3 : Your Paying Wallet</h4>
                                        <p>Submit your wallet address that you are going to send funds</p>
                                    </div>
                                </div>
                                <div class="from-step-content">
                                    <div class="note note-md note-info note-plane">
                                        <em class="fas fa-info-circle"></em> 
                                        <p>DO NOT USE your exchange wallet address such as Kraken, Bitfinex, Bithumb, Binance etc.</p>
                                    </div>
                                    <div class="gaps-2x"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="swalllet" class="input-item-label">Source of Your Wallet</label>
                                                <select class="input-bordered" name="swalllet" id="swalllet">
                                                    <option value="eth">Ethereum</option>
                                                    <option value="dac">DashCoin</option>
                                                    <option value="bic">BitCoin</option>
                                                </select>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="input-item input-with-label">
                                        <label for="token-address" class="input-item-label">Enter your wallet address</label>
                                        <input class="input-bordered" type="text" id="token-address" name="token-address" value="0xde0b295669a9fd93d5f28d9ec85e40f4cb697bae">
                                        <span class="input-note">Note: Address should be ERC20-compliant. Make sure that you hold this wallet private key.</span>
                                    </div>
                                    <div class="gaps-2x"></div>
                                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#kycConfirm">Submit Details</a>
                                    <div class="gaps-2x"></div>
                                </div>
                            </div> -->
                        </div><!-- .from-step -->
                    </form>
                </div><!-- .user-kyc -->
            </div><!-- .user-content -->
        </div><!-- .d-flex -->
    </div><!-- .container -->
</div>
<!-- UserWraper End -->


<div class="modal fade" id="kycConfirm" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="kyc-popup">
                <h2 class="text-center">Confirm Information</h2>
                <div class="input-item">
                    <input class="input-checkbox" id="term-condition" type="checkbox">
                    <label for="term-condition">I have read the <a href="#">Terms of Condition</a> and <a href="#">Privary Policy.</a></label>
                </div>
                <div class="input-item">
                    <input class="input-checkbox" id="info-currect" type="checkbox">
                    <label for="info-currect">All the personal information I have entered is correct.</label>
                </div>
                <div class="input-item">
                    <input class="input-checkbox" id="certification" type="checkbox">
                    <label for="certification">I certify that, I am perticipating in the token distribution event in the capacity of an individual (and benificial owner) and not as an agent (or representative of a third party corporate entity.</label>
                </div>
                <div class="input-item">
                    <input class="input-checkbox" id="tokenKnow" type="checkbox">
                    <label for="tokenKnow">I understand that, I can only in the token distribution event with the wallet address that was entered in the application form.</label>
                </div>
                <div class="gaps-2x"></div>
                <div class="text-center"><a href="kyc-status.html" class="btn btn-primary">Process for Verify</a></div>
            </div><!-- .modal-content -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- Modal End -->
@endsection