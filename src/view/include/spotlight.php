<script>
    document.getElementById('page').setAttribute('style', 'background-color:white;border:none;');
    document.getElementById('blocCentre').setAttribute('style', 'margin-left:0px;margin-top:0px;');
</script>

<ul>
    <li><span class="descript"><?php echo $showAlaUne[4]; ?></span></li>

    <div class="bandeauHaut">
        <li class="price"><?php echo number_format($showAlaUne[1], 0, ',', ' '); ?> €</li>
        <li>Type de commerce : <?php echo $showAlaUne[35]; ?></li>
        <li>Secteur : <?php echo $showAlaUne[5]; ?></li>
    </div>

    <div class="middle">

        <li>Référence : <?php echo $showAlaUne[3]; ?></li><br />


        <li><?php if (!empty($showAlaUne[37])) { ?>Catégorie hôtel : <?php echo $showAlaUne[37];
                                                                } ?></li>
        <li>C.A Total Hors taxes : <?php echo number_format($showAlaUne[7], 0, ',', ' '); ?> €</li>
        <li><?php if (!empty($showAlaUne[8])) { ?>C.A Hôtel : <?php echo number_format($showAlaUne[8], 0, ',', ' ');
                                                                ?> € <?php  } ?></li>
        <li><?php if (!empty($showAlaUne[9])) { ?>C.A restauration : <?php echo number_format($showAlaUne[9], 0, ',', ' ');
                                                                        ?> € <?php  } ?></li>
        <li><?php if (!empty($showAlaUne[10])) { ?>C.A Bar : <?php echo number_format($showAlaUne[10], 0, ',', ' ');
                                                                ?> € <?php  } ?></li>
        <li><?php if (!empty($showAlaUne[11])) { ?>E.B.E : <?php echo number_format($showAlaUne[11], 0, ',', ' ');
                                                            ?> € <?php  } ?></li>
        <li><?php if (!empty($showAlaUne[12])) { ?>NB Chambres : <?php echo $showAlaUne[12];
                                                                } ?></li>
        <li><?php if (!empty($showAlaUne[13])) { ?>Taux d'occupation : <?php echo $showAlaUne[13];
                                                                    } ?></li>
        <li><?php if (!empty($showAlaUne[14])) { ?>Prix moyen chambre : <?php echo number_format($showAlaUne[14], 0, ',', ' ');
                                                                        ?> € <?php  } ?></li>
        <li><?php if (!empty($showAlaUne[15])) { ?>NB Places intérieur : <?php echo $showAlaUne[15];
                                                                        } ?></li>
        <li><?php if (!empty($showAlaUne[16])) { ?>NB Places Terrasse : <?php echo $showAlaUne[16];
                                                                    } ?></li>
        <li> <?php if (!empty($showAlaUne[17])) { ?>Horaires d'ouverture : <?php echo $showAlaUne[17];
                                                                        } ?></li>
        <li> <?php if (!empty($showAlaUne[18])) { ?>Fermeture Hebdomadaire : <?php echo $showAlaUne[18];
                                                                            } ?></li>
        <li><?php if (!empty($showAlaUne[19])) { ?>Congés : <?php echo $showAlaUne[19];
                                                        } ?></li>
        <li><?php if (!empty($showAlaUne[20])) { ?>% Limonade : <?php echo $showAlaUne[20];
                                                            } ?></li>
        <li><?php if (!empty($showAlaUne[21])) { ?> Q Bière / An : <?php echo $showAlaUne[21];
                                                                } ?></li>
        <li><?php if (!empty($showAlaUne[22])) { ?> Q Café / Semaine : <?php echo $showAlaUne[22];
                                                                    } ?></li>
        <li><?php if (!empty($showAlaUne[23])) { ?> NB Salariés : <?php echo $showAlaUne[23];
                                                                } ?></li>
        <li><?php if (!empty($showAlaUne[24])) { ?> Fermé le Soir : <?php echo "Oui";
                                                                } ?></li>
        <li><?php if (!empty($showAlaUne[25])) { ?> Licence IV : <?php echo "Oui";
                                                                } ?></li>
        <li><?php if (!empty($showAlaUne[26])) { ?> Gaine d'extraction : <?php echo "Oui";
                                                                        } ?></li>
        <li><?php if (!empty($showAlaUne[27])) { ?> Climatisation : <?php echo "Oui";
                                                                } ?></li>
        <li><?php if (!empty($showAlaUne[28])) { ?> Terrasse : <?php echo "Oui";
                                                            } ?></li>
        <li><?php if (!empty($showAlaUne[29])) { ?> Veranda : <?php echo "Oui";
                                                            } ?></li>
        <li><?php if (!empty($showAlaUne[30])) { ?> Bureau : <?php echo "Oui";
                                                            } ?></li>
        <li><?php if (!empty($showAlaUne[31])) { ?> Parking : <?php echo "Oui";
                                                            } ?></li>
        <br />
        <hr>
        <div class="info">
            <p> Vous avez besoin de plus d’informations ? </p>
            <p> N’hésitez pas à nous contacter au 04 72 40 40 40 ou bien à travers notre formulaire.</p>
            <a href="" class="clickHere">
                <p> Cliquez ici</p>
            </a>
        </div>
    </div>
</ul>