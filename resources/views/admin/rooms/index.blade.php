@extends('layouts.admin')
@section('title')
    Rooms
@endsection
@section('content')
    <section class="wrapper" ng-app="roomApp" ng-controller="roomController">
            <h1>Rooms index view</h1>
            <div class="row">
                <div class="col-md-4">
                    <input type='text' ng-model="room.title">
                    <button class="btn btn-primary btn-md"  ng-click="addRoom()">Add</button>
                    <i ng-show="loading" class="fa fa-spinner fa-spin"></i>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <table class="table table-striped">
                        <tr ng-repeat='room in rooms'>
                            <td><input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="room.reserved" ng-change="updateRoom(room)"></td>
                            <td><% room.title %></td>
                            <td><button class="btn btn-danger btn-xs" ng-click="deleteRoom($index)">  Delete</button></td>
                        </tr>
                    </table>
                </div>
            </div>
    </section>
@endsection