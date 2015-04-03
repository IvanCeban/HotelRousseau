@extends('layouts.admin')
@section('title')
    Rooms
@endsection
@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="{{ asset('/admins/js/angular/room-app.js') }}"></script>
@endsection
@section('content')
    <section class="wrapper" ng-app="roomApp" ng-controller="roomController">
        <h1>Rooms</h1>
        <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><%alert.msg%></alert>
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
                        <div class="btn-group" dropdown is-open="status.isopen">
                            <button type="button" class="btn btn-primary dropdown-toggle" dropdown-toggle ng-disabled="disabled">
                                <% roomTypeSelected.title %> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li ng-repeat="roomType in roomTypes"><a ng-click="setRoomTypeSelected(roomType)"><% roomType.title %></a></li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-success" ng-click="addRoom()">Add</button>
                    <i ng-show="loading" class="fa fa-spinner fa-spin"></i>
                </form>
            </div>
        </section>
        <hr>
        <div class="row">
            <div class="col-md-6">
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
                    <tr ng-repeat='room in filteredRooms'>
                        <td><a href="#"><% room.title %></a></td>
                        <td class="hidden-phone"><% room.description %></td>
                        <td> <% indexedRoomTypes[room.room_types_id] %> </td>
                        <td><input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="room.reserved" ng-change="updateReservedRoom(room)"></td>
                        <td>
                            <button ng-click="setEditedRoom(room);startEditing()" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs" ng-click="open($index)"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div ng-if="shouldShowEditing()" class="col-md-6">
                <section class="panel">
                    <header class="panel-heading">
                        Editing <% editedRoom.title %>
                    </header>
                    <div class="panel-body">
                        <form role="form" ng-submit="updateRoom(editedRoom)">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" ng-model="editedRoom.title" class="form-control" id="title">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button class="btn btn-default" ng-click="cancelEditing()">Cancel</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <pagination boundary-links="true" total-items="totalItems" max-size="maxSize" items-per-page="itemsPerPage" ng-model="currentPage" ng-change="pageChanged()"></pagination>
            </div>
        </div>

        <div class="row">
            <script type="text/ng-template" id="myModalContent.html">
                <div class="modal-header">
                    <h3 class="modal-title">Warning!</h3>
                </div>
                <div class="modal-body">
                    Are you sure you want to remove this room?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" ng-click="ok()">OK</button>
                    <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
                </div>
            </script>
        </div>
    </section>
@endsection