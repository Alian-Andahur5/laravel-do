@extends('layouts.main')


@section('content')



<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header center teal-text text-lighten-2">Alian Andahur</h1>
      <div class="row center">
        <h5 class="header col s12 light">¡Descubre un mundo infinito a través de una simple guitarra!</h5>
      </div>
      <div class="row center">
        <a href="lecciones" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Comenzar lecciones</a>
      </div>
      <br><br>

    </div>
  </div>
  <div class="parallax"><img src="ali1.jpg" id="Ali1" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">done</i></h2>
          <h5 class="center">Enfoque</h5>

          <p class="light">¡Haz mucho con poco! La misión de cada lick o lesson está empeñada en lograr una buena capacidad del guitarrista a través de conceptos básicos y ejercicios simples.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">library_music</i></h2>
          <h5 class="center">Desarrolla tus técnicas</h5>

          <p class="light">A partir de cada lick, podrás opinar,  presentar dudas, proponer o preguntar acerca del ejercicio. Con el fin de ampliar la entrega de conocimientos, fomentanto un ambiente amigable de críticas constructivas.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">assessment</i></h2>
          <h5 class="center">Conoce mi música</h5>
          <p class="light">Estas cordialmente invitado(a) a escuchar y conocer mi música disponible en esta plataforma, adherido a entrevistas y experiencia de diversidad de artistas.</p>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light">No hay limites, siempre se aprende algo nuevo, !disfruta el contenido¡</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="Ali1.jpg" id="Ali1" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
  <div class="section">

    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h4>Deja tu comentario</h4>
      </div>
   </div>
   <div class="row">
      <div class="col s2">
          <div class="fb-comments" data-href="https://www.facebook.com/alian.andahur"  data-numposts="5"></div>

            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
      </div>
      <div class="col s5 offset-s5">
      <a class="twitter-timeline col-md-offset-3"  href="https://twitter.com/hashtag/puyehue" data-width="500 x 300" data-widget-id="822204907226824704">Tweets sobre #puyehue</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs"); </script>
     </div>
  </div>

  </div>
</div>



<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light">Sigamos aprendiendo, ¡regresa pronto!</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="FD2.gif" alt="Unsplashed background img 3"></div>
</div>



@Stop
@Section('Scripts')



@stop
