@extends('layouts.admin')
@section('title')
    Room types
@endsection
@section('content')
    <section class="wrapper" ng-app="roomTypeApp" ng-controller="roomTypeController">
        <h1>Room types</h1>
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
        <hr>
        <div class="row">
            <div class="col-md-3">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> Room type</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat='roomType in roomTypes'>
                        <td><a href="#"><% roomType.title %></a></td>
                        <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs" ng-click="deleteRoomType($index)"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection