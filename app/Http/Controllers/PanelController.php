<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
use App\Models\User;
use App\Models\kyc_app;
use Illuminate\Support\Str;


class PanelController extends Controller
{
    public function langControl($lang)
    {
        $langs = ['tr', 'en'];
        if (!in_array($lang, $langs)) {
            return abort(404);
        }
        return App::setLocale($lang);
    }

    public function registerPage($lang)
    {
        $this->langControl($lang);
        if (Auth::user()) {
            return redirect(route('panel.home', App::currentLocale()));
        }
        return view('panel.register');
    }

    public function register(Request $request)
    {
        $name = $request->name;
        $mail = $request->mail;
        $password = $request->password;
        $repeat = $request->repeat;
        $referance = $request->referance;
        $term = $request->terms;
        $control = User::where('email', $mail)->first();

        if ($name == null || $mail == null || $password == null) {
            return redirect()->back()->withEmpty('Tüm alanları doldurmalısınız');
        } elseif ($control) {
            return redirect()->back()->withMail('mail kullanılıyor');
        } elseif (strlen($password) < 6) {
            return redirect()->back()->withSifre('şifre çok kısa');
        } elseif ($password != $repeat) {
            return redirect()->back()->withRepeat('şifreler birbiri ile uyuşmuyor');
        } elseif ($term == null) {
            return redirect()->back()->withTerm('term boş bırakılamaz');
        } else {
            if ($referance != null) {
                $ref = User::where('referance_code', $referance)->first();
                $user = new User;
                $user->name = $name;
                $user->email = $mail;
                $user->password = bcrypt($password);
                $user->referance_user = $ref->id;
                $user->save();
                if ($user) {                    
                    Auth::login($user);
                    User::where('id', $user->id)->update([
                        'wallet_code'    => $user->id.Str::random(39),
                        'referance_code' => strtoupper($user->id.Str::random(4)),
                    ]);
                    return redirect(route('panel.home', App::currentLocale()))->withRegistered('kayit basarili');
                }
            } else {
                $user = new User;
                $user->name = $name;
                $user->email = $mail;
                $user->password = bcrypt($password);
                $user->save();
                if ($user) {                    
                    Auth::login($user);
                    User::where('id', $user->id)->update([
                        'wallet_code'    => $user->id.Str::random(39),
                        'referance_code' => strtoupper($user->id.Str::random(4)),
                    ]);
                    return redirect(route('panel.home', App::currentLocale()))->withRegistered('kayit basarili');
                }
            }
        }
    }

    public function loginPage($lang)
    {
        $this->langControl($lang);
        if (Auth::user()) {
            return redirect(route('panel.home', App::currentLocale()));
        }
        return view('panel.login');
    }

    public function login(Request $request)
    {
        $email = $request->mail;
        $password = $request->password;
        $remember = true;
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect(route('panel.home', App::currentLocale()))->withLogged('giriş başarılı');
        } else {
            return redirect()->back()->withHata('kullanıcı adı veya şifre hatalı');
        }
    }

    public function logout()
    {
        Auth::logout();
        if (App::isLocale('en')) {
            return redirect(url('en/giris'))->withLogout('çıkış yapıldı');
        } else {
            return redirect(url('tr/giris'))->withLogout('çıkıl yapıldı');
        }
    }

    public function panelPage($lang)
    {
        $this->langControl($lang);
        $loginControl = Auth::user();
        if (!$loginControl) {
            return redirect(route('panel.giris', App::currentLocale()))->withGiris('lütfen giriş yapın');
        }
        return view('panel.home');
    }

    public function kycPage($lang)
    {
        $this->langControl($lang);
        if (Auth::user()->kyc == 1) {
            return redirect(route('panel.home', App::currentLocale()))->withZaten('zaten kyc yapmışsın');
        }
        $kycControl = kyc_app::where('user', Auth::user()->id)->orderBy('id', 'DESC')->first();
        return view('panel.kyc', [
            'kycControl' => $kycControl,
        ]);
    }

    public function kycCreate($lang)
    {
        $this->langControl($lang);
        $kycControl = kyc_app::where('user', Auth::user()->id)->orderBy('id', 'DESC')->first();
        if ($kycControl) {
            return redirect(route('panel.kyc', App::currentLocale()));
        }
        return view('panel.kycapp');
    }
}
