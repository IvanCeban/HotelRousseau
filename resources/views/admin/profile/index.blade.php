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
    <script src="{{ asset('/admins/js/pulstate.js') }}" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="{{ asset('/admins/js/angular/ng-file-upload-bower-3.2.4/angular-file-upload-shim.js') }}"></script>
    <script src="{{ asset('/admins/js/angular/ng-file-upload-bower-3.2.4/angular-file-upload.js') }}"></script>
    <script src="{{ asset('/admins/js/angular/room-app.js') }}"></script>--}}
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
    <section class="wrapper" >
        <div class="row">
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Basic Forms
                    </header>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection