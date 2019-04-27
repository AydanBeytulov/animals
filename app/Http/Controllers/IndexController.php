<?php

namespace App\Http\Controllers;

use App\AdsTypes;
use App\AnimalsBreeds;
use App\AnimalsTypes;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $viewData = array();

        $viewData['adsTypes'] = AdsTypes::all();
        $viewData['animalsTypes'] = AnimalsTypes::all();
        $viewData['animalsBreeds'] = AnimalsBreeds::all();

        return view('index', $viewData);
    }
}
