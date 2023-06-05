<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/audeck/default/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:28:33 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="assets/css/theme-dark.css">
<title>Audeck - Auto Servicing Bootstrap 5 Template</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>


@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

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
</style>


<body>
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
<form method="post" action="{{route('creation_client')}}">
  @csrf
  <h3 class="titre_form" style="color:#fdb819"> BIENVENUE SUR OCL ROUTIER </h3>

  <h3 class="titre_form">INSCRIPTION  </h3>
<div class="form-group">
<input type="text" class="form-control" placeholder="Nom et prénoms" name="name" >
</div>
<div class="form-group">
  <input type="email" class="form-control" placeholder="Email" name="email">
</div>
<div class="form-group">
  <input type="text" class="form-control" placeholder="Téléphone" name="phone1" >
</div>
<div class="form-group">
  <input type="text" class="form-control" placeholder="Téléphone 2" name="phone2">
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Mot de passe" name="password" >
</div>

<div class="text-center">
<button type="submit" class="btn login-btn" >S'inscrire</button>
</form>
</div>
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