@extends('admin::auth.layouts.base')

@section('title', trans('admin::messages.login'))
@section('description', trans('admin::messages.login_start'))

@section('content')
<form method="POST" action="{{ route('admin.login') }}">
    {{ csrf_field() }}

    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="help-block">
                {{ $errors->first('email') }}
            </span>
        @endif
    </div>

    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                {{ $errors->first('password') }}
            </span>
        @endif
    </div>

    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox" name="remember"{{ old('remember') ? ' checked' : '' }}>
                    {{ trans('admin::messages.rememeber') }}
                </label>
            </div>
        </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
                {{ trans('admin::messages.login') }}
            </button>
        </div>
    </div>

    <a href="{{ route('admin.password.request') }}">
        I forgot my password
    </a>
</form>
@endsection
