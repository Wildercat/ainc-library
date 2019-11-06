@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
        <div class="col-8 py-4">
            <div class="box">
                <div class="content">
                    <header class="align-center">
                        <h2>{{$checkout->created_at}}</h2>
                        <p>Id: {{$checkout->id}} </p>
                        <p>Book Id: {{$checkout->book_id}}</p>
                        <p>User Id: {{$checkout->user_id}}</p>
                    </header>
                    <div class="align-center">
                        <a href="{{$checkout->path()}}" class="btn btn-secondary">More..</a>
                        <a href="{{$checkout->book->path()}}" class="btn btn-primary">Book</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection