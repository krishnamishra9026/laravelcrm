@extends('frontend.app')
@section('title', 'Welcome')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center" style="    margin-top: 50px;">
          <h2><b>Calculator</b></h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Calculator</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


  </main>
  
  
    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="margin-bottom: 30px;">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Calculator</h2>
          <p>Calculator</p>
        
        </div>
           <div class="row" style="margin-bottom: 25px;padding-bottom: 15px;">
                <div class="col-md-3 form-group">
              <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
              Total Moisture<br><spam style="font-weight: normal;"> (As received basis) </spam></p> <input type="text" name="name" class="form-control" id="name" placeholder="" >
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                 <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
              Ash<br>   <spam style="font-weight: normal;"> (Air dried basis)  </spam> </p> 
                  <input type="email" class="form-control" name="email" id="email" placeholder="" >
                </div>
                 <div class="col-md-3 form-group">
                  <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
              Ash<br> <spam style="font-weight: normal;"> (As received basis) </spam> </p> 
                  <input type="text" name="name" class="form-control" id="name" placeholder="0.0" >
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                 <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
             Ash<br>  <spam style="font-weight: normal;"> (Dry basis) </spam>  </p> 
                  <input type="email" class="form-control" name="email" id="email" placeholder="0.0" >
                </div>
          </div>
             <div class="row" style="margin-bottom: 25px;padding-bottom: 15px;">
                <div class="col-md-3 form-group">
              <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
              Inherent Moisture <br>  <spam style="font-weight: normal;"> (Air dried basis) </spam>  </p> <input type="text" name="name" class="form-control" id="name" placeholder="" >
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                 <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
              Volatile Matter <br>  <spam style="font-weight: normal;">  (Air dried basis)  </spam> </p> 
                  <input type="email" class="form-control" name="email" id="email" placeholder="" >
                </div>
                 <div class="col-md-3 form-group">
                  <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
             Volatile Matter</br> <spam style="font-weight: normal;"> (As received basis) </spam> </p> 
                  <input type="text" name="name" class="form-control" id="name" placeholder="0.0" >
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                 <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
            Volatile Matter <br> <spam style="font-weight: normal;">(Dry basis) </spam>  </p> 
                  <input type="email" class="form-control" name="email" id="email" placeholder="0.0" >
                </div>
          </div>
             <div class="row" style="margin-bottom: 25px;padding-bottom: 15px;">
                <div class="col-md-3 form-group">

                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                 <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
              Gross Calorific Value in Kcal/Kg <br> <spam style="font-weight: normal;"> (Air dried basis)  </spam> </p> 
                  <input type="email" class="form-control" name="email" id="email" placeholder="" >
                </div>
                 <div class="col-md-3 form-group">
                  <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
            Gross Calorific Value in Kcal/Kg <br> <spam style="font-weight: normal;"> (As received basis) </spam> </p> 
                  <input type="text" name="name" class="form-control" id="name" placeholder="0.0" >
                </div>
                <div class="col-md-3 form-group mt-3 mt-md-0">
                 <p style="font-size: 15px;font-weight: bold;border: 1px solid;margin-bottom: 0px;background: #f2f2f2;text-align: center;padding: 10px;">  
            Gross Calorific Value in Kcal/Kg<br> <spam style="font-weight: normal;">(Dry basis) </spam>  </p> 
                  <input type="email" class="form-control" name="email" id="email" placeholder="0.0" >
                </div>
          </div>
      </div>
    </section>


@endsection
