<?php

namespace App\Http\Controllers;

use App\User;
use Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;

class UsersController extends Controller
{


    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = Cache::remember('query.users', 10 , function(){
            return User::all();
            }
        );
        return $users;
    }

    public function store()
    {
        User::create(['name' => 'Pepito', 'email' => 'pepito@pepitos.com']);

//        Cache::flush();
//        Cache::forget('query.users');
        //Event::fire('user.change');
        $this->UserHasChanged();

    }

    public function update()
    {
        $user = User::first();
        $user->name = 'pepita';
        $user->save;

//        Cache::flush();
//        Cache::forget('query.users');
//        Event::fire(new UserHasChanged());
        $this->UserHasChanged();
    }

    public function destroy($id)
    {
        User::destroy($id);

//        Cache::flush();
//        Cache::forget('query.users');
//        Event::fire('user.change');
//        Event::fire(new UserHasChanged());
        $this->UserHasChanged();
    }

    public function UserHasChanged()
    {
        Event::fire(new UserHasChanged());
    }
}
