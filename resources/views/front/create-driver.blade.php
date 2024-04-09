@extends('layout.main')
@section('title')
    <title>New driver</title>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>+ New Driver <i class="fa-regular fa-id-card"></i></h3>
            </div>
        </div>
        <form class="form-edit" method="post" action="{{URL::to('/new-driver')}}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name_l" id="name_l" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="">Surname</label>
                        <input type="text" id="surname" name="surname" class="form-control"  placeholder="Surname">
                    </div>
                    <div class="mb-3">
                        <label for="">License</label>
                        <input type="number" name="license" id="license" class="form-control"  placeholder="License">
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

