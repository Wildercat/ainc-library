@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="content">
                <header class="align-center">
                    <h2>{{$book->title}}</h2>
                </header>
            </div>
        </div>
    </div>
</div>
@endsection