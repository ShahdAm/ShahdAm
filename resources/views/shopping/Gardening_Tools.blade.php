@extends('layouts.appuserui') 
 
@section('content') 
    <div class="container"> 
        <div class="row mt-5"> 
            @if($item21) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/PruningShears.jpg') }}" class="card-img-top img-fluid" alt="Product Image 1"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item21->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item21->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item21->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
 
            @if($item22) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/GardenFork.jpg') }}" class="card-img-top img-fluid" alt="Product Image 2"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item22->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item22->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item22->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
 
            @if($item23) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/Trowel.jpg') }}" class="card-img-top img-fluid" alt="Product Image 3"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item23->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item23->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item23->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
 
            @if($item24) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/WateringCan.jpg') }}" class="card-img-top img-fluid" alt="Product Image 4"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item24->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item24->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item24->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
 
            @if($item25) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/PlanterPot.jpg') }}" class="card-img-top img-fluid" alt="Product Image 5"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item25->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item25->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item25->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div>
                            </div> 
                    </div> 
                </div> 
            @endif 
@if($item26) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/RainBoots.jpg') }}" class="card-img-top img-fluid" alt="Product Image 6"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item26->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item26->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item26->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
 
            @if($item27) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/GardeningBag.jpg') }}" class="card-img-top img-fluid" alt="Product Image 7"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item27->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item27->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item27->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
        </div> 
    </div> 
@endsection