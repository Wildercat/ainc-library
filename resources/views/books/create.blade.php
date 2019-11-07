@extends('books.search')

@section('results')
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
        @foreach ($results as $result)

        <tr>
            <th scope="row">1</th>
            <td>{{$result->volumeInfo->title}}</td>
            <td>
                <form method="POST" action="/books">
                    @csrf
                    <input name="title" type="hidden"  value="{{$result->volumeInfo->title}}">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Add') }}
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection