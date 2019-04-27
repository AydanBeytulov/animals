@extends('layouts.app')

@section('content')
   <div class="index-background">
       <div class="container index">
           <div class="row justify-content-center">
               <div class="col-md-12">
                   <div class="col-md-4 index-search">
                       <form method="GET" action="{{ route('search') }}">

                           <div class="form-group">
                               <label for="adType">Ad type</label>
                               <select class="form-control" name="adType" id="adType">
                                   @foreach ($adsTypes as $adType)
                                       <option value="{{ $adType->id }}">{{ $adType->name }}</option>
                                   @endforeach
                               </select>
                           </div>

                           <div class="form-group">
                               <label for="animalType">Animal type</label>
                               <select class="form-control" name="animalType" id="animalType">
                                   @foreach ($animalsTypes as $animalType)
                                       <option value="{{ $animalType->id }}">{{ $animalType->name }}</option>
                                   @endforeach
                               </select>
                           </div>

                           <div class="form-group">
                               <label for="animalBreed">Animal breed</label>
                               <select class="form-control" name="animalBreed" id="animalBreed">
                                   @foreach ($animalsBreeds as $animalBreed)
                                       <option value="{{ $animalBreed->id }}">{{ $animalBreed->name }}</option>
                                   @endforeach
                               </select>
                           </div>

                           <div class="form-group">
                               <label for="animalSex">Animal sex</label>
                               <select class="form-control" name="animalSex" id="animalSex">
                                   <option value="1">Male</option>
                                   <option value="2">Female</option>
                               </select>
                           </div>

                           <button type="submit" class="btn btn-primary">Search</button>

                           <a href="{{ route('showAdvancedSearch') }}">Advanced Search</a>
                       </form>

                   </div>
               </div>

           </div>

       </div>
   </div>

   <div class="index-bottom-line"> </div>


   <div>
       <div class="container ">
           <div class="row justify-content-center servica-box-holder">
               <div class="col-md-3">
                   <div class="serviceBox">
                       <!-- service icon -->
                       <div class="service-icon">
                           <i class="flaticon-animal-13"></i>
                       </div>
                       <!-- service content -->
                       <div class="service-content">
                           <h6>Breeding & sale</h6>
                           <p>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                           </p>
                           <a class="btn btn-primary" href="services-single.phtml">read more</a>
                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="serviceBox">
                       <!-- service icon -->
                       <div class="service-icon">
                           <i class="flaticon-animal-1"></i>
                       </div>
                       <!-- service content -->
                       <div class="service-content">
                           <h6>Find & add</h6>
                           <p>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                           </p>
                           <a class="btn btn-primary" href="services-single.phtml">read more</a>
                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="serviceBox">
                       <!-- service icon -->
                       <div class="service-icon">
                           <i class="flaticon-dog-training-3"></i>
                       </div>
                       <!-- service content -->
                       <div class="service-content">
                           <h6>Message & Meet</h6>
                           <p>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                           </p>
                           <a class="btn btn-primary" href="services-single.phtml">read more</a>
                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="serviceBox">
                       <!-- service icon -->
                       <div class="service-icon">
                           <i class="flaticon-dog-pet-allowed-hotel-signal"></i>
                       </div>
                       <!-- service content -->
                       <div class="service-content">
                           <h6>Happy pet</h6>
                           <p>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                           </p>
                           <a class="btn btn-primary" href="services-single.phtml">read more</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
