@extends('layout.base')

@section('title', 'Home')


@section('content')
    <p>existing genres!</p>
<table>
  <tr>
    <th>Genres</th>
    <th>delete</th>
    <th>add</th>
  </tr>

      @foreach ($genres as $genre)
        <tr>
          <td>
      {{ $genre->name }}  </br>
    </td>
    <td>
      <form class="" action="/deletegenre" method="post">
      @csrf
      <input type="hidden" name="id" value="{{ $genre->id }}">
      <input type="submit" name="" value="X">
      </form>
    </td>
  </tr>
      @endforeach

</table>
<a href="/addgenre">Ajouter</a>
@endsection
