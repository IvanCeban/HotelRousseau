@extends('layouts.admin')
@section('title')
    Rooms
@endsection
@section('scripts')
    <script src="{{ asset('/admins/assets/fancybox/source/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('/admins/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('/admins/js/toucheffects.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/admins/js/jquery.pulsate.min.js') }}"></script>
    <script src="{{ asset('/admins/js/gritter.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admins/js/pulstate.js') }}" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="{{ asset('/admins/js/angular/ng-file-upload-bower-3.2.4/angular-file-upload-shim.js') }}"></script>
    <script src="{{ asset('/admins/js/angular/ng-file-upload-bower-3.2.4/angular-file-upload.js') }}"></script>
    <script src="{{ asset('/admins/js/angular/room-app.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            jQuery(".fancybox").fancybox();
        });
    </script>
@endsection
@section('styles')
    <link href="{{ asset('/admins/assets/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/admins/css/gallery.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/admins/assets/gritter/css/jquery.gritter.css') }}" />
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
                            <div class="col-md-7">
                                <h3><% room.title %> <span class="badge bg-success"><% indexedRoomTypes[room.room_type_id] %></span></h3>
                                <p><% room.description %></p>
                                <span class="label label-primary">Reserved</span> : <input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="room.reserved" ng-change="updateReservedRoom(room)">
                            </div>
                            <div class="col-md-5">
                                <div class="pull-right">
                                    <button class="btn btn-primary btn-sm" ng-click="view(room);"><i class="fa fa-eye"></i> View</button>
                                    <button class="btn btn-primary btn-sm" ng-click="edit(room);"><i class="fa fa-pencil"></i> Edit</button>
                                    <button class="btn btn-info btn-sm" ng-click="photos(room, 'lg')"><i class="fa fa-picture-o "></i> Manage photos</button>
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
            <script type="text/ng-template" id="view.html">
                <div class="modal-header">
                    <h3 class="modal-title">View <% editedRoom.title %></h3>
                </div>
                <div class="modal-body">
                    <span class="badge bg-success"><% roomTypeSelected %></span><br>
                    <h4>Title <span class="label label-default"><% editedRoom.title %></span></h4>
                    <p>Description: <% editedRoom.description %></p>
                    <h4>Rooms count <span class="label label-default"><% editedRoom.rooms_count %></span></h4>
                    <h4>Number of people <span class="label label-default"><% editedRoom.number_of_people %></span></h4>
                    <h4>Surface <span class="label label-default"><% editedRoom.surface %></span></h4>
                    <h4>Price construction <span class="label label-default"><% editedRoom.price_construction %></span></h4>
                    <h4>Price production <span class="label label-default"><% editedRoom.price_production %></span></h4>
                    <h4>Price cost <span class="label label-default"><% editedRoom.price_cost %></span></h4>
                    <h4>Price rack <span class="label label-default"><% editedRoom.price_rack %></span></h4>
                    <h4>Bed kids <span class="label label-default"><% editedRoom.bed_kids %></span></h4>
                    <h4>Bed camp <span class="label label-default"><% editedRoom.bed_camp %></span></h4>
                    <h4>Bed additional <span class="label label-default"><% editedRoom.bed_additional %></span></h4>
                    <h4>Bed total additional <span class="label label-default"><% editedRoom.bed_total_additional %></span></h4>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" ng-click="ok()">OK</button>
                </div>
            </script>
            <script type="text/ng-template" id="edit.html">
                <div class="modal-header">
                    <h3 class="modal-title">Editing <% editedRoom.title %></h3>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <div class="btn-group" dropdown>
                                <button type="button" class="btn btn-primary dropdown-toggle" dropdown-toggle ng-disabled="disabled">
                                    <% roomTypeSelected %> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li ng-repeat="roomType in roomTypes"><a ng-click="setRoomTypeSelected(roomType)"><% roomType.title %></a></li>
                                </ul>
                            </div>
                        </div>
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
                    <form role="form" name="addForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
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
                                    <input type="text" ng-model="room.title" name="title" id="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea rows="5" ng-model="room.description" id="description" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="rooms_count">Rooms count</label>
                                    <input type="text" ng-model="room.rooms_count" class="form-control" id="rooms_count">
                                </div>
                                <div class="form-group">
                                    <label for="number_of_people">Number of people</label>
                                    <input type="text" ng-model="room.number_of_people" class="form-control" id="number_of_people">
                                </div>
                                <div class="form-group">
                                    <label for="surface">Surface</label>
                                    <input type="text" ng-model="room.surface" class="form-control" id="surface">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price_construction">Price construction</label>
                                    <input type="text" ng-model="room.price_construction" class="form-control" id="price_construction">
                                </div>
                                <div class="form-group">
                                    <label for="price_production">Price production</label>
                                    <input type="text" ng-model="room.price_production" class="form-control" id="price_production">
                                </div>
                                <div class="form-group">
                                    <label for="price_cost">Price cost</label>
                                    <input type="text" ng-model="room.price_cost" class="form-control" id="price_cost">
                                </div>
                                <div class="form-group">
                                    <label for="price_rack">Price rack</label>
                                    <input type="text" ng-model="room.price_rack" class="form-control" id="price_rack">
                                </div>
                                <div class="form-group">
                                    <label for="bed_kids">Bed kids</label>
                                    <input type="text" ng-model="room.bed_kids" class="form-control" id="bed_kids">
                                </div>
                                <div class="form-group">
                                    <label for="bed_camp">Bed camp</label>
                                    <input type="text" ng-model="room.bed_camp" class="form-control" id="bed_camp">
                                </div>
                                <div class="form-group">
                                    <label for="bed_additional">Bed additional</label>
                                    <input type="text" ng-model="room.bed_additional" class="form-control" id="bed_additional">
                                </div>
                                <div class="form-group">
                                    <label for="bed_total_additional">Bed total additional</label>
                                    <input type="text" ng-model="room.bed_total_additional" class="form-control" id="bed_total_additional">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" ng-click="ok()">Add</button>
                    <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
                </div>
            </script>
            <script type="text/ng-template" id="photos.html">
                <div class="modal-header">
                    <h3 class="modal-title">Photos of <% editedRoom.title %></h3>
                </div>
                <div class="modal-body">
                    <section class="panel">
                        <header class="panel-heading">
                            Photos Gallery
                        </header>
                        <div class="panel-body">
                            <button ng-multiple="true" ng-file-select ng-model="files" class="btn btn-primary">Add new photos</button>
                            <ul class="grid cs-style-3">
                                <li ng-repeat="file in newFiles">
                                    <figure>
                                        <img ng-src="/<% file.path %>">
                                        <figcaption>
                                            <h3>Mindblowing</h3>
                                            <span>lorem ipsume </span>
                                            <a class="fancybox" rel="group" href="#">Take a look</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li ng-repeat="existentFile in existentFiles">
                                    <figure>
                                        <img ng-src="/<% existentFile.path %>" alt="img04">
                                        <figcaption>
                                            <h3>Mindblowing</h3>
                                            <span>lorem ipsume </span>
                                            <a class="fancybox" rel="group" href="#">Take a look</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>

                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" ng-click="ok()">Ok</button>
                    {{--<button class="btn btn-warning" ng-click="cancel()">Cancel</button>--}}
                </div>
            </script>
        </div>
    </section>
@endsection