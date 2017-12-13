@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ elixir("css/register.css") }}">
@endsection

@section('content')
{{--  <div class="panel">
    <div class="panel-heading">Login</div>

    <div class="panel-body">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">E-Mail Address</label>

                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                    <input id="password" type="password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
                <div class="form-group">
                    <div class="checkbox">
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} />
                        <label for="remember">Remember Me</label>
                   </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>
        </form>
    </div>
    <div class="panel-footer">
        <a class="btn btn-link" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
    </div>
</div>  --}}

<div class="container white z-depth-2">
	<ul class="tabs teal">
		<li class="tab col s3"><a class="white-text active" href="#login">Авторизация</a></li>
		<li class="tab col s3"><a class="white-text" href="#register">Регистрация</a></li>
	</ul>
	<div id="login" class="col s12">
		<form class="col s12">
			<div class="form-container">
				<h3 class="teal-text">Hello</h3>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate">
						<label for="password">Пароль</label>
					</div>
				</div>
				<br>
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="action">Войти</button>
					<br>
					<br>
					<a href="">Забыли пароль?</a>
				</center>
			</div>
		</form>
	</div>
	<div id="register" class="col s12">
		<form class="col s12">
			<div class="form-container">
				<h3 class="teal-text">Welcome</h3>
				<div class="row">
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Имя</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Фамилия</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate">
						<label for="password">Пароль</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password-confirm" type="password" class="validate">
						<label for="password-confirm">Подтвердите пароль</label>
					</div>
				</div>
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="action">Созать аккаунт</button>
				</center>
			</div>
		</form>
	</div>
</div>

@endsection
