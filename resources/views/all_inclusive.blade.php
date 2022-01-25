@extends('layouts.main')

@section('content')

  <div class="container">
    <h1 class="d-flex justify-content-center p-4">
      Pacchetti di viaggio
    </h1>

    <section class="journey_card">

      @foreach ($all_inclusives as $all_inclusive)
  
      <div class="holiday">
        <h3 class="pacchetto">
          pacchetto:
          {{$all_inclusive->all_inclusive_promo}}
        </h3>

        <h4>
          Splendida vacanza nella località di
          {{$all_inclusive->location}}
        </h4>
        
        <h5>
          nello splendido albergo
          {{$all_inclusive->location_to_stay}}
        </h5>


          @if ($all_inclusive->meals_included == 1)
            <p class="all_inclusive">
              all inclusive
            </p>
          @else
            <p class="soggiorno_only">
              solo soggiorno
            </p>
          @endif


        <span>
          Durata di 
          {{$all_inclusive->duration}}
          giorni
        </span>

        <p>
          Inizio della vacanza
          {{$all_inclusive->beginning_holiday}}
        </p>

        <p>
          @if ($all_inclusive->people_per_all_inclusive)
            <p>
              Numero di persone per viaggio:
              {{$all_inclusive->people_per_all_inclusive}}
            </p>

          @endif
        </p>

        <p>
          al prezzo speciale di 
          {{$all_inclusive->price}} 
          euro
        </p>
      </div>
    @endforeach
    </section>
  </div>
  
@endsection