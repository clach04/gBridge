@extends('layout.app')

@section('app_content')

{{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" accept-charset="UTF-8" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}

<div class="container">
    <div class="row">
        &nbsp;
    </div>

    @include('common.messages')

    <div class="row">
        <div class="col m12 l8 offset-l2">
            <div class="card blue-grey lighten-4 black-text">
                <form class="form-horizontal" method="POST" accept-charset="UTF-8" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="card-content black-text">
                        <p><span class="card-title">Register</span></p>
                        @if ($errors->has('email'))
                        <b class="red-text">{{ $errors->first('email') }}</b>
                        @endif
                        <div class="input-field">
                            <input type="email" class="validate" id="email" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">Email</label>
                        </div>

                        @if ($errors->has('password'))
                        <b class="red-text">{{ $errors->first('password') }}</b>
                        @endif
                        <div class="input-field">
                            <input type="password" class="validate" id="password" name="password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="input-field">
                            <input type="password" class="validate" id="password_confirmation" name="password_confirmation" required>
                            <label for="password_confirmation">Password (confirm)</label>
                        </div>

                    </div>
                    <div class="card-action">
                        <button style="width: 100%;" class="btn waves-effect blue" type="submit">
                            <i class="material-icons left">vpn_key</i>Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
