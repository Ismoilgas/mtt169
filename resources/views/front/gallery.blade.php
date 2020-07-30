        @extends('front.layout')
        
        @section('main')

    <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{asset('public/images/hero_1.jpg')}}">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 pt-5">
              <!-- <span class="text-cursive h5 text-red">Galeriya</span> -->
              <h1 class="mb-3 font-weight-bold text-teal">Galeriya</h1>
              <p><a href="index.html" class="text-white">Asosiy</a> <span class="mx-3">/</span> <strong>Galeriya</strong></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <!-- <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Our Gallery</span>
            <h2 class="text-black">Gallery Of The Kids</h2>
          </div>
        </div> -->
        
        <div class="row">
          @foreach($photos as $photo)  

          <div class="col-md-3 mb-4">
            <img src="{{asset('public/images/' . $photo->image)}}" alt="Image" class="img-fluid">
          </div> 
        @endforeach   
        </div>
        
      </div>
    </div>
    

    


    <!-- <div class="site-section py-5 bg-warning">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 d-flex">
          <h2 class="text-white m-0">Bring Fun Life To Your Kids</h2>
          <a href="#" class="btn btn-primary btn-custom-1 py-3 px-5 ml-auto">Get Started</a>
          </div>
        </div>
      </div>
    </div> -->
    @endsection  

