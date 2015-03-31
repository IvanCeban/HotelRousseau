@extends('layouts.admin')
@section('title')
    Rooms
@endsection
@section('content')
    <section class="wrapper" ng-app="roomApp" ng-controller="roomController">
            <h1>Rooms index view</h1>
            <div class="row">
                <div class="col-md-6">
                    <input type='text' ng-model="room.title">
                    <button class="btn btn-primary btn-md"  ng-click="addRoom()">Add</button>
                    <i ng-show="loading" class="fa fa-spinner fa-spin"></i>
                </div>
            </div>
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
                            <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
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