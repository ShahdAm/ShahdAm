@extends('layouts.appuserui')

@section('content')
    <div class="container">
        <div class="row mt-5">
            @if($item1)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/sun.webp') }}" class="card-img-top img-fluid" alt="Product Image 1">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item1->name }}</h1>
                            <p class="text-center text-secondary">{{ $item1->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item1->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($item2)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/clove.webp') }}" class="card-img-top img-fluid" alt="Product Image 2">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item2->name }}</h1>
                            <p class="text-center text-secondary">{{ $item2->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item2->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($item3)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/agratum.webp') }}" class="card-img-top img-fluid" alt="Product Image 3">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item3->name }}</h1>
                            <p class="text-center text-secondary">{{ $item3->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item3->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($item4)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/purble.jpg') }}" class="card-img-top img-fluid" alt="Product Image 4">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item4->name }}</h1>
                            <p class="text-center text-secondary">{{ $item4->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item4->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($item5)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/royal.webp') }}" class="card-img-top img-fluid" alt="Product Image 5">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item5->name }}</h1>
                            <p class="text-center text-secondary">{{ $item5->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item5->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($item6)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/blanket.webp') }}" class="card-img-top img-fluid" alt="Product Image 6">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item6->name }}</h1>
                            <p class="text-center text-secondary">{{ $item6->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item6->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($item7)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/epomia.webp') }}" class="card-img-top img-fluid" alt="Product Image 7">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item7->name }}</h1>
                            <p class="text-center text-secondary">{{ $item7->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item7->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
