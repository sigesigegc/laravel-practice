@extends('layout')

@section('content')
  @foreach ($results as $id => $val)
    <p>
      <span>{{ $id+1 }}</span>
      <img src="{{ $val["image"] }}" alt="">
      {{ $val["text"] }}
    </p>
  @endforeach
@endsection