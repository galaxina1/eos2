<footer>
    <div class="footer">
        <h4>eosConseil <div class="chevron"></div><span class="footerText">
                Conseil en acquisition/cession fonds de commerces en hôtellerie-restauration.
                Evaluation avant vente de fonds de commerces types hôtels, restaurants et bars.
            </span></h4>
    </div>
    <div class="footer2">
        <h6>
            Copyright © 2022 eosConseil. Tous droits réservés.<br />
            Création <a href="https://www.kubiweb.fr">Kubiweb</a>
        </h6>
    </div>
    <div class="footer3">
        <ul>
            <li><a href="accueil">eosConseil</a></li>
            <li><a href="hotel">Hôtel</a></li>
            <li><a href="restaurant">Restaurant</a></li>
            <li><a href="brasserie">Brasserie</a></li>
            <li><a href="bar">Bar</a></li>
            <li><a href="snack">Snack</a></li>
            <li><a href="actualites">Actualités</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="mentionslegales">Mentions légales</a></li>
            <li><a href="honoraires">Honoraires</a></li>
            <li><a href="confidentialite">Confidentialité</a></li>
            <li><a href="cookies">Cookies</a></li>
        </ul>

    </div>



    <!-- ESSAI KEYFRAMES -->
    <!-- <div id="animation"></div> -->
</footer>
<!-- ACCEPT COOKIES -->
<?php
if(isset($_COOKIE['accept_cookie'])) {
   $showcookie = false;
} else {
   $showcookie = true;
}
?>


<?php if($showcookie) { ?>
<div class="cookie-alert" id ="cookie-alert">
   En poursuivant votre navigation sur ce site, 
   vous acceptez l’utilisation de cookies pour vous proposer
    des contenus et services adaptés à vos centres d’intérêts.<br /><p onclick="accept()">OK</p>
</div>
<?php } ?>
<script> 
function accept() {
    document.getElementById('cookie-alert').setAttribute('style','display:none');
   
    document.cookie = "accept_cookie = true; max-age=86400;";
}
</script>




<!--  Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!-- JQUERY POPPER BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>


</body>

</html>