@extends('frontend.app')
@section('title', 'Welcome')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center" style="    margin-top: 50px;">
          <h2><b>Gallery or portfolio </b></h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Gallery or portfolio </li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


  </main>
  
  
   <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Portfolio</h2>
          <p>What we've done</p>
        </div>

        

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <a href="assets/front/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1">
            <div class="portfolio-img">
            <img src="assets/front/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
             <a href="assets/front/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
            <img src="assets/front/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></a></div>
          </div> 
           <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
             <a href="assets/front/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
            <img src="assets/front/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></a></div>
          
          </div>
           <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
             <a href="assets/front/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
            <img src="assets/front/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></a></div>
            </div>
           <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
             <a href="assets/front/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
            <img src="assets/front/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></a></div>
           </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
             <a href="assets/front/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
            <img src="assets/front/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></a></div> 
          </div>
           <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
             <a href="assets/front/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
            <img src="assets/front/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></a></div> 
          </div>
           <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
             <a href="assets/front/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
            <img src="assets/front/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></a></div> 
          </div>
           <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
             <a href="assets/front/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
            <img src="assets/front/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></a></div> 
          </div>

        </div>

      </div>
    </section>

@endsection
