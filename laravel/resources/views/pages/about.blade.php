@extends('layouts.main-layout')

@section('content')

<h1>You are in the About page</h1>

<p>Click<a href="{{ route('blog')}}"> <strong> Here </strong></a>if you want to go in the Blog page</p>
<p>Click<a href="{{ route('home')}}"> <strong> Here </strong></a>if you want to go in the Home page</p>

@endsection
