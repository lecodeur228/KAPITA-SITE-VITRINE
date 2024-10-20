	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<div class="d-flex justify-content-center align-content-center align-items-center">
				<img src="{{asset("assets/images/kapyta.png")}}" alt="Kapyta" class="img-fluid" width="80">
				&nbsp;&nbsp;
				<a class="navbar-brand" href="index.html">Kapyta<span></span></a>
			</div>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
				aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">A propos</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('realisation') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('realisation') }}">Réalisations</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">Contactez-nous</a>
                    </li>
                </ul>
            </div>
            
		</div>

	</nav>
	<!-- End Header/Navigation -->