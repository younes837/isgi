@extends('layout')
@section('content')
<section id="home" class="d-flex align-items-center py-4" >
    <div class="container">
    <div class="row">
        <div class="col-6 d-flex flex-column justify-content-center pt-4  ">
        <h1 class='text-white'>Institut Spécialisé de Gestion et d'Informatique</h1>
        <h2 class='text-white'>Nous sommes spécialisés dans la formation professionnelle dans les métiers d'administration, du Marketing et du Digital</h2>
        <div class="d-flex justify-content-center  mt-5">
            <a href="" class="btn btn-primary rounded-pill fs-5">Commençons</a>
            <a href="https://www.youtube.com/watch?v=uU74QEOaQVY" width="30" height="30" fill="white" class="bi bi-play-circle ms-5" viewBox="0 0 16 16">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-play-circle mb-1 mx-1" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
            </svg>
            
            <span class='fs-4 text-white'>Regardez la vidéo</span></a>
        </div>
        </div>
        <div class="col-6 ">
        <img src="assets/css/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
    </div>
    </div>
    </section>
</div>
@endsection