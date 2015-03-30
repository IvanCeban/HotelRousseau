@extends('layouts.admin-login')
@section('title')
    Reset Password
@stop
@section('content')
<form method="post" class="form-signin" action="{{ url('/password/email') }}">
    <h2 class="form-signin-heading">Reset Password</h2>
    <div class="login-wrap">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

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
        <input name="email" type="text" class="form-control" placeholder="E-Mail Address" value="{{ old('email') }}" autofocus> <br>
        <button class="btn btn-lg btn-login btn-block" type="submit">Send Password Reset Link</button>
        <div class="registration">
            Remembered password?
            <a class="" href="{{ url('/auth/login') }}">
                Login
            </a>
        </div>

    </div>

</form>
@endsection