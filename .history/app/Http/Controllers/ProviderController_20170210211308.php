<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ProviderController extends Controller
{
    public function getOne($id){

        return Excel::load(base_path('import/OCAB.xls'), function($reader){})->all();

        

    }
}