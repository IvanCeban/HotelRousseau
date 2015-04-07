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
        <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><%alert.msg%></alert>
        <i ng-show="loading" class="fa fa-spinner fa-spin"></i>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <pagination boundary-links="true" total-items="totalItems" max-size="maxSize" items-per-page="itemsPerPage" ng-model="currentPage" ng-change="pageChanged()"></pagination>
                </div>
            </div>
        </div>
        <button class="btn btn-success" ng-click="add()">Add room</button>
        <div class="row">
            <div class="col-md-6 col-sm-6" ng-repeat="room in filteredRooms">
                <div class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h3><% room.title %> <span class="badge bg-success"><% indexedRoomTypes[room.room_types_id] %></span></h3>
                                <p><% room.description %></p>
                                <span class="label label-primary">Reserved</span> : <input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="room.reserved" ng-change="updateReservedRoom(room)">
                            </div>
                            <div class="col-md-4">
                                <div class="pull-right">
                                    <button class="btn btn-primary btn-sm" ng-click="edit(room);"><i class="fa fa-pencil"></i> Edit</button>
                                    <button class="btn btn-info btn-sm" ng-click=""><i class="fa fa-picture-o "></i> Add images</button>
                                    <button class="btn btn-danger btn-sm" ng-click="confirmDelete($index)"><i class="fa fa-trash-o "></i> Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <pagination boundary-links="true" total-items="totalItems" max-size="maxSize" items-per-page="itemsPerPage" ng-model="currentPage" ng-change="pageChanged()"></pagination>
                </div>
            </div>
        </div>
        <div class="row">
            <script type="text/ng-template" id="confirmDelete.html">
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
            <script type="text/ng-template" id="edit.html">
                <div class="modal-header">
                    <h3 class="modal-title">Editing <% editedRoom.title %></h3>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" ng-model="editedRoom.title" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea rows="5" ng-model="editedRoom.description" class="form-control" id="description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" ng-click="ok()">Save</button>
                    <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
                </div>
            </script>
            <script type="text/ng-template" id="add.html">
                <div class="modal-header">
                    <h3 class="modal-title">Adding new room</h3>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <div class="btn-group" dropdown>
                                <button type="button" class="btn btn-primary dropdown-toggle" dropdown-toggle ng-disabled="disabled">
                                    <% roomTypeSelected.title %> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li ng-repeat="roomType in roomTypes"><a ng-click="setRoomTypeSelected(roomType)"><% roomType.title %></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" ng-model="room.title" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea rows="5" ng-model="room.description" class="form-control" id="description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" ng-click="ok()">Add</button>
                    <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
                </div>
            </script>
        </div>
    </section>
@endsection