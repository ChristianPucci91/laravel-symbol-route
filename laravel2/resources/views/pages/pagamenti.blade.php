@extends('layouts.main-layout')

@section('content')

<h1>Pagamenti</h1>

@foreach ($pagamenti as $pagamento)

  @if ($loop -> even)

    <div class="pagamenti green">

  @else

    <div class="pagamenti red">

  @endif

    <p><strong>Id: </strong>{{ $pagamento['id']}}</p>
    <p><strong>Status: </strong>{{ $pagamento['status']}}</p>
    <p><strong>Price: </strong>{{ $pagamento['price']}}</p>
    <p><strong>Prenotazione Id: </strong>{{ $pagamento['prenotazione_id']}}</p>
    <p><strong>Pagante Id: </strong>{{ $pagamento['pagante_id']}}</p>
    <p><strong>Creata alle ore: </strong>{{ $pagamento['created_at']}}</p>
    <p><strong>Aggiornata alle ore: </strong>{{ $pagamento['updated_at']}}</p>

  </div>

@endforeach

@endsection
