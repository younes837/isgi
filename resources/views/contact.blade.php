@extends('layout')
@section('content')
<section id="contact" class="contact  py-4 container">
<div >
          <h2 class=" text-center my-3 fw-bold">CONTACT</h2>
          <p>L'envoi des message permet renforcer les outils de communication que nous avons mis à disposition de nos stagiaires et entreprises afin de leur donner un moyen pour échanger plus facilemen...</p>
</div>
<div class="row">
<div class="col-6 card mx-4 p-2" style="width: 400px;" >
  <div class="row">
    <div class="col-2 mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#47b2e4" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></div>
<div class="col-10">
  <h4>Adresse:</h4>
  <p>26 Rue d'avesnes, Bd Med V Casablanca</p>
</div>
  </div>
  <div class="row">
    <div class="col-2 mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#47b2e4" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg></div>
<div class="col-10">
  <h4>Email:</h4>
  <p>isgi-casa@ofppt.ma</p>
</div>
  </div>
  <div class="row">
    <div class="col-2 mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#47b2e4" class="bi bi-phone" viewBox="0 0 16 16">
  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></div>
<div class="col-10">
  <h4>Téléphone:</h4>
  <p>+212 22 24 31 88</p>
</div>
  </div>
  <iframe class="mb-2 mx-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106422.90904116486!2d-7.605452799999999!3d33.534771199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sfr!2sma!4v1667061464451!5m2!1sfr!2sma" width="350" height="330" style="border:0;" allowfullscreen></iframe>
  

</div>
<div class="col-6 card p-2 mx-4">
<div class="row">
                <div class="form-group col-6 mb-3">
                  Votre nom
                  <input type="text"  class="form-control"  required>
                </div>
                <div class="form-group col-6 mb-3">
                  Votre Email
                  <input type="email" class="form-control" required>
                </div>
              </div>
              <div class="form-group mb-3">
                Objet
                <input type="text" class="form-control"  required>
              </div>
              <div >
                Message
                <textarea class="form-control"  rows="10" required></textarea>
              </div>
              <div class="text-center mt-5 "><button class="btn btn-primary px-3 " type="submit">Envoyer</button></div>
            </form>
</div>
</div>


</section>

@endsection