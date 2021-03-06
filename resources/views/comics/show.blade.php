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
            <div class="update-btn">
                <a href="{{ route('comics.edit', ['comic' => $selected_comic->id]) }}">Edit</a>
            </div>
            <div class="del-btn">
                <button id="delete-btn">Delete</button>
            </div>
            <div class="d-none" id="select-list">
                <div class="list-title">
                    <h2>The selected item will be DELETED. Do you really want to continue?</h2>
                </div>
                <ul>
                    <li>
                        <form action="{{ route('comics.destroy', ['comic' => $selected_comic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
    
                            <button type="submit" id="yes-btn">YES</button>
                        </form>
                    </li>
                    <li>
                        <button id="no-btn">NO</button>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
@endsection
