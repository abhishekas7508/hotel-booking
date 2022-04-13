
<?php $__env->startSection('title','Facilities'); ?>
<?php $__env->startSection('content'); ?>
<style>
    .h-line{
        width: 150px;
        margin: 0 auto;
        height: 1.7px;
    }
    .pop{
        border-top-width: 4px;
        border-color: rgb(29, 29, 29);
    }
    .pop:hover{
        border-top-color: teal;
        transform: scale(1.04);
        transition: all 0.3s;
    }

</style>
<div class="container-fluid my-5 px-4">
    <h2 class="fw-bold text-center">Our Facilities</h2>
    <div class="h-line bg-dark"> </div>
    <p class="text-center mt-3">
        The facilities provided here are top-notch
    </p>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white pop rounded shadow p-4">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.svg">
                        <h5 class="m-0">Wifi</h5>
                    </div>
                    <p>
                        High Speed Internet connectivity, with speed upto 50 mbps.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white pop rounded shadow p-4">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0">Television</h5>
                    </div>
                    <p>
                        LCD Television
                        <br><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white pop rounded shadow p-4">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0">Air Conditioner</h5>
                    </div>
                    <p>
                        Air Conditioner
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white pop rounded shadow p-4">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0">Room Heater</h5>
                    </div>
                    <p>
                        Room Heater
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white pop rounded shadow p-4">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0">Furniture</h5>
                    </div>
                    <p>
                        Premium Quality Furniture
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white pop rounded shadow p-4">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0">24/7 Electicity/Water Supply</h5>
                    </div>
                    <p>
                        24/7 Electicity/Water Supply
                    </p>
                </div>
            </div>
        </div>
    </div>
        
        
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking\resources\views/pages/facilities.blade.php ENDPATH**/ ?>