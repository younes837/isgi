<!doctype html>
<html >
<head>
    <meta charset="utf-8">
    <title>ISGI CASA</title>
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
        <nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid mx-4 my-3">
            <div><a class="navbar-brand fs-2 fw-bold text-white" href="/">ISGI CASA</a></div>
            <div> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id='items'>
                    <li class="nav-item">
                    <a class="nav-link text-white"href="/">Acceuil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="/about">Qui sommes nous?</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="/former">Se former</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="/inscrire">S'inscrire</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="/equipe">Notre équipe</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nos services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Elearning</a></li>
                        <li><a class="dropdown-item" href="">Activités parascolaire</a></li>
                        <li><a class="dropdown-item" href="">Communication</a></li>
                        <li><a class="dropdown-item" href="">S'enregistrer</a></li>
                    </ul>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link text-white" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item ">
                    <a class="btn btn-outline-primary text-white rounded-pill" href="#">Commençons</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        </nav>
        
        <main>
            @yield('content')
        </main>
    </div>

</body>
</html>
