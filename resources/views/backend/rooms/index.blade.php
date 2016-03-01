@extends('layouts.admin')

@section('title')
    Rooms
@endsection

@section('scripts')

@endsection

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Rooms
                    </header>
                    <header class="panel-heading">
                        <a href="#" type="button" class="btn btn-shadow btn-success">Add new Room</a>
                    </header>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th width="220"><i class="fa fa-pencil"></i> Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $room)
                            <tr>
                                <td>{{$room->id}}</td>
                                <td>{{$room->title}}</td>
                                <td>{{$room->roomType->title}}</td>
                                <td>{{$room->description}}</td>
                                <td>
                                    <a href="#" class="btn btn-shadow btn-success btn-xs"><i class="fa fa-pencil"> Edit</i></a>
                                    <a href="#" class="btn btn-shadow btn-primary btn-xs"><i class="fa fa-picture-o"> Photos</i></a>
                                    <a href="#" class="btn btn-shadow btn-danger btn-xs"><i class="fa fa-trash-o "> Delete</i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
@endsection