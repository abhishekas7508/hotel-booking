
<?php $__env->startSection('title','About'); ?>
<?php $__env->startSection('content'); ?>
<style>
    .h-line{
        width: 130px;
        margin: 0 auto;
        height: 1.7px;
    }
    .my-img{
        max-width: 40%;
        height: auto;
    }
</style>

    <div class="jumbotron text-center my-5 px-4">
        <h2 class="fw-bold text-center">About Us</h2>
        <div class="h-line bg-dark"> </div>
        <br><br><br>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4">
                    <h1>Our Story</h1>
                    <div class="h-line bg-dark mb-5"> </div>
                    <p>This Hotel-booking website was conceptualized in 2022 in xyz city, India by Abhishek
                        . Like most start-ups, the site’s first iteration was deployed from a garage.
                        Our team of creative and driven entrepreneurs come together to build a hotel search that is fast, intuitive and unbiased, with the longstanding mission…
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 mb-4">
                    <h3>
                        To be the traveler’s first and independent source of information for finding the ideal hotel.
                    </h3>
                    <p>
                        We enable all our advertisers, from independent hoteliers to the largest hotel chains, to grow their businesses by accessing our broad audience of monthly users.
                    </p>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-12 col-md-5 mb-4">
                    <h1><em>“In the beginning, we were not entirely sure what direction we wanted to drive the business model, but we were very sure what kind of company we would like to run.”</em></h1>
                    <p class="float-end">-Abhishek</p>
                    
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-12 col-md-5 mb-4">
                    <img class="my-img rounded mx-auto d-block" src="images/about/about1.jpg" alt="">
                    
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking\resources\views/pages/about.blade.php ENDPATH**/ ?>