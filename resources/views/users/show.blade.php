@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="content">
                <header class="align-center">
                    <h2 class="display-4">{{$user->name}}</h2>
                </header>
                <h3>Books Checked Out:</h3>
                <ul>
                    @foreach ($user->checkouts as $checkout)
                    <li>
                        <a href="{{$checkout->book->path()}}">{{$checkout->book->title}}</a>
                        <form method="POST" action="/checkouts/{{$checkout->id}}">
                            @csrf
                            @method('DELETE')
                            <input name="checkout_id" type="hidden" value="{{$checkout->id}}">
                            <button type="submit" class="btn btn-success">Return</button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection