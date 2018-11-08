@extends('layout.base')

@section('title', 'Home')


@section('content')
    <h1>Update a serie</h1>
    <form class="" action="/updateserieaction" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $serie->id }}">
        <input required type="text" name="title" value="{{ $serie->title }}">
        <input required type="number" name="publication_year" value="{{ $serie->publication_year }}">
        <select name="actors">
            @foreach ($actors as $actor)
                @if($actor->id == $serie->actors[0]->id)
                    <option selected value="{{ $actor->id }}">
                        {{ $actor->completeName() }}
                    </option>
                @else
                    <option value="{{ $actor->id }}">
                        {{ $actor->completeName() }}
                    </option>
                @endif
            @endforeach
        </select>
        <select name="genres">
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">
                    {{ $genre->name }}
                </option>
            @endforeach
        </select>
        <input type="submit" name="" value="Modify">
    </form>
@endsection
