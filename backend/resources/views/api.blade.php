@extends('layout')
 
@section('content')
  <h1>API情報の表示</h1>
 
  <hr/>
  @foreach($results as $data)
    <pre>
      {{ var_dump($data); }}
    </pre>
  @endforeach
@endsection
