@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-8 py-2">
                    <div class="box">
        
                        <div class="content">
                            <div class="row">
                                <header class="align-center">
                                    <h2>{{$book->title}}</h2>
                                </header>
                            </div>
                            <div class="row">
        
                                <div class="col">
                                    @if ($book->checkout)
        
                                    <span> Checked out by:</span>
                                    <a href="{{$book->checkout->user->path()}}"
                                        class="btn btn-primary">{{$book->checkout->user->name}}</a>
        
                                    @else
        
                                    <span>In Stock</span>
                                    <form method="POST" action="/checkouts">
                                        @csrf
                                    <input name="book_id" type="hidden" value="{{$book->id}}">
                                        <button type="submit" class="btn btn-primary">Checkout</button>
                                    </form>
        
                                    @endif
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
@endsection