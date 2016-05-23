<?php

namespace App\Http\Controllers;

use App\Events\ShotoutAdded;
use App\ShotOut;
use Illuminate\Http\Request;

use App\Http\Requests;

class ShotOutController extends Controller
{

    public function index()
    {
        return view('shotout');
    }

    public function shotout(Request $requests)
    {
        //venim de processar un formulari amb un botó de submit i un textarea.
        //1- Validar.
        //2- Persistencia, model, migracions, seeds, etc. Un lloc on guardar la notificació.
        //3- Enviar.

        $shotout = new ShotOut($requests);
        event(new ShotoutAdded($shotout));
        return view('shotout');
    }
}
