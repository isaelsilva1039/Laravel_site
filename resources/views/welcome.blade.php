{{-- extendendo o layort criado com o cabeçaho e footer --}}

@extends('layortes.main')

{{-- passando nome do titulo pro titel extendido --}}

@section('titels','HDV INVES ')
@section('content')

{{-- @section('nomec','welcome') --}}
<div id="search-container" class="col-md-12">
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12 ma">
    @if ($search)
    <h1>Busca Por : {{$search}}</h1>
    @else
    <h1>Busque um evento</h1>
    @endif
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3 ma">
            <img src="/img/envents/{{$event->image}}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0 && $search)
        <p>Não foi posivel encontra nenhun evento por {{$search}}! <a href="/">Ver Todos os eventos</p>  </h4>
        @else
        <p>Não a eventos </p>
        @endif
    </div>
</div>
@endsection
</html>
