<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;

use Illuminate\Http\Request;

class LoginController extends Controller
{
      public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
	
	public function handleGoogleCallback()
	{
		$user = Socialite::driver('google')->user();
		$finduser = User::where('google_id', $user->id)->first();
		
		if($finduser){
                //if the user exists, login and show dashboard
                Auth::login($finduser);
                return redirect('/dashboard');
            }else{
			
                //user is not yet created, so create first
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('')
                ]);
			
		//create a personal team for the user
                
				$newTeam = Team::forceCreate([
                    'user_id' => $newUser->id,
                    'name' => explode(' ', $user->name, 2)[0]."'s Team",
                    'personal_team' => true,
                ]);
                // save the team and add the team to the user.
                $newTeam->save();
                $newUser->current_team_id = $newTeam->id;
                $newUser->save();
                //login as the new user
				
                Auth::login($newUser);
                // go to the dashboard
                return redirect('/dashboard');

		}
		
	}
}
