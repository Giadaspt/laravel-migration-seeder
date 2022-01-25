<header class="container mt-4">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li> --}}
  </ul>
</header>