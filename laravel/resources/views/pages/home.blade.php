@extends('layouts.main-layout')

@section('content')

<h1>You are in the Home page</h1>
<p>Click<a href="{{ route('blog')}}"> <strong> Here </strong></a>if you want to go in the Blog page</p>
<p>Click<a href="{{ route('about')}}"> <strong> Here </strong></a>if you want to go in the About page</p>

@endsection
