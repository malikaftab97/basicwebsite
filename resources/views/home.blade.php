@extends('layouts.app')

@section('content')
<h2>Home</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

@endsection

@section('sidebar')
@parent
<p>this is appended to home</p>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("h3").hide();
  });
  $("#show").click(function(){
    $("h3").show();
  });
});
</script>
<h3>If you click on the "Hide" button, I will disappear.</h3>
<button id="hide">Hide</button>
<button id="show">Show</button>
@endsection
