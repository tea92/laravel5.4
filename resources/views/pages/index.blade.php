@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{ $title }}</h1>
    <p>This is the Laravel application from the "Laravel from scratch" youtube series</p>
    <p>
    	<a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
		<a class="btn btn-success btn-lg" href="/register">Register</a>
    </p>
    </div>
@endsection
