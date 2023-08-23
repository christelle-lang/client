@include('web.header')

<style>
  .titre_form{
    text-align:center;
    font-weight: bold;
    margin-bottom: 40px;
  }
  .text{
    font-size:60px
  }
  ::placeholder{
    font-size: 16px;
    color: rgb(192, 192, 192)
  }
  .form-check-input{
    border-color: #fdb819;
  }
  .form-check-label{
    font-weight: bold;
  }
</style>


<body>
  @if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
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
    
    
    

<div class="login-area ptb-100">
<div class="container">
<div class="login-item">
<form method="post" action="{{route('authentification_client')}}">
  @csrf
  <h3 class="titre_form" style="color:#fdb819"> OCL ROUTIER </h3>

  <h3 class="titre_form">CONNEXION </h3>
<div class="form-group">
<input type="text" class="form-control" placeholder="email ou numéro de téléphone" name="email" value="{{old('email')}}" >
@error('email')
{{$message}}
@enderror
</div>

<div class="form-group mb-2">
<input type="password" class="form-control" placeholder="Mot de passe" id="exampleCheck1" name="password" >
@error('password')
{{$message}}
@enderror
</div>
<div class="mb-3  form-check d-flex justify-content-between">
    <div >
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
    </div>
    <span>Vous êtes nouveau? <a href="{{route('inscription_page')}}">Inscrivez-vous</a></span>

  </div>

<div class="text-center">
<button type="submit" class="btn login-btn " > Se connecter</button>
</div>
</form>
</div>
</div>
</div>





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

<!-- Mirrored from templates.hibootstrap.com/audeck/default/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:28:33 GMT -->
</html>