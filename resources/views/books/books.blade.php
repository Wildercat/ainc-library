@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($books as $book)
        <div class="col-8 py-2">
            <div class="box">
                
                <div class="content">
                    <header class="align-center">
                        <h2>{{$book->title}}</h2>
                    </header>
                    <div class="align-center">
                        <a href="{{$book->path()}}" class="btn btn-secondary">More..</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection