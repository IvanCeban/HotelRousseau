@extends('layouts.admin-login')

@section('title')
    Register
@stop

@section('content')
<form method="post" class="form-signin" action="{{ url('/auth/register') }}">
    <h2 class="form-signin-heading">Register new account</h2>
    <div class="login-wrap">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input name="name" type="text" class="form-control" placeholder="Name" value="{{ old('name') }}" autofocus>
        <input name="email" type="text" class="form-control" placeholder="E-Mail Address" value="{{ old('email') }}">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">

        <button class="btn btn-lg btn-login btn-block" type="submit">Register</button>
        <div class="registration">
            Have an account already?
            <a class="" href="{{ url('/auth/login') }}">
                Login
            </a>
        </div>

    </div>

</form>
@endsection