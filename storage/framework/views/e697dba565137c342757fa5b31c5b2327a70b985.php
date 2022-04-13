
<?php $__env->startSection('title','Hotel-booking'); ?>
<?php $__env->startSection('content'); ?>
<style>
  .availability-form{
    margin-top:-50px;
    z-index: 2;
    position: relative;
  }
  @media  screen and (max-width: 575px){
    .availability-form{
      margin-top:25px;
      padding: 0 35px;

    }
  }
</style>
<div class='text-center'>

    <div class="swiper mySwiper container-fluid">
        <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="images/4.png" class="w-100 d-block"/>
              </div>
              <div class="swiper-slide">
                <img src="images/2.png" class="w-100 d-block"/>
              </div>
              <div class="swiper-slide">
                <img src="images/3.png" class="w-100 d-block"/>
              </div>
              <div class="swiper-slide">
                <img src="images/1.png" class="w-100 d-block"/>
              </div>
              <div class="swiper-slide">
                <img src="images/5.png" class="w-100 d-block"/>
              </div>
              <div class="swiper-slide">
                <img src="images/6.png" class="w-100 d-block"/>
              </div>
        </div>
      </div>

      

      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Simple Rooms Name</h5>
                <h6 class="card-title mb-4">₹200 per night</h6>

                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Bathrooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofas
                  </span>
                </div>

                <div class="features mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Telivision
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                </div>

                <div class="guests mb-4">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>
                </div>

                <div class="Rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>      
                </div>

                <div class="d-flex justify-content-evenly mb-2">
                  <a href="http://localhost/hotel-booking/public/bookroom" class="btn btn-sm text-white custom-bg">Book Now</a>
                  <a href="http://localhost/hotel-booking/public/ourrooms" class="btn btn-sm btn-dark text-white">More Details</a>

                </div>

                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Simple Rooms Name</h5>
                <h6 class="card-title mb-4">₹200 per night</h6>

                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Bathrooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofas
                  </span>
                </div>

                <div class="features mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Telivision
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                </div>

                <div class="guests mb-4">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>
                </div>

                <div class="Rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>      
                </div>

                <div class="d-flex justify-content-evenly mb-2">
                  <a href="http://localhost/hotel-booking/public/bookroom" class="btn btn-sm text-white custom-bg">Book Now</a>
                  <a href="http://localhost/hotel-booking/public/ourrooms" class="btn btn-sm btn-dark text-white">More Details</a>

                </div>

                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Simple Rooms Name</h5>
                <h6 class="card-title mb-4">₹200 per night</h6>

                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Bathrooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofas
                  </span>
                </div>

                <div class="features mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Telivision
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                </div>

                <div class="guests mb-4">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>
                </div>

                <div class="Rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>      
                </div>

                <div class="d-flex justify-content-evenly mb-2">
                  <a href="http://localhost/hotel-booking/public/bookroom" class="btn btn-sm text-white custom-bg">Book Now</a>
                  <a href="http://localhost/hotel-booking/public/ourrooms" class="btn btn-sm btn-dark text-white">More Details</a>

                </div>

                
              </div>
            </div>
          </div>

          <div class="col-lg-12 text-center mt-5">
            <a href="http://localhost/hotel-booking/public/ourrooms" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms...</a>
          </div>
        </div>
      </div>

 
      
      

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          effect: "fade",
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
        });
      </script>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking\resources\views/pages/index.blade.php ENDPATH**/ ?>