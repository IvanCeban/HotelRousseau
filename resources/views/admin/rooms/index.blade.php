@extends('layouts.admin')
@section('title')
    Rooms
@endsection
@section('content')
    <section class="wrapper" ng-app="roomApp" ng-controller="roomController">
        <h1>Rooms</h1>
        <section class="panel">
            <header class="panel-heading">Add new room</header>
            <div class="panel-body">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Title</label>
                        <input type="text" ng-model="room.title" class="form-control" id="exampleInputEmail2" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <input type="text" ng-model="room.description" class="form-control" placeholder="Enter description">
                    </div>
                    <div class="form-group">
                        <select class="form-control" ng-model="roomSelected"
                                ng-options="opt as opt.title for opt in roomTypes">
                        </select>
                    </div>
                    <button class="btn btn-success" ng-click="addRoom()">Add</button>
                    <i ng-show="loading" class="fa fa-spinner fa-spin"></i>
                </form>
            </div>
        </section>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> Room title</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                        <th><i class="fa fa-bookmark"></i> Room type</th>
                        <th><i class=" fa fa-edit"></i> Reserved</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat='room in rooms'>
                        <td><a href="#"><% room.title %></a></td>
                        <td class="hidden-phone"><% room.description %></td>
                        <td> - </td>
                        <td><input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="room.reserved" ng-change="updateRoom(room)"></td>
                        <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs" ng-click="deleteRoom($index)"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection