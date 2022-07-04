@extends('layouts.app')

@section('app_contents')
    <form action="{{ route('comics.update', ['comic' => $selected_comic->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title"
                value="{{ old('title') ? old('title') : $selected_comic->title }}">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description"
                value="{{ old('description') ? old('description') : $selected_comic->description }}">
        </div>
        <div>
            <label for="thumb">URL Poster</label>
            <input type="text" id="thumb" name="thumb"
                value="{{ old('thumb') ? old('thumb') : $selected_comic->thumb }}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price"
                value="{{ old('price') ? old('price') : $selected_comic->price }}">
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" id="series" name="series"
                value="{{ old('series') ? old('series') : $selected_comic->series }}">
        </div>
        <div>
            <label for="sale_date">Sale date (Es. YYYY-mm-dd)</label>
            <input type="text" id="sale_date" name="sale_date"
                value="{{ old('sale_date') ? old('sale_date') : $selected_comic->sale_date }}">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" id="type" name="type"
                value="{{ old('type') ? old('type') : $selected_comic->type }}">
        </div>

        <button type="submit">Edit Comic</button>
    </form>
@endsection
