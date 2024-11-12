@extends('layouts.appuserui')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-start">Welcome to Bloom Online Store!</h3>
            <p class="text-start text-info">A wide selection of seedlings and plants - All gardening tools and supplies - Competitive prices - Fast and secure delivery service.</p>
        </div>
    </div>


    <div class="row mt-5">
        <!-- Indoor Plants Card -->
        <div class="col-md-12 mb-4">
            <div class="card" style="border: 2px solid #adc8be;">
                <img src="{{ asset('images/Indoor plants.png') }}" class="card-img-top" alt="Indoor Plants">
                <div class="card-body text-center">
                    <h3 style="font-family: Arial, sans-serif; color: #d1a7c6;">Indoor Plants</h3>
                    <a href="{{route('Indoor_Plants')}}" class="btn btn-outline-primary mt-3" style="background-color: #d1a7c6; color: white;">
                        Browse All Products →
                    </a>
                </div>
            </div>
        </div>

        <!-- Outdoor Plants Card -->
        <div class="col-md-12 mb-4">
            <div class="card" style="border: 2px solid #adc8be;">
                <img src="{{ asset('images/Outdoorplants.png') }}" class="card-img-top" alt="Outdoor Plants">
                <div class="card-body text-center">
                    <h3 style="font-family: Arial, sans-serif; color: #ffd966;">Outdoor Plants</h3>
                    <a href="{{route('Outdoor_plants')}}" class="btn btn-outline-warning mt-3" style="background-color: #ffd966; color: white;">
                        Browse All Products →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <!-- Gardening Tools Card -->
        <div class="col-md-12 mb-4">
            <div class="card" style="border: 2px solid #adc8be;">
                <img src="{{ asset('images/Gardening Tools.png') }}" class="card-img-top" alt="Gardening Tools">
                <div class="card-body text-center">
                    <h3 style="font-family: Arial, sans-serif; color: #d9b3ff;">Gardening Tools</h3>
                    <a href="{{route('Gardening_Tools')}}" class="btn btn-outline-secondary mt-3" style="background-color: #d9b3ff; color: white;">
                        Browse All Products →
                    </a>
                </div>
            </div>
        </div>

        <!-- Seeds Card -->
        <div class="col-md-12 mb-4">
            <div class="card" style="border: 2px solid #adc8be;">
                <img src="{{ asset('images/seeds.png') }}" class="card-img-top" alt="Seeds">
                <div class="card-body text-center">
                    <h3 style="font-family: Arial, sans-serif; color: #cd7f32;">Seeds</h3>
                    <a href="{{route('Seeds')}}" class="btn btn-outline-dark mt-3" style="background-color: #cd7f32; color: white;">
                        Browse All Products →
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
