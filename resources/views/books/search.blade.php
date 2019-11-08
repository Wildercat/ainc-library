@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Book') }}</div>

                <div class="card-body">
                    <form method="POST" action="/books/create">
                        @csrf

                        <div class="form-group row">
                            <label for="query" class="col-md-4 col-form-label text-md-right">{{ __('Search:') }}</label>

                            <div class="col-md-6">
                                <input id="query" type="text" class="form-control" name="query" required
                                    autocomplete="query">

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
        @yield('results')
        </div>
    </div>
</div>
@endsection