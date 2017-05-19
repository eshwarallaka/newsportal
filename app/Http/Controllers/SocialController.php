<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;
class SocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
	public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        if( Auth::user()->role == 'member' ) return Redirect('/member/dashboard');
		if( Auth::user()->role == 'admin' ) return Redirect('/admin/dashboard');
    }
	public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
			'password'    => '',
            'provider' => $provider,
            'provider_id' => $user->id,
			'role' => 'member',
			'status' => 'Active'
        ]);
    }
   
}
