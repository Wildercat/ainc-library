@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="display-3">Books</h2>
            <table class="table table-striped">
                {{-- <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead> --}}
                <tbody>
                    @foreach ($books as $book)

                    <tr>
                        {{-- <th scope="row">1</th> --}}
                        <td><a class="text-primary" href="{{$book->path()}}">{{$book->title}}</a></td>


                        @if ($book->checkout)
                        <td>
                            <span> Checked out by:</span>
                        </td>
                        <td>
                            <a href="{{$book->checkout->user->path()}}"
                                class="text-secondary">{{$book->checkout->user->name}}</a>
                        </td>
                        @else
                        <td>
                            <span>In Stock</span>
                        </td>
                        <td>
                            <form method="POST" action="/checkouts">
                                @csrf
                                <input name="book_id" type="hidden" value="{{$book->id}}">
                                <button type="submit" class="btn btn-primary">Checkout</button>
                            </form>
                        </td>

                        @endif


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($books as $book)
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
        <a href="{{$book->path()}}" class="btn btn-secondary">More..</a>
    </div>

    <div class="col">
        @if ($book->checkout)

        <span> Checked out by:</span>
        <a href="{{$book->checkout->user->path()}}" class="btn btn-primary">{{$book->checkout->user->name}}</a>

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
@endforeach
</div>
</div>

@endsection --}}