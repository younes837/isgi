@extends('layout')
@section('content')
<style>
   
</style>
<section id="info" class="d-flex align-items-center py-4 container" >
    <div class='row '>
        <h2 class=" text-center my-3 fw-bold">INSCRIPTION</h2>
        <p class="text-center">Notre offre de formation est ouverte sur plusieurs niveaux et modes (hybride, résidentiel et alterné), en plus du Baccalauréat Professionnel et
Parcours collégial ainsi qu'une large palette de formations qualifiantes.
</p>
<div class="mt-4 d-flex justify-content-center">
    <a href="/tous"  class=" btn btn-outline-info rounded-4 px-3 m-2 " style="color:black;border:none;font-weight: bold;">Tous</a>
    <a href="/infra" class="btn  btn-outline-info rounded-4 px-3 m-2 " style="color:black;border:none;font-weight: bold;">Infra</a>
    <a href="/dev" class="btn btn-outline-info rounded-4 px-3 m-2 " style="color:black;border:none;font-weight: bold;">Dev</a>
    <a href="/gestion" class="btn btn-outline-info rounded-4 px-3 m-2 " style="color:black;border:none;font-weight: bold;">Gestion</a>
    

</div>
<main>
            @yield('content2')
        </main>
</div>
</section>


@endsection