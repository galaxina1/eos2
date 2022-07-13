<script>
    document.getElementById('page').setAttribute('style', 'background-color:white;border:none;');
    document.getElementById('blocCentre').setAttribute('style', 'margin-left:0px;margin-top:0px;');
</script>

<ul>
    <li><span class="descript"><?php echo $showDetails[4]; ?></span></li>

    <div class="bandeauHaut">
        <li class="price"><?php echo number_format($showDetails[1], 0, ',', ' '); ?> €</li>
        <li>Type de commerce : <?php echo $showDetails[35]; ?></li>
        <li>Secteur : <?php echo $showDetails[5]; ?></li>
    </div>

    <div class="middle">

        <li>Référence : <?php echo $showDetails[3]; ?></li><br />


        <li><?php if (!empty($showDetails[37])) { ?>Catégorie hôtel : <?php echo $showDetails[37];
                                                                    } ?></li>
        <li>C.A Total Hors taxes : <?php echo number_format($showDetails[7], 0, ',', ' '); ?> €</li>
        <li><?php if (!empty($showDetails[8])) { ?>C.A Hôtel : <?php echo number_format($showDetails[8], 0, ',', ' ');
                                                                ?> € <?php  } ?></li>
        <li><?php if (!empty($showDetails[9])) { ?>C.A restauration : <?php echo number_format($showDetails[9], 0, ',', ' ');
                                                                        ?> € <?php  } ?></li>
        <li><?php if (!empty($showDetails[10])) { ?>C.A Bar : <?php echo number_format($showDetails[10], 0, ',', ' ');
                                                                ?> € <?php  } ?></li>
        <li><?php if (!empty($showDetails[11])) { ?>E.B.E : <?php echo number_format($showDetails[11], 0, ',', ' ');
                                                            ?> € <?php  } ?></li>
        <li><?php if (!empty($showDetails[12])) { ?>NB Chambres : <?php echo number_format($showDetails[12], 0, ',', ' ');
                                                                } ?></li>
        <li><?php if (!empty($showDetails[13])) { ?>Taux d'occupation : <?php echo $showDetails[13];
                                                                    } ?></li>
        <li><?php if (!empty($showDetails[14])) { ?>Prix moyen chambre : <?php echo $showDetails[14];
                                                                            ?> € <?php  } ?></li>
        <li><?php if (!empty($showDetails[15])) { ?>NB Places intérieur : <?php echo $showDetails[15];
                                                                        } ?></li>
        <li><?php if (!empty($showDetails[16])) { ?>NB Places Terrasse : <?php echo $showDetails[16];
                                                                        } ?></li>
        <li> <?php if (!empty($showDetails[17])) { ?>Horaires d'ouverture : <?php echo $showDetails[17];
                                                                        } ?></li>
        <li> <?php if (!empty($showDetails[18])) { ?>Fermeture Hebdomadaire : <?php echo $showDetails[18];
                                                                            } ?></li>
        <li><?php if (!empty($showDetails[19])) { ?>Congés : <?php echo $showDetails[19];
                                                            } ?></li>
        <li><?php if (!empty($showDetails[20])) { ?>% Limonade : <?php echo $showDetails[20];
                                                                } ?></li>
        <li><?php if (!empty($showDetails[21])) { ?> Q Bière / An : <?php echo $showDetails[21];
                                                                } ?></li>
        <li><?php if (!empty($showDetails[22])) { ?> Q Café / Semaine : <?php echo $showDetails[22];
                                                                    } ?></li>
        <li><?php if (!empty($showDetails[23])) { ?> NB Salariés : <?php echo $showDetails[23];
                                                                } ?></li>
        <li><?php if (!empty($showDetails[24])) { ?> Fermé le Soir : <?php echo "Oui";
                                                                    } ?></li>
        <li><?php if (!empty($showDetails[25])) { ?> Licence IV : <?php echo "Oui";
                                                                } ?></li>
        <li><?php if (!empty($showDetails[26])) { ?> Gaine d'extraction : <?php echo "Oui";
                                                                        } ?></li>
        <li><?php if (!empty($showDetails[27])) { ?> Climatisation : <?php echo "Oui";
                                                                    } ?></li>
        <li><?php if (!empty($showDetails[28])) { ?> Terrasse : <?php echo "Oui";
                                                            } ?></li>
        <li><?php if (!empty($showDetails[29])) { ?> Veranda : <?php echo "Oui";
                                                            } ?></li>
        <li><?php if (!empty($showDetails[30])) { ?> Bureau : <?php echo "Oui";
                                                            } ?></li>
        <li><?php if (!empty($showDetails[31])) { ?> Parking : <?php echo "Oui";
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