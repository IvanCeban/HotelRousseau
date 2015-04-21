@extends('layouts.admin')
@section('title')
    Room types
@endsection
@section('scripts')
    <script src="{{ asset('/admins/js/angular/room-type-app.js') }}"></script>
@endsection
@section('content')
    <section class="wrapper" ng-app="roomTypeApp" ng-controller="roomTypeController">
        <h1>Room types</h1>
        <div class="row">
            <div class="col-md-3">
                <section class="panel">
                    <header class="panel-heading">Add new room type</header>
                    <div class="panel-body">
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <input type="text" ng-model="roomType.title" class="form-control" placeholder="Enter title">
                            </div>
                            <button class="btn btn-success" ng-click="addRoomType()">Add</button>
                            <i ng-show="loading" class="fa fa-spinner fa-spin"></i>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> Type</th>
                        <th width="200"><i class="fa fa-pencil"></i> Edit</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat='roomType in roomTypes'>
                        <td><a href="#"><% roomType.title %></a></td>
                        <td><input type="text" ng-model="roomType.title" class="form-control"></td>
                        <td>
                            <button class="btn btn-success btn-xs" ng-click="updateRoomType(roomType)"><i class="fa fa-check"></i></button>
                            <button class="btn btn-danger btn-xs" ng-really-message="Are you sure?" ng-really-click="deleteRoomType($index)"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection