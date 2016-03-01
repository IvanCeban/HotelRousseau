@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
                    Edit room type
                </header>
                <div class="panel-body">
                    {!! Form::model($roomType, ['method' => 'PATCH', 'url' => route('admin.room-types.update', [$roomType->id])]) !!}

                    @include('backend.room-types._form')

                    {!! Form::close() !!}

                </div>
            </section>
        </div>
    </div>
@endsection