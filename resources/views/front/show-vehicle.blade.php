@extends('layout.main')
@section('title')
    <title>Show vehicles</title>
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-dark" href="{{URL::to('/create-vehicle')}}">+ New vehicle <i class="fa-solid fa-car-side"></i></a>
                </div>
                <div class="col-md-12">
                    <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Brand</th>
                            <th scope="col">Model</th>
                            <th scope="col">Plate</th>
                            <th scope="col">License</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_vehicles as $vehicles)
                                <tr>
                                    <td>
                                        <a href="{{URL::to('edit-vehicle/'.$vehicles->id)}}">
                                            {{$vehicles->brand}}
                                        </a>
                                    </td>
                                    <td>
                                        {{$vehicles->model}}
                                    </td>
                                    <td>
                                        {{$vehicles->plate}}
                                    </td>
                                    <td>
                                        {{$vehicles->licenseRiquered}}
                                    </td>
                                    <td>
                                        <button class="btn btn-danger" onclick="deleteVehicle({{$vehicles->id}});"  id="btn-delete">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
