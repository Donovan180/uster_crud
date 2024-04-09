@extends('layout.main')
@section('title')
    <title>New vehicle</title>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>+ New Vehicle <i class="fa-solid fa-car-side"></i></h3>
            </div>
        </div>
        <form class="form-edit" method="post" action="{{URL::to('/new-vehicle')}}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="">Brand</label>
                        <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand">
                    </div>
                    <div class="mb-3">
                        <label for="">Model</label>
                        <input type="text" id="model" name="model" class="form-control"  placeholder="Model">
                    </div>
                    <div class="mb-3">
                        <label for="">Plate</label>
                        <input type="text" id="plate" name="plate" class="form-control"  placeholder="Plate">
                    </div>
                    <div class="mb-3">
                        <label for="">License</label>
                        <select class="form-control" name="license" id="license" required>
                            @foreach ($data_driver as $driver)
                                <option value="{{$driver->license}}">{{$driver->license}}</option>
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

