@extends('layouts.admin')

@section('title')
    Room types
@endsection

@section('scripts')

@endsection

@section('content')
        <div class="row">
            <div class="col-sm-6">
                <section class="panel">
                    <header class="panel-heading">
                        Room Types
                    </header>
                    <header class="panel-heading">
                        <a href="{{route('admin.room-types.create')}}" type="button" class="btn btn-shadow btn-success">Add new Room Type</a>
                    </header>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th width="150"><i class="fa fa-pencil"></i> Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roomTypes as $type)
                            <tr>
                                <td>{{$type->id}}</td>
                                <td>{{$type->title}}</td>
                                <td>
                                    <a  style="float: left" href="{{route('admin.room-types.edit', $type->id)}}" class="btn btn-shadow btn-success btn-xs"><i class="fa fa-pencil"> Edit</i></a>
                                    @include('backend.partials.delete', ['model' => $type, 'route' => 'admin.room-types.destroy'])
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
@endsection