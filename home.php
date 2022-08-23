<?php
$title = 'Home';
include_once 'layout/header.php';
include_once 'layout/navbar.php';
?>

<!-- ----------SERVICES section starts ------- -->
<section class="services">
    <div class="head_text text-center">
        <h1 class="text-uppercase mt-5 pt-5 fw-bolder" style="font-size: 5rem;">our services</h1>
    </div>
    <div class="img_container text-white row row-cols-xl-6 row-cols-lg-4 justify-content-evenly row-cols-md-3 row-cols-sm-2 mt-5">
        <div class="img_box text-center pt-4">
            <img src="images/icon-1.png">
            <h3>adventure</h3>
        </div>
        <div class="img_box text-center pt-4">
            <img src="images/icon-2.png">
            <h3>tour guide</h3>
        </div>
        <div class="img_box text-center pt-4">
            <img src="images/icon-3.png ">
            <h3>trekking</h3>
        </div>
        <div class="img_box text-center pt-4">
            <img src="images/icon-4.png">
            <h3>camp fire</h3>
        </div>
        <div class="img_box text-center pt-4">
            <img src="images/icon-5.png">
            <h3>off road</h3>
        </div>
        <div class="img_box text-center pt-4">
            <img src="images/icon-6.png">
            <h3>camping</h3>
        </div>
    </div>
</section>

<!-- ----------about section starts----------------- -->
<section class="about mt-5 pt-5">
    <div class="row_div">
        <div class="image">
            <img src="images/about-img.jpg" class=" w-100" alt="..." style="height: 100%;">
        </div>
        <div class="card_body">
            <h2 class="card-title fw-bolder fs-1">about us</h2>
            <p class="card-text  fs-2 ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, perspiciatis aperiam dolore accusantium eligendi amet incidunt dignissimos fugit corrupti quas! .</p>
            <a href="about.php" class="hed_btn btn fs-3 text-white rounded-3 px-5 py-2  position-relative overflow-hidden">read more</a>
        </div>
    </div>
</section>
<!-- -----------about section end------------------ -->
<!-- --------------PACKAGES section starts ----------->
<section class="packages py-3" style="margin-bottom: 20px;">
    <div class="head_text text-center">
        <h1 class="text-uppercase mt-5 pt-5 fw-bolder" style="font-size: 5rem;">OUR PACKAGES</h1>
    </div>
    <div class="row row-cols-lg-4 row-cols-md-2 justify-content-lg-around justify-content-sm-evenly mx-5 p-4">
        <div class="card g-0 text-center border-dark my-3" style="width: 40rem; height:45rem;">
            <img class="card-img-top g-0" src="images/img-1.jpg" alt="Card image cap">
            <div class="card-body fs-4">
                <h1 class="fw-bold">adventure & tour</h1>
                <p class="card-text text-secondary p-3">Some quick example text to build on the card title and make up .</p>
                <a href="book.php" class="hed_btn btn fs-3 text-white rounded-3 px-4 py-2  position-relative overflow-hidden">book now</a>
            </div>
        </div>

        <div class="card g-0 text-center border-dark my-3" style="width: 40rem; height:45rem;">
            <img class="card-img-top g-0" src="images/img-2.jpg" alt="Card image cap">
            <div class="card-body fs-4">
                <h1 class="fw-bold">adventure & tour</h1>
                <p class="card-text text-secondary p-3">Some quick example text to build on the card title and make up .</p>
                <a href="book.php" class="hed_btn btn fs-3 text-white rounded-3 px-4 py-2  position-relative overflow-hidden">book now</a>
            </div>
        </div>

        <div class="card g-0 text-center border-dark my-3" style="width: 40rem; height:45rem;">
            <img class="card-img-top g-0" src="images/img-3.jpg" alt="Card image cap">
            <div class="card-body fs-4 ">
                <h1 class="fw-bold">adventure & tour</h1>
                <p class="card-text text-secondary p-3">Some quick example text to build on the card title and make up .</p>
                <a href="book.php" class="hed_btn btn fs-3 text-white rounded-3 px-4 py-2  position-relative overflow-hidden">book now</a>
            </div>
        </div>
    </div>
    <div class="load_more text-center">
    <a href="package.php" class="hed_btn btn fs-3 text-white rounded-3 px-5 py-2  position-relative overflow-hidden">load more</a>
    </div>
    
</section>

<!-- --------------PACKAGES section end -------------->
<!-- --------------upto section starts------------- -->
<section class="upto">
<div class="head_text text-center">
        <h1 class="text-uppercase mt-5 pt-5 fw-bolder" style="font-size: 5rem;">UPTO 50% OFF</h1>
        <p class="fs-4 w-50 flex-wrap" style="margin-left: 25%;">Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Iure Tempora Assumenda, Debitis Aliquid Nesciunt Maiores Quas! Magni Cumque Quaerat Saepe!</p>
        <a href="package.php" class="hed_btn btn fs-3 text-white rounded-3 px-5 py-2  position-relative overflow-hidden">load more</a>
    </div>
</section>


<?php
include_once 'layout/footer.php';
?>