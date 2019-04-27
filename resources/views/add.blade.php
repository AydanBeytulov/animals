@extends('layouts.app')

@section('content')
    <div class="container add-animal-holder">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>Add animal</h3>
                <hr>
            </div>
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <form method="POST" action="{{ route('addForm') }}" enctype="multipart/form-data">
                            @csrf
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
                                <select class="form-control" name="type" id="animalType">
                                    @foreach ($animalsTypes as $animalType)
                                        <option value="{{ $animalType->id }}">{{ $animalType->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="animalBreed">Animal breed</label>
                                <select class="form-control" name="breed" id="animalBreed">
                                    @foreach ($animalsBreeds as $animalBreed)
                                        <option value="{{ $animalBreed->id }}">{{ $animalBreed->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Name</label>
                                <input type="text" id='animalFile' name="name" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="animalSex">Animal sex</label>
                                <select class="form-control" name="sex" id="animalSex">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Animal image</label>
                                <input type="file" id='animalFile' name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="animalSex">Additional information</label>
                                <textarea class="form-control" name="info"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Price</label>
                                <input type="text" id='animalFile' name="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Date born</label>
                                <input type="text" id='animalFile' name="dateBorn" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Negotiable</label>
                                <input type="checkbox" id='animalFile' name="negotiable" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Free</label>
                                <input type="checkbox" id='animalFile' name="free" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Passport</label>
                                <input type="checkbox" id='animalFile' name="passport" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Vaccines</label>
                                <input type="checkbox" id='animalFile' name="vaccines" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Genealogy</label>
                                <input type="checkbox" id='animalFile' name="genealogy" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Diseases</label>
                                <input type="checkbox" id='animalFile' name="diseases" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="animalFile">In mating season</label>
                                <input type="checkbox" id='animalFile' name="mating" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="animalFile">Meetings</label>
                                <input type="checkbox" id='animalFile' name="meetings" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
