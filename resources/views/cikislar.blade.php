<!DOCTYPE html>
<html lang="en">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title>Fusion - pdksz</title>

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
   <!-- Icon -->
   <link rel="stylesheet" href="assets/fonts/line-icons.css">
   <!-- Owl carousel -->
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/owl.theme.css">

   <!-- Animate -->
   <link rel="stylesheet" href="assets/css/animate.css">
   <!-- Main Style -->
   <link rel="stylesheet" href="assets/css/main.css">
   <!-- Responsive Style -->
   <link rel="stylesheet" href="assets/css/responsive.css">
   <style media="screen">
     h1, h2, h3, h4{
       font-family: cursive;
     }
   </style>
 </head>
 <body>

   <!-- Header Area wrapper Starts -->
   <header id="header-wrap">
     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
       <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <a href="{{ route('homepage') }}" class="navbar-brand"><img src="assets/img/PDKSZ.png" alt=""></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
           <i class="lni-menu"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
           <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
             <li class="nav-item ">
               <a class="nav-link" href="{{ route('homepage') }}">
                 ANASAYFA
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="{{ route('girisler') }}">
                 GİRİŞLER
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="{{ route('cikislar') }}">
                 ÇIKIŞLAR
               </a>
             </li>

           </ul>
         </div>
       </div>
     </nav>
     <!-- Navbar End -->

     <!-- Hero Area Start -->
     <div id="hero-area" class="hero-area-bg">
       <div class="container">
         <div class="row">
           <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
             <div class="contents">
               <h2 class="head-title">PDKS-Z<br> ÇIKIŞLAR </h2>

               <div class="">
        <!--    <input type="number" name="tc" id="tc" placeholder="TC NO GİRİNİZ" onkeyup="degis()" />

          </div>-->


               <div class="header-button">

                 <table border="1" class="table table-secondary" >

                   <tr>
                      <td> NO </td>
                      <td> TC </td>
                      <td> TYPE </td>
                      <td> ZAMAN </td>
                    </tr>

                   @foreach ($pdksz as $key => $value)


                     <tr>
                   <td> {{$key+1 }} :</td>
                   <td>  {{ $value->tc }}</td>
                   <td>  {{ $value->type }}</td>
                   <td>  {{ $value->tarih }}</td>
                     </tr>


                   @endforeach

                 </table>
               </div>

             </div>
           </div>
           <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
             <div class="intro-img">
               <img class="img-fluid" src="assets/img/intro-mobile.png" alt="">
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Hero Area End -->

   </header>
   <!-- Header Area wrapper End -->

         </div>
       </div>
     </div>
     <div id="copyright">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="copyright-content">
               <p>Copyright ©️ 2020 <a rel="nofollow" href="#"></a> </p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </footer>
   <!-- Footer Section End -->

   <!-- Go to Top Link -->
   <a href="#" class="back-to-top">
     <i class="lni-arrow-up"></i>
   </a>

   <!-- Preloader -->
   <div id="preloader">
     <div class="loader" id="loader-1"></div>
   </div>
   <!-- End Preloader -->

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="assets/js/jquery-min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/jquery.nav.js"></script>
   <script src="assets/js/scrolling-nav.js"></script>
   <script src="assets/js/jquery.easing.min.js"></script>
   <script src="assets/js/main.js"></script>
   <script src="assets/js/form-validator.min.js"></script>
   <script src="assets/js/contact-form-script.min.js"></script>

 </body>


</html>
