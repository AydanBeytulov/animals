@extends('layouts.app')

@section('content')
    <div class="container view-animal">  <p class="custom-link"><a href="javascript:void(0);" onclick="window.history.back();">« Go back to search</a></p>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row bg-light-custom border-irregular1 block-padding">



                    <div class="col-lg-4 offset-lg-2">
                        <!-- owl slider -->
                        <div id="owl-adopt-single" class="owl-carousel top-centered-nav owl-theme owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage" >

                                    @foreach($animal->images as $image)
                                        <div class="owl-item" >
                                            <div class="col-md-12 ">
                                                <!-- image -->
                                                <a href="{{ $image->image }}" title="your caption here">
                                                    <img src="{{ $image->image }}" class="border-irregular2 img-fluid hover-opacity" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                        <!-- /owl-carousel -->
                    </div>
                    <!-- /col-md -->
                    <!-- adoption info  -->
                    <div class="col-lg-4 res-margin text-xs-center">
                        <h4><strong>{{ $animal->name }}</strong> </h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled pet-adopt-info">
                                    <li class="h7">Type: <span>{{ $animal->type->name }}</span></li>
                                    <li class="h7">Breed: <span>{{ $animal->breed->name }}</span></li>
                                    <li class="h7">Gender: <span>
                                            @if($animal->sex == 1)
                                                Male
                                            @else
                                                Female
                                            @endif
                                        </span></li>
                                    <li class="h7">Date born: <span>{{ $animal->dateBorn }}</span></li>

                                </ul>
                            </div>
                            <!-- /div-->
                        </div>
                        <!-- /row-->
                        <p class="font-weight-bold">{{ $animal->info }}</p>
                    </div>
                    <!-- /col-md -->
                </div>
                <!-- /row-->
                <div class="col-md-12 mt-5 view-list-options">
                   <ul class="row">
                       <li class="col-md-4">Vaccinated: <span>{!! $animal->vaccines == "1" ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>' !!}</span></li>
                       <li class="col-md-4">Passport: <span>{!! $animal->passport == "1" ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>' !!}</span></li>
                       <li class="col-md-4">Genealogy: <span>{!! $animal->genealogy == "1" ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>' !!}</span></li>
                       <li class="col-md-4">Diseases: <span>{!! $animal->diseases == "1" ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>' !!}</span></li>
                       <li class="col-md-4">In mating season: <span>{!! $animal->mating == "1" ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>'!!}</span></li>
                       <li class="col-md-4">Meetings: <span>{!! $animal->meetings == "1" ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>' !!}</span></li>
                   </ul>

                </div>
                <!-- /col-md-->

            </div>

            <div class="col-lg-4">
            <div class="user-info">
                <div class="price-holder">
                    <div class="price-header">Price</div>
                    <div class="price-sum">
                        2600 SEK
                    </div>
                </div>


                <div class="user-holder">
                    <div class="user-header">User info</div>
                    <div class="user-name">
                        <div class="name">{{ $animal->user->name }}</div>
                        <div class="email">{{ $animal->user->email }}</div>
                    </div>
                </div>


                <div id="map"></div>

                <!-- button -->
                <a href="#" class="btn btn-primary send-user-msg">Send message</a>
                <a href="#" class="btn btn-primary send-user-msg">Phone call</a>
            </div>
            </div>
        </div>
    </div>
@endsection
