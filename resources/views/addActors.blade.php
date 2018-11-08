@extends('layout.base')

@section('title', 'Home')


@section('content')
    <p>existing actors!</p>
<table>
  <tr>
    <th>Actors</th>
    <th>delete</th>
    <th>add</th>
  </tr>

      @foreach ($actors as $actor)
        <tr>
          <td>
      {{ $actor->completeName() }}  </br>
    </td>
    <td>
      <form class="" action="/deleteactors" method="post">
      @csrf
      <input type="hidden" name="id" value="{{ $actor->id }}">
      <input type="submit" name="" value="X">
      </form>
    </td>
  </tr>
      @endforeach

</table>
<a href="/addactor">Ajouter</a>
@endsection
