@extends('layout.main')
@section('title')
    <title>Edit vehicle</title>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Edit Vehicle <i class="fa-regular fa-pen-to-square"></i></h3>
            </div>
        </div>
        <form class="form-edit" method="post" action="{{URL::to('/update-vehicle')}}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="">Brand</label>
                        <input type="hidden" name="idVehicle" value="{{$data_vehicle->id}}">
                        <input type="text" class="form-control" name="brand" id="brand" value="{{$data_vehicle->brand}}" placeholder="Brand">
                    </div>
                    <div class="mb-3">
                        <label for="">Model</label>
                        <input type="text" id="model" name="model" class="form-control" value="{{$data_vehicle->model}}"  placeholder="Model">
                    </div>
                    <div class="mb-3">
                        <label for="">Plate</label>
                        <input type="text" id="plate" name="plate" class="form-control" value="{{$data_vehicle->plate}}"  placeholder="Plate">
                    </div>
                    <div class="mb-3">
                        <label for="">License</label>
                        <select class="form-control" name="license" id="license" required>
                            @foreach ($data_driver as $driver)
                                @if ($data_vehicle->licenseRiquered == $driver->license)
                                <option selected value="{{$data_vehicle->licenseRiquered}}">{{$data_vehicle->licenseRiquered}}</option>
                                @else
                                <option value="{{$driver->license}}">{{$driver->license}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <button class="form-control btn btn-success" id="submit" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
