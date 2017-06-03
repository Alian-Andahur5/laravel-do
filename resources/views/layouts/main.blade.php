<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>AlianAndahur.cl </title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/header.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/social.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/fonts.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
    <body>
      <div class="social">

          <ul>
            <li><a href="http://www." target="_blank" class="icon-facebook"></a></li>
            <li><a href="http://www." target="_blank" class="icon-googleplus"></a></li>
            <li><a href="mailto:alian.andahur.lml@gmail.com"class="icon-mail"></a></li>
          </ul>

      </div>

      <div class="row">
           <header>
                <nav class="white" role="navigation">
                  <div class="nav-wrapper container">
                    <a id="logo-container" href="www.alianandahur.cl" class="brand-logo">World of guitars by </a>
                    <ul class="right hide-on-med-and-down">
                      <li><a href="#">Entrevistas</a></li>
                      <li><a href="#">Galeria</a></li>
                      <li><a href="#">Contacto</a></li>
                    </ul>

                    <ul id="nav-mobile" class="side-nav">
                      <li><a href="#">Navbar Lin</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                  </div>
                </nav>
           </header>
   <div>


      @yield('content')


<footer class="page-footer teal">
   <div class="container">
     <div class="row">
       <div class="col l6 s12">
         <h5 class="white-text">Company Bio</h5>
         <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


       </div>
       <div class="col l3 s12">
         <h5 class="white-text">Contacto</h5>
         <ul>
           <li><a class="white-text" href="#!">mail alian.andahur.lml@gmail.com</a></li>
           <li><a class="white-text" href="#!">Link 2</a></li>
           <li><a class="white-text" href="#!">Link 3</a></li>
           <li><a class="white-text" href="#!">Link 4</a></li>
         </ul>
       </div>
       <div class="col l3 s12">
         <h5 class="white-text">Tambien puedes visitar</h5>
         <ul>
           <li><a class="white-text" href="https://www.youtube.com/channel/UCuRE9d41HODLJExP0qC7m_g/videos"></a></li>
           <li><a class="white-text" href="#!">Link 2</a></li>
           <li><a class="white-text" href="#!">Link 3</a></li>
           <li><a class="white-text" href="#!">Link 4</a></li>
         </ul>
       </div>
     </div>
   </div>
   <div class="footer-copyright">
     <div class="container">
     © 2017 Copyright <a class="brown-text text-lighten-3" href="www.alianandahur.cl">www.alianandahur.cl</a>
     </div>
   </div>
 </footer>



       <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>

        @yield('scripts')

    </body>

</html>
