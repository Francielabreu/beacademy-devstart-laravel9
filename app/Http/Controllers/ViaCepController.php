<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViaCepController extends Controller
{
    public function index(Request $request)
    {
        
       
        if ($request->cep) {
            return redirect('/viacep/'.$request->cep);

            return view('viacep.index');
            dd('dd');
        }
    }
}
