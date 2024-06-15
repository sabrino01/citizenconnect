<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CitizenConnect</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/card.css')}}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

        
    </head>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'CitizenConnect') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<div class="main">
    <div class="cards">
    <h2 for="search" style="text-align: center;">Services Public</h2>
    </div>
    <ul class="cards">
    <li class="cards_item">
        <a href="{{ route('service_impots')}}">
      <div class="card">
       <div class="card_content">
          <h2 class="card_title">Impôts</h2>
          <div class="card_text">
            <p>Dig into the freshest veggies of the season! This salad-in-a-jar features a mixture of leafy greens and seasonal vegetables, fresh from the farmer's market.</p>
            </div>
      </div>
      </a>
    </li>

    <li class="cards_item">
    <a href="{{ route('permis.index')}}">
      <div class="card"><div class="card_content">
          <h2 class="card_title">Permis</h2>
          <div class="card_text">
            <p>All great meals take time, but this one takes it to the next level! More than 650 hours of fermenting, brining, aging, and curing goes into each and every one of our legendary Reuben sandwiches.
            </p>
            </div>
      </div>
    </a>
    </li>

    <li class="cards_item">
    <a href="{{ route('impots.index')}}">
      <div class="card">
        <div class="card_content">
          <h2 class="card_title">Carte d'identité</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in this refreshing, shareable dessert.</p>
          </div>
      </div>
    </a>
    </li>

    <li class="cards_item">
    <a href="{{ route('impots.index')}}">
      <div class="card">
       <div class="card_content">
          <h2 class="card_title">Acte d'état civil</h2>
          <div class="card_text">
            <p>Dig into the freshest veggies of the season! This salad-in-a-jar features a mixture of leafy greens and seasonal vegetables, fresh from the farmer's market.</p>
            </div>
      </div>
    </a>
    </li>

    <li class="cards_item">
    <a href="{{ route('impots.index')}}">
      <div class="card"><div class="card_content">
          <h2 class="card_title">Liste éléctorales</h2>
          <div class="card_text">
            <p>All great meals take time, but this one takes it to the next level! More than 650 hours of fermenting, brining, aging, and curing goes into each and every one of our legendary Reuben sandwiches.
            </p>
            </div>
      </div>
    </a>
    </li>
    <li class="cards_item">
    <a href="{{ route('impots.index')}}">
      <div class="card"><div class="card_content">
          <h2 class="card_title">Santé</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in this refreshing, shareable dessert.</p>
          </div>
      </div>
    </a>
    </li>
  </ul>
</div>
</body>
</html>
