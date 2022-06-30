@extends('layouts.app')

@section('app_contents')
    <ul>
        <li>
            <div class="img">
                <img src="{{ $selected_comic->thumb }}" alt="{{ $selected_comic->title }}">
            </div>
            <div class="title">
                <h3>{{ $selected_comic->title }}</h3>
            </div>
            <div class="description">
                <p>{{ $selected_comic->description }}</p>
            </div>
            <div class="series">
                <strong>Series:</strong>
                <span>{{ $selected_comic->series }}</span>
            </div>
            <div class="type">
                <strong>Genre:</strong>
                <span>{{ $selected_comic->type }}</span>
            </div>
            <div class="price">
                <strong>Price:</strong>
                <span>$ {{ $selected_comic->price }}</span>
            </div>
            <div class="sale_date">
                <strong>Sale date:</strong>
                <span>{{ $selected_comic->sale_date }}</span>
            </div>
        </li>
    </ul>
@endsection
