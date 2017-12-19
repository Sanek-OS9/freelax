@extends('layouts.app')

@section('title', 'Редактирование ролей - ' . $user->name)

@section('css')
    <link rel="stylesheet" href="{{ elixir("css/core.css") }}">
@endsection

@section('content')
    <form class="form-horizontal" action="{{ route('profile::role-save', ['user' => $user->id]) }}" method="POST">
        {{ csrf_field() }}
        @foreach($roles as $role)
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                        <input type="checkbox" name="role[{{ $role['name'] }}]" @if($user->hasRole($role['name'])) checked @endif /> {{ $role['description'] }} ( {{ $role['caption'] }} ~ {{ $role['name'] }})
                        </label>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Сохранить</button>
            </div>
        </div>
    </form>
@endsection