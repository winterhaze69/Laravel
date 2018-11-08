@extends('layout.base')

@if($showAside)
  @include('./layout.sidebar')
@endif

<p>  je suis {{ $name }} ! </p>
<ul>
@foreach($data as $val)
<li>{{ $val }}</li>
@endforeach
</ul>
