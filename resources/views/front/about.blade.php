        @extends('front.layout')
        
        @section('main')

    <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('{{asset('public/images/img_9.jpg')}}">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 pt-5">
              <!-- <span class="text-cursive h5 text-red">Welcome To Our Website</span> -->
              <h1 class="mb-3 font-weight-bold text-teal">Biz haqimizda</h1>
              <p><a href="index.html" class="text-white">Asosiy</a> <span class="mx-3">/</span> <strong>Biz haqimizda</strong></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    

   <!--  <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset('public/images/img_8.jpg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto pl-md-5">
            <span class="text-cursive h5 text-red">About Us</span>
            <h3 class="text-black">Bring Fun Life To Your Kids</h3>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et harum, magni sequi nostrum maxime enim.</span><span>Magnam id atque dicta deleniti, ipsam ipsum distinctio. Facilis praesentium voluptatem accusamus, earum veritatis, laudantium.</span></p>

            <p class="mt-5"><a href="#" class="btn btn-warning py-4 btn-custom-1">More About Us</a></p>
          </div>
        </div>
      </div>
    </div> -->

    <div class="site-section bg-teal">
      <div class="container">
        <div class="row justify-content-center text-center mb-5 section-2-title">
          
        </div>
        <div class="row align-items-stretch">
@foreach($teachers as $teacher)
          <div class="col-lg-4 col-md-6 mb-5">
            
            <div class="post-entry-1 h-100 person-1 teal">
                
                <img src="{{asset('public/images/' . $teacher->image)}}" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">{{$teacher->position}}</span>
                <h2>{{$teacher->name}}</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p> -->
              </div>
              </div>
            
            
          </div>
            @endforeach
          <!-- <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 yellow">
              
                <img src="{{asset('public/images/person_2.jpg')}}" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>
 -->
<!--           <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 red">
              
                <img src="{{asset('public/images/person_3.jpg')}}" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div> -->

<!--           <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 green">
              
                <img src="{{asset('public/images/person_4.jpg')}}" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>
 -->
<!--           <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 blue">
              
                <img src="{{asset('public/images/person_5.jpg')}}" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>
 -->
<!--           <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 red">
              
                <img src="{{asset('public/images/person_1.jpg')}}" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 red">
              
                <img src="{{asset('public/images/person_1.jpg')}}" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
    
    
    <!-- <div class="site-section bg-info">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Packages You Like</span>
            <h2 class="text-white">Our Packages</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="package text-center bg-white">
              <span class="img-wrap"><img src="{{asset('public/images/flaticon/svg/001-jigsaw.svg')}}" alt="Image" class="img-fluid"></span>
              <h3 class="text-teal">Indoor Games</h3>
              <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
              <p><a href="#" class="btn btn-primary btn-custom-1 mt-4">Learn More</a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="package text-center bg-white">
              <span class="img-wrap"><img src="{{asset('public/images/flaticon/svg/002-target.svg')}}" alt="Image" class="img-fluid"></span>
              <h3 class="text-success">Outdoor Game and Event</h3>
              <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
              <p><a href="#" class="btn btn-warning btn-custom-1 mt-4">Learn More</a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="package text-center bg-white">
              <span class="img-wrap"><img src="{{asset('public/images/flaticon/svg/003-mission.svg')}}" alt="Image" class="img-fluid"></span>
              <h3 class="text-danger">Camping for Kids</h3>
              <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
              <p><a href="#" class="btn btn-success btn-custom-1 mt-4">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    @endsection  

    

    