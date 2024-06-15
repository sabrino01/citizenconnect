<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CitizenConnect</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/page.css')}}">

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

        </main>
    </div>
        <!-- start nab bar -->

<!--start first sec-->
<div class="section firstSec active" id="firstSec">

    <!-- Default Card Example -->
    <div class="card mb-4">
    <a href="{{ route('permis')}}">
        <div class="card-header">
            Permis
        </div>
        <div class="card-body">
            This card uses Bootstrap's default styling with no utility classes added. Global
            styles are the only things modifying the look and feel of this default card example.
        </div>
</a>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
    <a href="{{ route('impots')}}">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Impôts</h6>
        </div>
        <div class="card-body">
            The styling for this basic card example is created by using default Bootstrap
            utility classes. By using utility classes, the style of the card component can be
            easily modified with no need for any custom CSS!
            </div>
</a>
    </div>

    <!-- Default Card Example -->
    <div class="card mb-4">
        <div class="card-header">
            Santé
        </div>
        <div class="card-body">
            This card uses Bootstrap's default styling with no utility classes added. Global
            styles are the only things modifying the look and feel of this default card example.
        </div>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Acte d'etat civil</h6>
        </div>
        <div class="card-body">
            The styling for this basic card example is created by using default Bootstrap
            utility classes. By using utility classes, the style of the card component can be
            easily modified with no need for any custom CSS!
        </div>
    </div>

    <!-- Default Card Example -->
    <div class="card mb-4">
        <div class="card-header">Liste electoral
        </div>
        <div class="card-body">
            This card uses Bootstrap's default styling with no utility classes added. Global
            styles are the only things modifying the look and feel of this default card example.
        </div>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Amendes</h6>
        </div>
        <div class="card-body">
            The styling for this basic card example is created by using default Bootstrap
            utility classes. By using utility classes, the style of the card component can be
            easily modified with no need for any custom CSS!
        </div>
    </div>

  <h2 class="heading">Hello First Section</h2>
  <i class="fa fa-angle-double-up collapse" title="collapse sec"></i>
  <i class="fa fa-angle-double-down uncollapse" aria-hidden="true" title="uncollapse sec"></i>
  <div class="section-content">
    <div class="parent">
      <div class="text">
        <div>
          <h3> First Picture </h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. laborum.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
          </p>
        </div>
      </div>
      <div class="image">
        <img src="{{ asset('impot.jpg')}}" alt="image 1" style="max-width: 75%;">
      </div>
    </div>
    <div class="parent">
      <div class="text">
        <div>
          <h3> Second Picture</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. laborum.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
          </p>
        </div>
      </div>
      <div class="image">
        <img src="{{ asset('impot.jpg')}}" alt="image 1" style="max-width: 75%;">
      </div>
    </div>
  </div>

</div>

<!--start second sec-->
<div class="section secondSec" id="secondSec">
  <h2 class="heading">Hello Second Section</h2>
  <i class="fa fa-angle-double-up collapse" title="collapse sec"></i>
  <i class="fa fa-angle-double-down uncollapse" aria-hidden="true" title="uncollapse sec"></i>
  <div class="section-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <div class="parent">
      <div class="child">
        <i class="fa fa-lightbulb-o fa-3x secTwo"></i>
        <h3>First paragraph</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam.
        </p>
      </div>
      <div class="child">
        <i class="fa fa-keyboard-o fa-2x secTwo"></i>
        <h3>Second paragraph</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam.
        </p>
      </div>
      <div class="child">
        <i class="fa fa-flash fa-3x secTwo"></i>
        <h3>Third paragraph</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam.
        </p>
      </div>
    </div>
    <p class="lastP">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis impedit blanditiis id unde, pariatur vitae voluptas voluptatem, rem atque repellendus distinctio! Omnis nostrum iure laborum ut libero explicabo quo fuga?</p>
  </div>
</div>

<!--start third sec-->
<div class="section thirdSec" id="thirdSec">
  <h2 class="heading">Hello Third Section</h2>
  <i class="fa fa-angle-double-up collapse" title="collapse sec"></i>
  <i class="fa fa-angle-double-down uncollapse" aria-hidden="true" title="uncollapse sec"></i>
  <div class="section-content">
    <div class="parent">
      <div class="imgChild">
        <img src="{{ asset('impot.jpg')}}" alt="img 2" style="max-width: 75%;">
      </div>
      <div class="textChild">
        <div>
          <h3> Third Section</h3>
          <p class="firPara">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod temporer incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostr exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. laborum.
          </p>
          <div>
            <i class="fa fa-cloud-download fa-lg pull-left secthree"></i>
            <div class="download">
              <h4>Download</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="clearfix"></div>
          <div>
            <i class="fa fa-cloud-upload fa-lg pull-left secthree"></i>
            <div class="upload">
              <h4>Upload</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--start forth sec-->
<div class="section forthSec" id="forthSec">
  <h2> Hello Forth Section </h2>
  <i class="fa fa-angle-double-up collapse" title="collapse sec"></i>
  <i class="fa fa-angle-double-down uncollapse" aria-hidden="true" title="uncollapse sec"></i>
  <div class="section-content">
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod temporer.</p>
      <form>
        <div class="parent">
          <div class="childOne">
            <input type="text" name="username" placeholder="Name..." />
            <input type="email" name="email" placeholder="Email..." />
            <input type="text" name="subject" placeholder="Subject..." />
          </div>
          <div class="childTwo">
            <textarea placeholder="Message..."></textarea>
          </div>
        </div>
      </form>
      <button>Send Message</button>
    </div>
  </div>
</div>

<!--start footer-->
<footer class='footer'>CitizenConnect</footer>

<!--scroll up button-->
<div id="scroll-up" class='scrollUp'>
  <i class="fa fa-chevron-up"></i>
</div>
    </body>
    <script src="{{ asset('js/page.js')}}"></script>
</html>
