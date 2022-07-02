<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ViaCepController extends Controller
{
    public function index(Request $request)
    {
       //recebe o paramero passado pelo usuario, para passar como parametro no metodo SHOW
    
      if ($request->cep)
            return redirect('/viacep/'.$request->cep);

        return view('viacep.index');
            
      
    }

    public function show($cep)
    {
        
        $response = Http::get('https://viacep.com.br/ws/'.$cep.'/json/')->json();
        dd($response);

    }

}
