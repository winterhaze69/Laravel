@extends('layout.base')

@section('title', 'Home')


@section('content')
  <h1>Add a genre</h1>
  <form class="" action="/insertgenre" method="post">
      @csrf
      <input required placeholder="fantasmagorique" type="text" name="name" value="">
      <input type="submit" name="" value="Insert">
  </form>
  @endsection
