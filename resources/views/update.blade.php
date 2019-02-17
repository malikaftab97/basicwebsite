@extends('layouts.app')

@section('content')
<br>
<h2>Update Messages</h2>
{!! Form::open(['url' => 'messages/update']) !!}
   <div class="form-group">
   {{Form::label('message', 'Message')}}
   {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder'=>'Enter Your Message Here'])}}
  </div>
  <div>
  {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
  </div>
{!! Form::close() !!}
@endsection

@section('sidebar')
@parent
<p>this is appended to home</p>
@endsection
