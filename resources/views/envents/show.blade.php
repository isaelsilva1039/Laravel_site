{{-- extendendo o layort criado com o cabeçaho e footer --}}

@extends('layortes.main')

{{-- passando nome do titulo pro titel extendido --}}

@section('titels','{{$event->title}}')
@section('content')

{{-- @section('nomec','welcome') --}}
<div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/envents/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $event->title }}</h1>
        <p class="event-city"><span class="iconify" data-icon="ion-location-outline" data-inline="false"></span> {{ $event->cyti }}</p>
        <p class="events-participants"><ion-icon name="star-outline"></ion-icon> X Participantes</p>
        <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Dono do Evento</p>
        <p class="event-owner"><span class="iconify" data-icon="mdi:calendar" data-inline="false"></span> {{ date('d/m/Y', strtotime($event->date)) }}</p>
        <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
        <h3>O evento conta com:</h3>

      <ul id="items-list">
        @foreach ($event->items as $item )
            <li></ion-icon> <span class="iconify" data-icon="mdi:arrow-right-drop-circle-outline" data-inline="true"></span> {{ $item }}</li>
        @endforeach
    </ul>
      </div>
    </div>
      <div class="col-md-12" id="description-container">
        <h3>Sobre o evento:</h3>
        <p class="event-description">{{ $event->descript }}</p>
      </div>
    </div>
  </div>
@endsection
