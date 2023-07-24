@include('web.header')

<style>
 

 .top-bar {
  background-color: #fff;
  padding: 10px;
  margin-right: 10px;
}

.btn-custom1 {
  background-color: #fdb819;
  color: #ffffff;
}

.btn-custom2 {
  background-color: #ffffff;
  color: #000000;
}

.btn-custom1:hover {
  color: #ffffff;
}

.btn-custom2:hover {
  color: #fdb819;
}
.engineer-item img {
  width: 180px; /* Définir la largeur souhaitée */
  height: 180px; /* Définir la hauteur souhaitée */
}
.black{
  color:#000000
}
.card {
      border-radius: 10px;
    }
.card-header{
  background-color:#fdb819;
   color:#fff
}


</style>




</head>
<body class="d-flex flex-column min-vh-100 bg-light mt-5" >

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
</div>
</div>
</div>


<div class="navbar-area fixed-top">

<div class="mobile-nav">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
</div>

<div class="main-nav">
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.html">
<img src="assets/img/logo.png" width="120px" class="logo-one" alt="Logo">
</a>

<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

<ul class="navbar-nav ml-auto">
<li class="nav-item">
  <a href="{{route('accueil_page')}}" class="nav-link ">Accueil</a>
</li>   
 {{-- <li class="nav-item">
<a href="#" class="nav-link dropdown-toggle ">Camion</a>
<ul class="dropdown-menu">
  @foreach ($types as $type)
  <li class="nav-item">
    <form id="setTypeForm_{{ $type->id }}" method="post" action="{{ route('search') }}">
      @csrf
      <input type="hidden" name="type_id" value="{{ $type->id }}">
      <a href="#" onclick="event.preventDefault(); document.getElementById('setTypeForm_{{ $type->id }}').submit();" class="nav-link">{{ $type->nameCamion }}</a>
    </form>
  </li>
  @endforeach
</ul>



</li>  --}}
<li class="nav-item">
  <a href="{{route('contact_page')}}" class="nav-link">Contact</a>
  </li> 

</ul>
</div>

<a href="{{route('form_demande')}}"><button class="btn btn-custom1 me-2" type="button"> Trouver des chargements </button></a>
<button class="btn btn-custom2" type="button">Se connecter</button>


{{-- <div class="cmn-btn">
  <a class="banner-btn-left" href="{{route('connexion_page')}}">
    Trouver des chargements
  </a>
</div>
<div class="cmn-btn ">
  <a class="banner-btn-left" href="{{route('connexion_page')}}">
    Connexion
  </a>
</div> --}}

 
</div>
</nav>
</div>
</div>
</div>




<div class="page-title-area">
<img src="assets/img/home-one/footer-car.png" alt="Title">
<div class="container">
<div class="page-title-content">
<h2>Contact</h2>

</div>
</div>
</div>


<section class="contact-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="contact-item contact-left">
<h3>Notre localisation</h3>
<p>Nous sommes localisés à Abidjan cocody riviera 2 sogefia, villa 303</p>
<ul>
<li>
<i class='bx bx-location-plus'></i>
Address: +225 2722470500
</li>
<li>
<i class='bx bx-mail-send'></i>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#2b42454d446b4a5e4f4e484005484446">
<span class="__cf_email__" data-cfemail="b4dddad2dbf4d5c1d0d1d7df9ad7dbd9">[email&#160;protected]</span>
</a>
</li>
<li>
<i class='bx bx-phone-call'></i>
<a href="tel:+8562-65516-595">
+8562-65516-595
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-6">
<div class="contact-item contact-right">
<h3>Laissez nous un message</h3>
<form id="contactForm">
<div class="row">
<div class="col-sm-6 col-lg-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Nom">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6 col-lg-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6 col-lg-6">
<div class="form-group">
<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Téléphone">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6 col-lg-6">
<div class="form-group">
<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Sujet">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12 col-lg-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<div class="form-check agree-label">
<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
<label class="form-check-label" for="gridCheck">
Accepter <a href="terms-condition.html">Termes & Conditions</a> et <a href="privacy-policy.html">Politique privée.</a>
</label>
<div class="help-block with-errors gridCheck-error"></div>
</div>
</div>
</div>
<div class="col-md-12 col-lg-12">
<button type="submit" class="contact-btn btn">
Envoyez le message
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<footer class="footer-area-two pt-100">
<div class="footer-img">
<img src="assets/img/home-one/footer-car.png" alt="Footer">
</div>
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="footer-item">
<div class="footer-logo">
<a href="index.html">
<img src="assets/img/logo-two.png" alt="Logo">
</a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam nobis et praesentium architecto ex laudantium voluptates in dolore</p>
<ul>
<li>
<a href="#" target="_blank">
<i class='bx bxl-youtube'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-instagram-alt'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="footer-item">
<div class="footer-service">
<h3>Services</h3>
<ul>
<li>
<a href="#" target="_blank">
<i class='bx bx-chevron-right'></i>
Automobile
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bx-chevron-right'></i>
Tyre Service
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bx-chevron-right'></i>
Repair Service
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bx-chevron-right'></i>
Engine Service
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bx-chevron-right'></i>
System Service
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="footer-item">
<div class="footer-service">
<h3>Quick Links</h3>
<ul>
<li>
<a href="index.html" target="_blank">
<i class='bx bx-chevron-right'></i>
Home
</a>
</li>
<li>
<a href="about.html" target="_blank">
<i class='bx bx-chevron-right'></i>
About Us
</a>
</li>
<li>
<a href="blog.html" target="_blank">
<i class='bx bx-chevron-right'></i>
Blogs
</a>
</li>
<li>
<a href="engineer.html" target="_blank">
<i class='bx bx-chevron-right'></i>
Team
</a>
</li>
<li>
<a href="testimonial.html" target="_blank">
<i class='bx bx-chevron-right'></i>
Testimonials
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="footer-item">
<div class="footer-service footer-find">
<h3>Find Us</h3>
<ul>
<li>
<i class='bx bx-location-plus'></i>
28/A Street, New York City
</li>
<li>
<i class='bx bx-phone-call'></i>
<a href="tel:+880123456789">
+88 0123 456 789
</a>
</li>
<li>
<i class='bx bx-phone-call'></i>
<a href="tel:+880563246378">
+88 0563 246 378
</a>
</li>
<li>
<i class='bx bx-mail-send'></i>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#cda4a3aba28dacb8a9a8aea6e3aea2a0">
<span class="__cf_email__" data-cfemail="7c15121a133c1d0918191f17521f1311">[email&#160;protected]</span>
</a>
</li>
<li>
<i class='bx bx-mail-send'></i>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#9af2fff6f6f5dafbeffefff9f1b4f9f5f7">
<span class="__cf_email__" data-cfemail="731b161f1f1c331206171610185d101c1e">[email&#160;protected]</span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="copyright-area">
<div class="row">
<div class="col-lg-7">
<div class="copyright-item">
<p>Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Audeck. Designed By <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
</div>
</div>
<div class="col-lg-5">
<div class="copyright-item copyright-right">
<ul>
<li>
<a href="terms-and-conditions.html" target="_blank">Terms & Conditions</a>
</li>
<li>
<span>-</span>
</li>
<li>
<a href="privacy-policy.html" target="_blank">Privacy Policy</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</footer>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/jquery.mixitup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/audeck/default/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:28:36 GMT -->
</html>