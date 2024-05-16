<?php include("./includes/head.php");?>
<?php include("./includes/navbar.php");?>

<section class="banner d-flex align-items-center min-h-100 gap-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 d-flex flex-column gap-0">
                <h1 class="mb-2">Find Your Perfect Room with Ease</h1>
                <p class="text-justify mb-3">Explore a diverse selection of rooms and book your ideal stay effortlessly.
                    With
                    competitive prices
                    and user-friendly features, Room Finders makes finding and booking rooms simple and stress-free.</p>
                <a href="#room" class=" text-white ">Book Your room today</a>
            </div>

            <div class="col-lg-6">
                <figure class="d-none d-lg-block">
                    <img src="./assets/images/banner-img.webp" class="img-fluid" alt="Room Image">
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="room" id="room">
    <div class="container">
        <h2 class="text-capitalize mb-4">Our Rooms</h2>
        <div class="row gy-3 gx-3 ">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <?php 
                include './includes/room-card.php';?>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <?php 
                include './includes/room-card.php';?>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <?php 
                include './includes/room-card.php';?>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <?php 
                include './includes/room-card.php';?>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <?php 
                include './includes/room-card.php';?>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <?php 
                include './includes/room-card.php';?>
            </div>
        </div>
    </div>

</section>

<section class="contact mb-3" id="contact">
    <?php include './includes/contact.php';?>
</section>


<?php include("./includes/footer.php")?>
<?php include("./includes/script.php");?>