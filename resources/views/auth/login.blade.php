@extends('layouts.admin-login')

@section('title')
    Login
@stop

@section('content')
<form method="post" class="form-signin" action="{{ url('/auth/login') }}">
    <h2 class="form-signin-heading">sign in now</h2>
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

        <input name="email" type="text" class="form-control" placeholder="E-Mail Address" value="{{ old('email') }}" autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password">
        <label class="checkbox">
            <input type="checkbox" name="remember" value="remember-me"> Remember me
            <span class="pull-right">
                <a href="{{ url('/password/email') }}">Forgot Password?</a>


            </span>
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        <div class="registration">
            Don't have an account yet?
            <a class="" href="{{ url('/auth/register') }}">
                Create an account
            </a>
        </div>

    </div>

</form>
@endsection