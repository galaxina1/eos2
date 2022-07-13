<?php

// $number = 12345678912;
// echo number_format($number,0,',',' ');

?>
<header>
    <div class="bloc">

        <h2>Contact</h2>
        <h3>eosConseil</h3>
    </div>
</header>

<section>
    <div class="section">

        <div class="page2">

            <!-- <div class="blocCentre"> -->

            <div class="contact">
                <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.5325492349157!2d4.833844415691835!3d45.760516521642906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea56e9be6ad3%3A0x65cd33a40be7c423!2s55+Place+de+la+Republique%2C+69002+Lyon%2C+France!5e0!3m2!1sfr!2stn!4v1533207924998" frameborder="0" allowfullscreen="allowfullscreen">
                    <span data-mce-type="bookmark" style="float:left; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">&#xFEFF;</span></iframe>
            </div>

            <p class="titleForm">Formulaire de contact</p>
            <p class="labelForm">Merci de remplir le formulaire et de nous le retourner
                de façon à ce que nous puissions traiter votre demande
                dans les plus brefs délais !</p>
            <div class="form">

                <form action="" method="post">
                    <div id="flexForm">
                        <div class="form1">
                            <div class="mb-3">
                                <!-- <label for="exampleInputEmail1" class="form-label">Nom et prénom</label> -->
                                <input type="text" class="form-control" name="name" placeholder="Nom et prénom *">
                            </div>

                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                                <input type="number" class="form-control" name="phone" placeholder="téléphone"
                                maxLength="10" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                >
                            </div>

                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                                <input type="text" class="form-control" name="address" placeholder="Adresse">
                            </div>

                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                                <input type="text" class="form-control" name="city" placeholder="Ville">
                            </div>

                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                                <input type="text" class="form-control" name="subject" placeholder="Sujet *">
                            </div>

                        </div>

                        <div class="form2">

                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                                <input type="email" class="form-control" name="email" placeholder="Email *">
                            </div>

                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                                <input type="text" class="form-control" name="society" placeholder="Société">
                            </div>

                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                                <input type="number" class="form-control" name="zipCode" placeholder="Code postal"
                                maxLength="5" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                >
                            </div>

                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                                <input type="text" class="form-control" name="country" placeholder="Pays">
                            </div>

                            <div class="mb-3">
                                <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
                                <textarea class="form-control" name="message" rows="3" placeholder="Message *"></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkb" name="privacy"value=1>
                        <label class="labeForm2" for="submit2" id="labelForm2">
                            En saisissant ces informations j'accepte qu'elles soient utilisées
                            dans le cadre d'une éventuelle relation commerciale.
                            (Notre<a href=""> politique de confidentialité</a>)
                        </label>
                    </div>
                    <button type="submit" class="submit2" id="submit2">Envoyer</button>
                </form>



            </div>

        </div>