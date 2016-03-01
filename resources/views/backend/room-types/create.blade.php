@extends('layouts.admin')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Add new room type
                    </header>
                    <div class="panel-body">
                        {!! Form::open(['method' => 'POST', 'url' => route('admin.room-types.store')]) !!}

                        @include('backend.room-types._form')

                        {!! Form::close() !!}

                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection