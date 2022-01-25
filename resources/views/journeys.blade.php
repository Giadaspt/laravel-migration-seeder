@extends('layouts.main')

@section('content')

  <div class="container">
    <h1 class="d-flex justify-content-center p-4">
      Pacchetti di viaggio
    </h1>

    <section class="journey_card">
        @foreach ($journeys as $journey)
    
        <div class="holiday">
          <h3 class="pacchetto">
            pacchetto:
            {{$journey->journey_promo}}
          </h3>

          <h4>
            Splendida vacanza nella località di
            {{$journey->location}}
          </h4>
          
          <h5>
            nello splendido albergo
            {{$journey->location_to_stay}}
          </h5>


            @if ($journey->meals_included == 1)
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
            {{$journey->duration}}
            giorni
          </span>

          <p>
            Inizio della vacanza
            {{$journey->beginning_holiday}}
          </p>

          <p>
            @if ($journey->people_per_journey)
              <p>
                Numero di persone per viaggio:
                {{$journey->people_per_journey}}
              </p>
            @elseif ($journey->people_per_journey == 0)
              <h4 class="text-danger">
                Pacchetto esaurito
              </h4>
            @endif
          </p>

          <p>
            al prezzo speciale di 
            {{$journey->price}} 
            euro
          </p>
        </div>
      @endforeach

      
    </section>
  </div>
  
@endsection