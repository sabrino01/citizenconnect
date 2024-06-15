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

        
    </head>
<body>
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
    <a href="{{ route('service_permis')}}">
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
