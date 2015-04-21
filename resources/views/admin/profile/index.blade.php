@extends('layouts.admin')
@section('title')
    Profile
@endsection
@section('scripts')
    <script src="{{ asset('/admins/assets/jquery-knob/js/jquery.knob.js') }}"></script>
    {{--<script src="{{ asset('/admins/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('/admins/js/toucheffects.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/admins/js/jquery.pulsate.min.js') }}"></script>
    <script src="{{ asset('/admins/js/gritter.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admins/js/pulstate.js') }}" type="text/javascript"></script>--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="{{ asset('/admins/js/angular/ng-file-upload-bower-3.2.4/angular-file-upload-shim.js') }}"></script>
    <script src="{{ asset('/admins/js/angular/ng-file-upload-bower-3.2.4/angular-file-upload.js') }}"></script>
    <script src="{{ asset('/admins/js/angular/profile-app.js') }}"></script>
    <script type="text/javascript">
        $(".knob").knob();
    </script>
@endsection
@section('styles')
    {{--<link href="{{ asset('/admins/assets/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/admins/css/gallery.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/admins/assets/gritter/css/jquery.gritter.css') }}" />--}}
@endsection
@section('content')
    <section class="wrapper" ng-app="profileApp" ng-controller="profileController">
        <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><%alert.msg%></alert>
        <div class="row">
            <div class="col-md-3">
                <section ng-show="shouldShowViewing()" class="panel">
                    <header class="panel-heading">
                        Profile View
                        <div class="pull-right">
                            <button class="btn btn-primary btn-sm" ng-click="startEditing();"><i class="fa fa-pencil"></i> Edit</button>
                        </div>
                    </header>
                    <div class="panel-body">
                        <img ng-src="/<% user.photo != '' && user.photo || 'admins/img/no-photo-available-hi.png' %>" width="150">
                        <button ng-file-select ng-model="files" class="btn btn-primary"><i class="fa fa-upload"></i></button>
                        <h4>Name: <strong><% user.name %></strong></h4>
                        <h4>Email: <strong><% user.email %></strong></h4>
                    </div>
                </section>

                <section ng-show="shouldShowEditing()" class="panel">
                    <header class="panel-heading">
                        Profile Edit
                        <div class="pull-right">
                            <button class="btn btn-danger btn-sm" ng-click="startViewing();"><i class="fa fa-ban"></i> Cancel</button>
                        </div>
                    </header>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" ng-model="user.name">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" ng-model="user.email">
                            </div>
                            <div class="form-group">
                                <label>Old password</label>
                                <input type="password" class="form-control" ng-model="user.oldPassword" placeholder="Enter old password">
                            </div>
                            <div class="form-group">
                                <label>New password</label>
                                <input type="password" class="form-control" ng-model="user.newPassword" placeholder="Enter new password">
                            </div>
                            <div class="form-group">
                                <label>Retype new password</label>
                                <input type="password" class="form-control" ng-model="user.confirmPassword" placeholder="Retype new password">
                            </div>
                            <button ng-click="updateProfile()" class="btn btn-info">Update</button>
                        </form>

                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection