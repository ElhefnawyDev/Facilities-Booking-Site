<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/slider.php'); ?>

<section class="py-3 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="main-heading text-white"> Facilities Booking Site</h4>
                <div class="underline bg-white mx-auto"></div>
                <p class="text-white">
                    A small gift from Group 13 Web dev to UTHMS
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="main-heading">Book Rooms</h4>
                <div class="underline mb-0"></div>
                <hr class="my-0">
            </div>
            
            <div class="col-md-12 mt-4">
                <div class="row">
                    <?php
                        $room_query = " SELECT * FROM rooms WHERE status='0' ";
                        $room_query_run = mysqli_query($con, $room_query);

                        if(mysqli_num_rows($room_query_run) > 0)
                        {
                            foreach($room_query_run as $room)
                            {
                                ?>
                                    <div class="col-md-4">
                                        <a href="view.php?room=<?= $room['id']; ?>" class="text-decoration-none">
                                            <div class="card-box">
                                                <div class="roomimage">
                                                    <img src="uploads/<?= $room['room_image']; ?>" class="" alt="<?= $room['room_name'] ?>">
                                                </div>
                                                <div class="card-box-body">
                                                    <h4 class="card-heading"><?= $room['room_name']; ?>
                                                        <button class="btn btn-sm btn-primary float-end text-white">Book Now</button>
                                                    </h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <h2 class="heading">No rooms found</h2>
                            <?php
                        }
                    ?>

                </div>
            </div>
        </div>    
    </div>
</section>

<section class="section bg-lightgray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-3 text-center">
                <h4 class="main-heading">Our Students Feedback</h4>
                <div class="underline mx-auto"></div>
                <p>
                    What students thought about our Facilities Booking Site
                </p>
            </div>

            <div class="col-md-8">
                    <div class="owl-carousel testimonials owl-theme">

                        <div class="item text-center">
                            <div class="testi-card">
                                <div class="testi-content">
                                    <p>
                                        <i class="left-q-icon text-white fa fa-quote-left "> </i>
                                        This site helped me very much in booking university halls and saved me a lot of time
                                    </p>
                                    <h5 class="testi-title">Mohammed Taresh</h5>
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="testi-card">
                                <div class="testi-content">
                                    <p>
                                        <i class="left-q-icon text-white fa fa-quote-left "> </i>
                                        The site is straight forward and easy to use! I like it!
                                    </p>
                                    <h5 class="testi-title">Ali Elhefnawy</h5>
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="testi-card">
                                <div class="testi-content">
                                    <p>
                                        <i class="left-q-icon text-white fa fa-quote-left "> </i>
                                        layout and accessibility of the booking interface have simplified the process, ensuring that students can quickly book their preferred classes 
                                    </p>
                                    <h5 class="testi-title">Zara</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="testi-card">
                                <div class="testi-content">
                                    <p>
                                        <i class="left-q-icon text-white fa fa-quote-left "> </i>
                                        The website efficiency in allowing us to reserve our desired classes
                                    </p>
                                    <h5 class="testi-title">Yuki</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="testi-card">
                                <div class="testi-content">
                                    <p>
                                        <i class="left-q-icon text-white fa fa-quote-left "> </i>
                                        The website the has been instrumental in streamlining our academic journeys.
                                    </p>
                                    <h5 class="testi-title">Mei Chun</h5>
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="testi-card">
                                <div class="testi-content">
                                    <p>
                                        <i class="left-q-icon text-white fa fa-quote-left "> </i>
                                        Amazing experience and smooth interface
                                    </p>
                                    <h5 class="testi-title">Sya</h5>
                                </div>
                            </div>
                        </div>



                        
                    </div>
            </div>
        </div>
    </div>
</section>


<?php include('includes/footer.php'); ?>

<script>
$(document).ready(function () {
        
    $('.testimonials').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

});
</script>