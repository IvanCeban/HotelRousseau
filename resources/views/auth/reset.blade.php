@extends('layouts.admin-login')
@section('title')
    Reset Password
@stop
@section('content')
<form method="post" class="form-signin" action="{{ url('/password/reset') }}">
    <h2 class="form-signin-heading">Reset Password</h2>
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
        <input type="hidden" name="token" value="{{ $token }}">
        <input name="email" type="text" class="form-control" placeholder="E-Mail Address" value="{{ old('email') }}" autofocus>
        <input type="password" class="form-control" name="password">
        <input type="password" class="form-control" name="password_confirmation">
        <button class="btn btn-lg btn-login btn-block" type="submit">Reset Password</button>

    </div>

</form>
@endsection