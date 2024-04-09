@extends('layout.main')
@section('title')
    <title>Edit driver</title>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Edit Driver <i class="fa-regular fa-pen-to-square"></i></h3>
            </div>
        </div>
        <form class="form-edit" method="post" action="{{URL::to('/update-driver')}}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="hidden" name="idDriver" value="{{$data_driver->id}}">
                        <input type="text" class="form-control" name="name_l" id="name_l" value="{{$data_driver->name}}" placeholder="Brand" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Surname</label>
                        <input type="text" id="surname" name="surname" class="form-control" value="{{$data_driver->surname}}"  placeholder="Model" required>
                    </div>
                    <div class="mb-3">
                        <label for="">License</label>
                        <input type="number" name="license" id="license" class="form-control" value="{{$data_driver->license}}"  placeholder="License" required>
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
