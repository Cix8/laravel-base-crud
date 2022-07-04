@extends('layouts.app')

@section('app_contents')
    <h1>Add a new Comic Strip</h1>
    
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}">
        </div>
        <div>
            <label for="thumb">URL Poster</label>
            <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}">
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" id="series" name="series" value="{{ old('series') }}">
        </div>
        <div>
            <label for="sale_date">Sale date (Es. YYYY-mm-dd)</label>
            <input type="text" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" id="type" name="type" value="{{ old('type') }}">
        </div>

        <button type="submit">Add Comic</button>
    </form>
@endsection