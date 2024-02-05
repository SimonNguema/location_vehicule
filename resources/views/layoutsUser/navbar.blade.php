<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ route('utilisateurs.home.index') }}" class="nav-link">ACCEUIL</a></li>
          <li class="nav-item"><a href="{{ route('utilisateurs.voiture.index') }}" class="nav-link">VOITURES</a></li>
          <li class="nav-item"><a href="{{ route('utilisateurs.reservation.user_location') }} " class="nav-link">RESERVATION</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">SERVICES</a></li>
          <li class="nav-item"><a href="{{ route('utilisateurs.contacter.index') }}" class="nav-link">CONTACT</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">MON COMPTE</a></li>
        </ul>
      </div>
    </div>
  </nav>