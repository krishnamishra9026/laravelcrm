<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=adevice-width, initial-scale=1.0" name="viewport">

  <title>Pyramid Energy - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/front/img/favic.png" rel="icon">
  <link href="assets/front/img/apple-touch-ic.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/front/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/front/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/front/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/front/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/front/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      <link href="assets/front/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/front/css/style.css" rel="stylesheet">


</head>

<body>

 

    @include('frontend.sections.header')

    @yield('content')

 @include('frontend.sections.footer')

     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/front/vendor/aos/aos.js"></script>
  <script src="assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/front/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/front/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/front/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/front/js/main.js"></script>

    @stack('scripts')
</body>

</html>
