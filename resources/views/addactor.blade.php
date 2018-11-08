@extends('layout.base')

@section('title', 'Home')


@section('content')
  <h1>Add an actor</h1>
  <form class="" action="/insertactor" method="post">
      @csrf
      <input required placeholder="rocko" type="text" name="firstName" value="">
      <input required placeholder="tmtc" type="text" name="lastName">
      <input type="submit" name="" value="Insert">
  </form>
  @endsection
