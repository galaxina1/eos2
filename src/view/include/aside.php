<!-- ASIDE----------------------------------------------------------------------- -->
<div class="aside">

    <div class="asideBloc">
        <p class="parag">Ils nous ont fait confiance</p>
        <!-- SLIDE -------------------------------------------------------------- -->
        <div id="carouselExampleCaptions2" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner2">
                <div class="carousel-item active">
                    <img src="src/public/picture/<?php if(!isset($images2[0][1])) { echo "default2.jpg";} else { echo $images2[0][1];} ?>" class="d-block w-100" alt="eosConseil">
                </div>


                <?php for ($i = 1; $i < count($images2); $i++) {

                ?>
                    <div class="carousel-item">
                        <img src="src/public/picture/<?php echo $images2[$i][1] ?>" class="d-block w-100" alt="eosConseil">
                    </div><?php

                        } ?>

            </div>
        </div>
        <!-- -------------------------------------------------------------------- -->
    </div>

    <div class="asideBloc">
        <p class="parag">Coordonnées</p>
        <div class="container1">
            <div class="svgText"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill=#2547FE class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg><span class="coordText">55 Place de la République 69002 Lyon</span></div>

            <div class="svgText"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill=#2547FE class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg><span class="coordText">04 72 40 40 40</span></div>

            <div class="svgText"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill=#2547FE class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                </svg><span class="coordText">courrier@eos-conseil.com</span></div>
        </div>
    </div>

    <div class="asideBloc3">
        <p class="parag">Newsletter</p>

        <form action="" method="post">
            <div class="mb-3">
                <label for="emailNewsletter" class="p1">
                    Pour recevoir nos dernières offres, abonnez-vous ici à notre newsletter.</label>
                <input type="email" class="form-control" name="emailNewsletter" id="newsMail" aria-describedby="emailHelp" placeholder="Votre adresse mail">

            </div>

            <div class="mb-3 form-check" id="check1">
                <input type="checkbox" class="form-check-input" id="check" name="checkNewsletter" value=1>
                <label class="form-check-label" for="check">En saisissant ces informations j’accepte qu’elles soient exploitées dans le cadre de la relation commerciale qui pourrait en découler.
                    <br /> Pour en savoir plus sur notre politique de confidentialité : <a href="confidentialite">cliquer ici</a></label>
            </div>
            <div class="sub1">
                <button type="submit" class="submit" id="submit1"><span class="sub">
                        Envoyer</span></button>
            </div>
        </form>
    </div>
    <div class="asideBloc">
        <p class="parag">Articles récents</p>
        <div class="recentNews">
       <a href="index.php?page=actualites&recentnews=<?php echo $showLastNews[0][0]; ?>" class="rN"><?php echo $showLastNews[0][2];?></a>
        </div>
    </div>
</div>
</div>

</section>

<div class="footer4">
    <h3>La Reconnaissance du Client est notre plus belle récompense. </h3>
</div>