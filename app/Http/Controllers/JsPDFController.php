<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JsPDFController extends Controller
{
    public function createInvoice()
    {
        return view('createinvoice');
    }
}
