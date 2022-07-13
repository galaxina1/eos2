<!-- SLIDE -->
<a href="ensavoirplus">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <?php if (isset($images[1][1])) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" id="button4"></button>
            <?php } ?>
            <?php if (isset($images[2][1])) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" id="button4"></button>
            <?php } ?>
            <?php if (isset($images[3][1])) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4" id="button4"></button>
            <?php } ?>
            <?php if (isset($images[4][1])) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5" id="button4"></button>
            <?php } ?>
            <?php if (isset($images[5][1])) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6" id="button4"></button>
            <?php } ?>
            <?php if (isset($images[6][1])) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7" id="button4"></button>
            <?php } ?>
            <?php if (isset($images[7][1])) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8" id="button4"></button>
            <?php } ?>
            <?php if (isset($images[8][1])) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9" id="button4"></button>
            <?php } ?>
            <?php if (isset($images[9][1])) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10" id="button4"></button>
            <?php } ?>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="src/public/picture/<?php if (isset($images[0][1])) {
                                                    echo $images[0][1];
                                                } else {
                                                    echo "default.jpg";
                                                } ?>" alt="eosConseil" class="d-block w-100" id="img1">

                <div class="carousel-caption d-none d-md-block">
                    <h5>LE FUTUR EST FANTASTIQUE</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>


            <?php if (isset($images[1][1])) { ?>
                <div class="carousel-item">
                    <img src="src/public/picture/<?php echo $images[1][1]; ?>" alt="eosConseil" class="d-block w-100" id="img1">

                    <!-- <img src="src/public/picture/B.jpg" class="d-block w-100" alt="eosConseil"> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($images[2][1])) { ?>
                <div class="carousel-item">

                    <img src="src/public/picture/<?php echo $images[2][1]; ?>" alt="eosConseil" class="d-block w-100" id="img1">

                    <!-- <img src="src/public/picture/C.jpg" class="d-block w-100" alt="eosConseil"> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($images[3][1])) { ?>
                <div class="carousel-item">

                    <img src="src/public/picture/<?php echo $images[3][1]; ?>" alt="eosConseil" class="d-block w-100" id="img1">

                    <!-- <img src="src/public/picture/C.jpg" class="d-block w-100" alt="eosConseil"> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>4ème slide label</h5>
                        <p>Some representative placeholder content for the fourth slide.</p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($images[4][1])) { ?>
                <div class="carousel-item">

                    <img src="src/public/picture/<?php echo $images[4][1]; ?>" alt="eosConseil" class="d-block w-100" id="img1">

                    <!-- <img src="src/public/picture/C.jpg" class="d-block w-100" alt="eosConseil"> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>5ème slide label</h5>
                        <p>Some representative placeholder content for the fifth slide.</p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($images[5][1])) { ?>
                <div class="carousel-item">

                    <img src="src/public/picture/<?php echo $images[5][1]; ?>" alt="eosConseil" class="d-block w-100" id="img1">

                    <!-- <img src="src/public/picture/C.jpg" class="d-block w-100" alt="eosConseil"> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>6ème slide label</h5>
                        <p>Some representative placeholder content for the sixt slide.</p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($images[6][1])) { ?>
                <div class="carousel-item">

                    <img src="src/public/picture/<?php echo $images[6][1]; ?>" alt="eosConseil" class="d-block w-100" id="img1">

                    <!-- <img src="src/public/picture/C.jpg" class="d-block w-100" alt="eosConseil"> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>7ème slide label</h5>
                        <p>Some representative placeholder content for the seventh slide.</p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($images[7][1])) { ?>
                <div class="carousel-item">

                    <img src="src/public/picture/<?php echo $images[7][1]; ?>" alt="eosConseil" class="d-block w-100" id="img1">

                    <!-- <img src="src/public/picture/C.jpg" class="d-block w-100" alt="eosConseil"> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>8ème slide label</h5>
                        <p>Some representative placeholder content for the eight slide.</p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($images[8][1])) { ?>
                <div class="carousel-item">

                    <img src="src/public/picture/<?php echo $images[8][1]; ?>" alt="eosConseil" class="d-block w-100" id="img1">

                    <!-- <img src="src/public/picture/C.jpg" class="d-block w-100" alt="eosConseil"> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>9ème slide label</h5>
                        <p>Some representative placeholder content for the ninth slide.</p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($images[9][1])) { ?>
                <div class="carousel-item">

                    <img src="src/public/picture/<?php echo $images[9][1]; ?>" alt="eosConseil" class="d-block w-100" id="img1">

                    <!-- <img src="src/public/picture/C.jpg" class="d-block w-100" alt="eosConseil"> -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>10ème slide label</h5>
                        <p>Some representative placeholder content for the tenth slide.</p>
                    </div>
                </div>
            <?php } ?>

        </div>
        <!-- <div class="containAnim"> 
        <div id="animation"></div>
        </div> -->

        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->

    </div>
</a>
<section>
    <div>
        <h1>A LA UNE
            <span class="i"><i class="fa-solid fa-chevron-down"></i></span>
            <img onclick="light()" src="src/public/picture/site/<?php if (isset($_COOKIE['light'])) {
                                                                    echo $_COOKIE['light'];
                                                                } else {
                                                                    echo 'lightOff';
                                                                } ?>.png" class="light" alt="light" id="light">
        </h1>
    </div>
</section>

<aside>
    <div>
        <a href="hotel-1-alaune-1"> <button class="bouton1">
                <img src="src/public/picture/site/hotel.png" class="hotel" alt="hotel ">
                <span class="boutonText">1 Hôtel</span></button></a>
    </div>

    <div>
        <a href="restaurant-2-alaune-1"> <button class="bouton">
                <img src="src/public/picture/site/restaurant.png" class="restaurant" alt="restaurant">
                1 Restaurant</button></a>
    </div>

    <div>
        <a href="brasserie-3-alaune-1"> <button class="bouton">
                <img src="src/public/picture/site/brasserie.png" class="brasserie" alt="brasserie">
                1 Brasserie</button></a>
    </div>

    <div>
        <a href="bar-4-alaune-1"> <button class="bouton">
                <img src="src/public/picture/site/bar.png" class="bar" alt="bar">
                <span class="textBar">1 Bar</span></button></a>
    </div>

    <div>
        <a href="snack-5-alaune-1"> <button class="bouton">
                <img src="src/public/picture/site/snack.png" class="snack" alt="snack">
                <span class="textSnack">1 Snack</span></button></a>
    </div>

</aside>