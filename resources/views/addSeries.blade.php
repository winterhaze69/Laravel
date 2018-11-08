
@extends('layout.base')

@section('title', 'Home')


@section('content')
  <h1>Add a serie</h1>
  <form class="" action="/insertserie" method="post">
      @csrf
      <input required placeholder="Title" type="text" name="title" value="">
      <input required placeholder="1920" type="number" name="publication_year">
      <select name="actors">
          @foreach ($actors as $actor)
              <option value="{{ $actor->id }}">
                  {{ $actor->completeName() }}
              </option>
          @endforeach
      </select>
      <select name="genres">
          @foreach ($genres as $genre)
              <option value="{{ $genre->id }}">
                  {{ $genre->name }}
              </option>
          @endforeach
      </select>
      <input type="submit" name="" value="Insert">
  </form>
  @endsection
