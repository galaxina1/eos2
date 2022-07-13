<?php


// var_dump($showLastNews);

?>

<header>
    <div class="bloc">
        <h2>Actualités</h2>
        <h3>eosConseil</h3>
    </div>
</header>

<section>
    <div class="section">

        <div class="beforePage">
            <?php if (!isset($showNewsDetails)) {
                for ($i = 0; $i < count($showNews); $i++) {
            ?>
                    <div class="page2">
                        <div class="blocCentre" id="blocCentre">

                            <div class="actuShowFlex2">
                                <div class="a2"><?php
                                                $date1 = $showNews[$i][1];
                                                setlocale(LC_TIME, "fr_FR");
                                                echo strftime("%d %B %G", strtotime($date1)); ?>
                                </div>

                                <div class="b2"><?php
                                                echo $showNews[$i][2]; ?>
                                </div>

                            </div>
                            <div class="c2">
                                <form action="" method="post">
                                    <input type="hidden" name="detailNews" value="<?php echo $showNews[$i][0]; ?>">
                                    <button type="submit" class="btn btn-outline-info btn-sm" id="detailNews">Détails</button><br />
                                </form>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
            <!-- ---------------------------------------------- -->

            <?php if (isset($showNewsDetails)) {

            ?><div class="page2">
                    <div class="blocCentre" id="blocCentre">

                        <div class="actuShowFlex2">
                            <div class="a2">
                                <?php
                                $date1 = $showNewsDetails[1];
                                setlocale(LC_TIME, "fr_FR");
                                echo strftime("%d %B %G", strtotime($date1));
                                ?>
                            </div>

                            <div class="b2">
                                <?php echo $showNewsDetails[2]; ?>
                            </div>
                        </div>

                        <div class="c3">
                            <?php echo $showNewsDetails[3]; ?>
                        </div>

                        <?php
                        if (!empty($showNewsDetails[4])) {
                        ?><div class="d3">
                                <img src="src/public/picture/<?php echo $showNewsDetails[4]; ?>" alt="photo" class="photoNews">
                            </div>
                        <?php };

                        if (!empty($showNewsDetails[5])) {
                        ?><div class="d3">
                                <?php echo $showNewsDetails[5]; ?>
                            </div>
                        <?php };

                        if (!empty($showNewsDetails[6])) {
                        ?><div class="e3">
                                <?php
                                $var = $showNewsDetails[6];
                                $var = str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $var);
                                ?><iframe src="<?php echo $var; ?>" class="iframe" allowfullscreen></iframe>
                            </div>
                        <?php }; ?>
                    </div>
                </div>
            <?php } ?>


            <!-- ----------------------------------------------------------- -->


        </div>
        <!-- </div> -->