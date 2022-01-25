<header class="container mt-4">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === 'journeys') ? 'active' : ''}}" href="{{ route('journeys') }}">Viaggi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  {{(Route::currentRouteName() === 'all_inclusive') ? 'active' : ''}}" href="{{ route('all_inclusive') }}">All inclusive</a>
    </li>
  </ul>
</header>