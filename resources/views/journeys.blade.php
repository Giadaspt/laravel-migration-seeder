@extends('layouts.main')

@section('content')

  <div class="container">
    <h1 class="d-flex justify-content-center p-4">
      Pacchetti di viaggio
    </h1>

    @foreach ($journeys as $journey)

      <div>
        <h3>
          Pacchetto:
          {{$journey->journey_promo}}
        </h3>

        <h4>
          Splendida vacanza nella località di
          {{$journey->location}}
        </h4>
        
        <p>
          nello splendido albergo
          {{$journey->location_to_stay}}
        </p>

        <p>
          @if ($journey->meals_included == 1)
            <p>
              all inclusive
            </p>
          @else
            <p>
              solo soggiorno
            </p>
          @endif
        </p>

        <p>
          della durata di 
          {{$journey->duration}}
          giorni
        </p>

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
  </div>
  
@endsection