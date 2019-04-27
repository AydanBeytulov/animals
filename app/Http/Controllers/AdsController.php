<?php

namespace App\Http\Controllers;

use App\AdsTypes;
use App\Animals;
use App\AnimalsBreeds;
use App\AnimalsImages;
use App\AnimalsTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdsController extends Controller
{
    public function view(Request $request, $id){

        $viewData = array();

        $viewData['animal'] = Animals::find($id);

        return view('view', $viewData);
    }

    public function add(){
        $viewData = array();

        $viewData['adsTypes'] = AdsTypes::all();
        $viewData['animalsTypes'] = AnimalsTypes::all();
        $viewData['animalsBreeds'] = AnimalsBreeds::all();

        return view('add', $viewData);
    }

    public function addForm(Request $request){

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $animal = new Animals();

        $animal->name = $request->input('name');
        $animal->animal_type = $request->input('type');
        $animal->animal_breed = $request->input('breed');
        $animal->sex = $request->input('sex');
        $animal->info = $request->input('info');
        $animal->price = $request->input('price');
        $animal->dateBorn = $request->input('dateBorn');
        $animal->negotiable = $this->checkBoxRead($request->input('negotiable'));
        $animal->free = $this->checkBoxRead($request->input('free'));
        $animal->passport = $this->checkBoxRead($request->input('passport'));
        $animal->vaccines = $this->checkBoxRead($request->input('vaccines'));
        $animal->genealogy = $this->checkBoxRead($request->input('genealogy'));
        $animal->diseases = $this->checkBoxRead($request->input('diseases'));
        $animal->mating = $this->checkBoxRead($request->input('mating'));
        $animal->meetings = $this->checkBoxRead($request->input('meetings'));
        $animal->ad_type = $request->input('adType');
        $animal->user_id = Auth::id();

        if($animal->save()){
            $imageName = rand(1,500).time().rand(1,500).'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);

            $image = new AnimalsImages();

            $image->image = $imageName;
            $image->animal = $animal->id;

            $image->save();
        }


        return $this->add();
    }

    private function checkBoxRead($checkbox){
        if($checkbox == "on"){
            return true;
        }else{
            return false;
        }
    }
}
