@extends('layouts.app')

@section('content')
    <div class="container search-holder">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-12 ">

                    1 - 10 of total {{ $results->total() }} ads
                    <br> <a href="">New search</a> | <a href="">Edit search</a><br>
                        <hr><br>
                    </div>
                </div>

                <div class="row ">
                @foreach($results as $result)

                    <!-- Pet  -->
                    <div class="adopt-card col-md-6 col-xl-3 ">
                        <div class="card bg-light-custom">
                            <div class="thumbnail text-center">
                                <!-- Image -->
                                <div class="search-image-holder border-irregular1 img-fluid" style="background: url('{{ $result->images[0]->image }}')"></div>
                                <!-- Name -->
                                <div class="caption-adoption">
                                    <h6 class="adoption-header">{{ $result->name }} </h6>
                                    <!-- List -->
                                    <ul class="list-unstyled">
                                        <li><strong>Gender:</strong>
                                            @if($result->sex == 1)
                                                Male
                                            @else
                                                Female
                                            @endif
                                        </li>
                                        <li><strong>Breed: </strong> {{ $result->breed->name }}</li>
                                        <li><strong>Date born:</strong> {{ $result->dateBorn }}</li>
                                    </ul>
                                    <!-- Buttons -->
                                    <div class="text-center">
                                        <a href="{{ route('view',$result->id) }}" class="btn btn-primary">More Info</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /thumbnail -->
                        </div>
                        <!-- /card -->
                    </div>
                @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
