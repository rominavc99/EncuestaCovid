<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Sintoma;

class SintomasController extends Controller
{
    public function index(){
        $sintomas = Sintoma::select('id','sintoma')->get();
        
        return $sintomas;
    }
}
