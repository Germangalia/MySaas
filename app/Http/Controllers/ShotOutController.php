<?php
namespace App\Http\Controllers;

use App\Events\ShotoutAdded;
use App\Shotout;
use Auth;
use Event;
use Illuminate\Http\Request;
use App\Http\Requests;

class ShotOutController extends Controller
{
    public function index()
    {
        return view('shotout');
    }
    public function shotout(Request $request)
    {
        if ($request->message == null){
            $request->message = "Error Notification";
        }
        $shotOut = new ShotOut();
        $shotOut->message = $request->get('message');
        $shotOut->user_id = Auth::user()->id;
        $shotOut->save();
        Event::fire(new ShotOutAdded($shotOut));
        return view('shotout');
    }
}
