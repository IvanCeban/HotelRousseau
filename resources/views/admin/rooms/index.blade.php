@extends('layouts.admin')
@section('title')
    Rooms
@endsection
@section('scripts')
    <script src="{{ asset('/admins/assets/fancybox/source/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('/admins/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('/admins/js/toucheffects.js') }}"></script>
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
                                <h3><% room.title %> <span class="badge bg-success"><% indexedRoomTypes[room.room_type_id] %></span></h3>
                                <p><% room.description %></p>
                                <span class="label label-primary">Reserved</span> : <input type="checkbox" ng-true-value="1" ng-false-value="'0'" ng-model="room.reserved" ng-change="updateReservedRoom(room)">
                            </div>
                            <div class="col-md-4">
                                <div class="pull-right">
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
            <script type="text/ng-template" id="photos.html">
                <div class="modal-header">
                    <h3 class="modal-title">Photos of <% editedRoom.title %></h3>
                </div>
                <div class="modal-body">
                    <section class="panel">
                        <header class="panel-heading">
                            Photos Gallery
                        </header>
                        <div style="border: 1px solid red;">
                            watching model:
                            <div class="button" ng-file-select ng-model="files">Upload using model $watch</div>
                            <div class="button" ng-file-select ng-file-change="upload($files)">Upload on file change</div>
                            Drop File:
                            <div ng-file-drop ng-model="files" class="drop-box"
                                 drag-over-class="dragover" ng-multiple="true" allow-dir="true"
                                 accept=".jpg,.png,.pdf">Drop Images or PDFs files here</div>
                            <div ng-no-file-drop>File Drag/Drop is not supported for this browser</div>
                        </div>
                        <div class="panel-body">
                            <ul class="grid cs-style-3">
                                <li>
                                    <figure>
                                        <img src="/admins/img/gallery/4.jpg" alt="img04">
                                        <figcaption>
                                            <h3>Mindblowing</h3>
                                            <span>lorem ipsume </span>
                                            <a class="fancybox" rel="group" href="/admins/img/gallery/4.jpg">Take a look</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/admins/img/gallery/1.jpg" alt="img01">
                                        <figcaption>
                                            <h3>Clean & Fresh</h3>
                                            <span>dolor ament</span>
                                            <a class="fancybox" rel="group" href="/admins/img/gallery/1.jpg">Take a look</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/admins/img/gallery/2.jpg" alt="img02">
                                        <figcaption>
                                            <h3>Flat Concept</h3>
                                            <span>tawseef tasi</span>
                                            <a class="fancybox" rel="group" href="/admins/img/gallery/2.jpg">Take a look</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/admins/img/gallery/5.jpg" alt="img05">
                                        <figcaption>
                                            <h3>Modern</h3>
                                            <span>dkmosa inc</span>
                                            <a class="fancybox" rel="group" href="/admins/img/gallery/5.jpg">Take a look</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/admins/img/gallery/6.jpg" alt="img06">
                                        <figcaption>
                                            <h3>Cheers</h3>
                                            <span>sumon ahmed</span>
                                            <a class="fancybox" rel="group" href="/admins/img/gallery/6.jpg">Take a look</a>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/admins/img/gallery/4.jpg" alt="img04">
                                        <figcaption>
                                            <h3>Freshness</h3>
                                            <span>rerum facilis </span>
                                            <a class="fancybox" rel="group" href="/admins/img/gallery/4.jpg">Take a look</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>

                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" ng-click="ok()">Save</button>
                    <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
                </div>
            </script>
        </div>
    </section>
@endsection