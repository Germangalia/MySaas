<?php

namespace App\Http\Controllers;

use App\CreadorDePerfilesHTML;
use App\CreadorDePerfilesJson;
use App\Profile;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{

    public function show(Profile $profile)
    {
//        $creator = new CreadorDePerfilesHTML();
//        return Auth::user()->profile($creator);
        return $profile->show(Auth::user());
    }
}
