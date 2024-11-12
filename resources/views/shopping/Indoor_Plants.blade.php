@extends('layouts.appuserui') 
 
@section('content') 
    <div class="container"> 
        <div class="row mt-5"> 
            @if($item14) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/Dracaena.webp') }}" class="card-img-top img-fluid" alt="Product Image 1"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item14->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item14->Description }}</p> 
                            <div class="text-end"> 
                            <a href="{{ route('proddet', ['id' => $item14->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
 
            @if($item15) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/Snake.webp') }}" class="card-img-top img-fluid" alt="Product Image 2"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item15->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item15->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item15->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
 
            @if($item16) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/Peace.webp') }}" class="card-img-top img-fluid" alt="Product Image 3"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item16->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item16->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item16->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
 
            @if($item17) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/Pothos.webp') }}" class="card-img-top img-fluid" alt="Product Image 4"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item17->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item17->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item17->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
 
            @if($item18) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/Spider.webp') }}" class="card-img-top img-fluid" alt="Product Image 5"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item18->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item18->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item18->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div>
                            </div> 
                    </div> 
                </div> 
            @endif 
                @if($item19) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/zz.webp') }}" class="card-img-top img-fluid" alt="Product Image 6"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item19->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item19->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item19->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
 
            @if($item20) 
                <div class="col-md-4 mt-3"> 
                    <div class="card"> 
                        <img src="{{ asset('images/Fiddle.webp') }}" class="card-img-top img-fluid" alt="Product Image 7"> 
                        <div class="card-body"> 
                            <h1 class="alert alert-success text-center">{{ $item20->name }}</h1> 
                            <p class="text-center text-secondary">{{ $item20->Description }}</p> 
                            <div class="text-end"> 
                                <a href="{{ route('proddet', ['id' => $item20->id]) }}" class="btn btn-outline-success">Purchase Details</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            @endif 
        </div> 
    </div> 
@endsection