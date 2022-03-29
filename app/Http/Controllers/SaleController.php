<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function getsales(){
        return Sale::where('status','=',true)->get();
    }
}
