@extends('layout.main')
@section('title')
    <title>Create trip</title>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>New Trip <i class="fa-solid fa-sliders"></i></h3>
            </div>
        </div>
        <form class="form-edit" method="post" action="{{URL::to('/new-trip')}}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="">Date trip</label>
                        <input type="hidden" id="idTrip">
                        <input type="date" name="date-trip" id="date-trip" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Vehicle</label>
                        <select class="form-control" name="vehicle" id="vehicle" disabled required>
                            <option>-- Vehicle --</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Driver</label>
                        <select class="form-control" name="driver" id="driver" disabled required>
                            <option>-- Driver --</option>
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
