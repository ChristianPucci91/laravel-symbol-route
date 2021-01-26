@extends('layouts.main-layout')

@section('content')


<div class="home">

  <h1>You are in the Home page</h1>
  <p>Click<a href="{{ route('blog')}}"> <strong> Here </strong></a>if you want to go in the Blog page</p>
  <p>Click<a href="{{ route('about')}}"> <strong> Here </strong></a>if you want to go in the About page</p>

   // test di foreach & if statement su Home & Blog
  @foreach ($data as $name)

    @if ($name['name'] == 'Marco')

      <h3>Page's Admin: {{ $name['name'] }}</h3>

    @else

      <h3>Page's Moderator: {{ $name['name'] }}</h3>
      <img src="{{ $name['img']}}" alt="">

    @endif

  @endforeach

</div>

@endsection
