@extends('layouts.appuserui')

@section('content')

  <div class="container">
    <div class="row mt-5">
      <div class="col">
          @foreach($product as $item)
            <div class="row mt-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <img src="{{$item->image}}" width="200" height="200">
                                </div>
                                <div class="col">
                                  <h1 class="alert alert-success text-center">{{$item->name}}</h1>
                                  <p class="text-center text-secondary">{{$item->Description}}</p>
                                </div>
                            </div>

                            <div class="row mt-2">
                              <div class="col text-end">
                                <a href="{{route('proddet',['id'=>$item->id])}}" class="btn btn-outline-success">Purchase Details</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
      </div>
    </div>
  </div>

@endsection