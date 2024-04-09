@extends('layout.main')
@section('title')
    <title>Uster</title>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Vehicles <i class="fa-solid fa-car-side"></i></h5>
                    <div class="card-body">
                      <h5 class="card-title">Total vehicles: {{$vehicles_count}} </h5>
                      <a href="{{URL::to('/create-vehicle')}}" class="btn btn-primary">+ Create new vehicle</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Drivers <i class="fa-regular fa-id-card"></i></h5>
                    <div class="card-body">
                      <h5 class="card-title">Total drivers: {{$drivers_count}} </h5>
                      <a href="{{URL::to('/create-driver')}}" class="btn btn-primary">+ Create new driver</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Trips <i class="fa-solid fa-suitcase-rolling"></i></h5>
                    <div class="card-body">
                      <h5 class="card-title">Total trips: {{$trips_count}} </h5>
                      <a href="{{URL::to('/create-trip')}}" class="btn btn-primary">+ Create new trip</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
