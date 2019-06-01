@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $nameUser }}</h1>

    <ul>
    @foreach($roles as $role)

        <li>{{ $role->name }}</li>

        <ul>
        @foreach($role->permissions as $permission)
            <li>{{ $permission->name }}</li>
        @endforeach
        </ul>

    @endforeach
    </ul>

</div>
@endsection
