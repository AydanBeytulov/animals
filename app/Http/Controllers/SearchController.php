<?php

namespace App\Http\Controllers;

use App\AdsTypes;
use App\Animals;
use App\AnimalsBreeds;
use App\AnimalsTypes;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){

        $viewData = array();

        $viewData['results'] = Animals::paginate(20);

        return view('search',$viewData);
    }

    public function showAdvancedSearch(){
        $viewData = array();

        $viewData['adsTypes'] = AdsTypes::all();
        $viewData['animalsTypes'] = AnimalsTypes::all();
        $viewData['animalsBreeds'] = AnimalsBreeds::all();

        return view('advancedSearch',$viewData);
    }
}
