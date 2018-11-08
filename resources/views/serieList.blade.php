@extends('layout.base')

@section('title', 'Home')


@section('content')
    <p>check my list!</p>
    <table>
      <tr>
<th>title</th>
<th>year</th>
<th>Actors</th>
<th>Genres</th>
<th>delete</th>
<th>update</th>
    </tr>
 @foreach ($series as $serie)
    <tr>
  <td>{{$serie->title}}</td>
<td>{{$serie->publication_year}}</td>
<td>
  @foreach ($serie->actors as $actor)
      {{ $actor->completeName() }}</br>
  @endforeach
</td>
<td>
  @foreach ($serie->genres as $genre)
      {{ $genre->name }}</br>
  @endforeach
</td>
<td>
<form class="" action="/deleteserie" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$serie->id}}">
  <input type="submit" name="" value="X">
</form>
</td>
<td>
<form class="" action="/updateserie" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$serie->id}}">
  <input type="submit" name="" value="U">
</form>
</td>
   </tr>
 @endforeach
</table>

@endsection
