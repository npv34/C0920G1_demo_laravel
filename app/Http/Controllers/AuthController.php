<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    function showFormLogin()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        // mac dinh auth laravel su dung 2 truong email vs password de xac thuc
        $data = [
            'email' => $username,
            'password' => $password
        ];

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('user.index');
        }

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function redirect($provider): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $userGithub = Socialite::driver('github')->user();
            dd($userGithub);
//            $userLogin = User::where('email', $userGithub->email)->get();
//            if (!$userLogin) {
//                $user = new User();
//                $user->name = $userGithub->name;
//                $user->email = $userGithub->email;
//                $user->password = Hash::make(rand(4));
//                $user->save();
////                dd($user);
////                Auth::login($user);
//            } else {
//               // Auth::login($userLogin);
//            }

//            return \redirect()->route('dashboard');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }


//
//        $user = $this->createUser($getInfo,$provider);
//
//        auth()->login($user);
//
//        return redirect()->to('/home');

    }
}
