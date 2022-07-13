<!-- Navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="accueil"><span class="nav-color-text">
                    eosConseil</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="hotel"><span class="nav-color-text">
                                Hôtel</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="restaurant"><span class="nav-color-text">
                                Restaurant</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="brasserie"><span class="nav-color-text">
                                Brasserie</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bar"><span class="nav-color-text">
                                Bar</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="snack"><span class="nav-color-text">
                                Snack</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actualites"><span class="nav-color-text">
                                Actualités</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact"><span class="nav-color-text">
                                Contact</span></a>
                    </li>
                    <?php if (isset($_SESSION['name']) && !isset($_SESSION['admin'])) {
                    ?>
                        <!-- ------------------ -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="moncompte" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="nav-color-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-bottom:3px;" fill=yellow class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                    Mon Compte
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:white">
                                <li><a class="dropdown-item" href="moncompte">Gérer mon compte</a></li>
                                <li><a class="dropdown-item" href="index.php?logOut">Se déconnecter</a></li>

                            </ul>
                        </li>




                    <?php

                    } else if (isset($_SESSION['admin'])) {
                    ?>
                        <!-- ------------------ -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="moncompte" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="nav-color-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-bottom:3px;" fill=yellow class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                    Mon Compte
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:white">
                                <li><a class="dropdown-item" href="admin">Administration</a></li>
                                <li><a class="dropdown-item" href="index.php?logOut">Se déconnecter</a></li>
                            </ul>
                        </li>

                    <?php
                    } else {  ?>
                        <!-- ------------------------- -->
                        <li class="nav-item">
                            <a class="nav-link" href="moncompte"><span class="nav-color-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-bottom:3px;" fill=#7fffd4 class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg> Mon compte</span></a>
                        </li>


                    <?php } ?>

                </ul>
            </div>

        </div>

    </nav>

</div>