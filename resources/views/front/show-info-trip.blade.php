@extends('layout.main')
@section('title')
    <title>Show information trip</title>
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-dark" href="{{URL::to('/create-trip')}}">+ New trip <i class="fa-solid fa-suitcase-rolling"></i></a>
                </div>
                <div class="col-md-12">
                    <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Driver</th>
                            <th scope="col">Status</th>
                            <th scope="col">Vehicle</th>
                            <th scope="col">Model</th>
                            <th scope="col">License</th>
                            <th scope="col">Date Trip</th>
                            <th scope="col">Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_trips as $trips)
                                <tr>
                                    <td>
                                        {{$trips->driver}}
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary">reserved</span>
                                    </td>
                                    <td>
                                        {{$trips->brand}}
                                    </td>
                                    <td>
                                        {{$trips->model}}
                                    </td>
                                    <td>
                                        {{$trips->license}}
                                    </td>
                                    <td>
                                        {{$trips->date}}
                                    </td>
                                    <td>
                                        @if ($trips->driver == $trips->name)
                                            <a class="btn btn-primary" href="{{URL::to('edit-trip/'.$trips->idTrip)}}">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>
                                        @endif
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
