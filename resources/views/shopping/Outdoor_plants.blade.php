@extends('layouts.appuserui')

@section('content')
    <div class="container">
        <div class="row mt-5">
            @if($item7)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/Rosa Damascena.webp') }}" class="card-img-top img-fluid" alt="Product Image 1">
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

            @if($item8)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/Ipomoea cairica.webp') }}" class="card-img-top img-fluid" alt="Product Image 2">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item8->name }}</h1>
                            <p class="text-center text-secondary">{{ $item8->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item8->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($item9)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/Lavandula.webp') }}" class="card-img-top img-fluid" alt="Product Image 3">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item9->name }}</h1>
                            <p class="text-center text-secondary">{{ $item9->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item9->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($item10)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/Quisqualis Indica.webp') }}" class="card-img-top img-fluid" alt="Product Image 4">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item10->name }}</h1>
                            <p class="text-center text-secondary">{{ $item10->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item10->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($item11)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/Black Mulberry.webp') }}" class="card-img-top img-fluid" alt="Product Image 5">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item11->name }}</h1>
                            <p class="text-center text-secondary">{{ $item11->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item11->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                    </div>
            @endif
            @if($item12)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/Ixzora.webp') }}" class="card-img-top img-fluid" alt="Product Image 6">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item12->name }}</h1>
                            <p class="text-center text-secondary">{{ $item12->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item12->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($item13)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset('images/Ficus altissima.webp') }}" class="card-img-top img-fluid" alt="Product Image 7">
                        <div class="card-body">
                            <h1 class="alert alert-success text-center">{{ $item13->name }}</h1>
                            <p class="text-center text-secondary">{{ $item13->Description }}</p>
                            <div class="text-end">
                                <a href="{{ route('proddet', ['id' => $item13->id]) }}" class="btn btn-outline-success">Purchase Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection