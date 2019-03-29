<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EniXia -@yield('title')</title>

    {{-- Stylesheet --}}
    <link rel="stylesheet" href="storage/app/css/app.css"> {{--Bootstrap--}}

  </head>
  <body style="">
    <header class="px-5 py-2" style="background-color: #850002">
      <h1 class="display-1 text-white"><a class="netral" href="/accueil">EniXia</a><img class="rounded" style="width: 50px" src="storage/app/images/Enixia_coin.png" alt="Logo"/></h1>
      <div class="d-flex">
          <div class="">
            <button type="button" class="btn btn-secondary dropdown-toggle border-0" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #272727; font-size:20px;">
              <i class="material-icons" style="position: relative; top:5px;">menu</i> Menu
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
              <a class="dropdown-item" href="/accueil">Accueil</a>
              <a class="dropdown-item" href="/projets">Projets</a>
              <a class="dropdown-item" href="/about">A propos</a>
              <a class="dropdown-item" href="/contact">Contact</a>
            </div>
          </div>
        </div>

    </header>

    <div class="" style="padding-left: 10%; padding-right: 10%">
        @yield('content')
    </div>
    <script src="/storage/app/public/js/app.js" charset="utf-8"></script>
  </body>
</html>
