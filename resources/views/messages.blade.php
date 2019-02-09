@extends('layouts.app')

@section('content')
<h2>Messages</h2>
@if(count($messages)>0)
@foreach($messages as $message)
<ul class="list-group">
  <li class="list-group-item">Name: {{$message->name}}</li>
  <li class="list-group-item">email: {{$message->email}}</li>
  <li class="list-group-item">Message: {{$message->message}}</li>

</ul>
@endforeach
@endif
@endsection

@section('sidebar')
@parent
<p>this is appended to home</p>
@endsection
