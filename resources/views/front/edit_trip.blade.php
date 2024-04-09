@extends('layout.main')
@section('title')
    <title>Edit trip</title>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Edit Trip <i class="fa-regular fa-pen-to-square"></i></h3>
            </div>
        </div>
        <form class="form-edit" method="post" action="{{route('update.trip')}}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="">Vehicle</label>
                        <input type="hidden" name="idTrip" id="idTrip" value="{{$data_trip->idTrip}}">
                        <input type="date" name="date-trip" value="{{$data_trip->date}}" id="date-trip" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Vehicle</label>
                        <input type="hidden" name="idtrip" value="{{$data_trip->id}}">
                        <select class="form-control" name="vehicle" id="vehicle" disabled required>
                            <option selected value="{{$data_trip->vehicle}}">{{$data_trip->vehicle}}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Driver</label>
                        <select class="form-control" name="driver" id="driver" disabled required>
                            <option selected value="{{$data_trip->driver}}">{{$data_trip->driver}}</option>
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
@section('js')
    <script>
        var url_search_vehicle = "{{URL::to('search-vehicle')}}";
        var url_search_driver = "{{URL::to('search-driver')}}";
    </script>
@endsection
