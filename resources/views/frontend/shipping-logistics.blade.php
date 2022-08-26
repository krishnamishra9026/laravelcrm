@extends('frontend.app')
@section('title', 'Welcome')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center" style="    margin-top: 50px;">
          <h2><b>Shipping and logistics</b></h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Shipping and logistics</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


  </main>

       <section id="about" class="about" style="margin-bottom: 30px;">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>{{ $shipping_logistic->title }}</h2>
            <p>{{ $shipping_logistic->title }}</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              {{ $shipping_logistic->description }}
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
               <img src="{{asset('uploads/shipping-logistics/'.$shipping_logistic->image)}}" alt="" class="img-fluid">
          
          </div>
        </div>

      </div>
    </section>

@endsection
