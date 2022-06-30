@extends('layouts.app')

@section('app_contents')
    <ul>
        @foreach ($comics as $comic)
            <li>
                <div class="img">
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </a>
                </div>
                <div class="title">
                    <h3>{{ $comic->title }}</h3>
                </div>
                <div class="series">
                    <span>{{ $comic->series }}</span>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
