@extends('layouts.main-layout')

@section('content')

<div class="blog">

  <h1>You are in the Blog page</h1>
  <p>Click<a href="{{ route('home')}}"> <strong> Here </strong></a>if you want to go in the Home page</p>
  <p>Click<a href="{{ route('about')}}"> <strong> Here </strong></a>if you want to go in the About page</p>

  // test di foreach & if statement su Home & Blog

  @foreach ($data as $name)

    @if ($name['name'] == 'Paolo')

      <h3>Page's Admin: {{ $name['name'] }}</h3>

    @else

      <h3>Page's Moderator: {{ $name['name'] }}</h3>

    @endif

  @endforeach

</div>

@endsection
