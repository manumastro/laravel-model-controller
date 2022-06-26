<header>

  <nav>
    <ul class="nav">
      <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }} ">Home</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('chisiamo') }}" class="nav-link {{ Route::currentRouteName() === 'chisiamo' ? 'active' : '' }}">Chi Siamo</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('contatti') }}" class="nav-link {{ Route::currentRouteName() === 'contatti' ? 'active' : '' }}">Contatti</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('movie') }}" class="nav-link {{ Route::currentRouteName() === 'movie' ? 'active' : '' }}">Movies</a>
      </li>
    </ul>
  </nav>

</header>