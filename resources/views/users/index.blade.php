@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Users</h2>

            <ul>
            @foreach ($users as $user)


            <li><a href="{{ $user->path() }}"> {{$user->name}}</a></li>



            @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection