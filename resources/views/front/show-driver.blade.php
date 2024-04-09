@extends('layout.main')
@section('title')
    <title>Show drivers</title>
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-dark" href="{{URL::to('/create-driver')}}">+ New driver <i class="fa-regular fa-id-card"></i></a>
                </div>
                <div class="col-md-12">
                    <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">License</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_drivers as $drivers)
                                <tr>
                                    <td>
                                        <a href="{{URL::to('edit-driver/'.$drivers->id)}}">
                                            {{$drivers->name}}
                                        </a>
                                    </td>
                                    <td>
                                        {{$drivers->surname}}
                                    </td>
                                    <td>
                                        {{$drivers->license}}
                                    </td>
                                    <td>
                                        <button class="btn btn-danger" onclick="deleteDriver({{$drivers->id}});"  id="btn-delete">
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
