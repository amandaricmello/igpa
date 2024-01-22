<?php
include_once("partials/head.php");
?>

<header>
    <div class="d-block bg-white py-4">
        <div class="container px-md-0">
            <div class="row justify-content-between">
                <a href="#" class="col-md-2 col-6 px-lg-0">
                    <img class="logo" src="assets/images/logo.png" alt="Logotipo Instituto GPA">
                </a>

                <nav class="nav social-icons col-3 px-0 d-md-flex d-none">
                    <a class="nav-link px-2" href="#" target="_blank">
                        <img src="assets/icons/instagram.svg" alt="Ícone do Instagram">
                    </a>
                    <a class="nav-link px-2" href="#" target="_blank">
                        <img src="assets/icons/facebook.svg" alt="Ícone do Facebook">
                    </a>
                    <a class="nav-link px-2" href="#" target="_blank">
                        <img src="assets/icons/youtube.svg" alt="Ícone do Youtube">
                    </a>
                </nav>
                <button class="navbar-toggler d-md-none d-inline col-3" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleMenu()">
                    <span id="menu-icon" class="material-symbols-outlined pt-3">
                        menu
                    </span>
                </button>
            </div>
        </div>
    </div>

    <div class="d-block bg-primary">
        <nav class="navbar navbar-expand-lg navbar-light container py-0">
            <div class="container-fluid justify-content-center px-md-0">
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav justify-content-md-between mb-2 mb-lg-0">
                        <li class="nav-item dropdown" onmouseover="changeIcon(this)" onmouseout="resetIcon(this)">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Quem Somos
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./about-us.php">Instituto GPA</a></li>
                                <li><a class="dropdown-item" href="#">Governança</a></li>
                                <li><a class="dropdown-item" href="#">Relatórios</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" onmouseover="changeIcon(this)" onmouseout="resetIcon(this)">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Alimentação
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Campanha de Arrecadação</a></li>
                                <li><a class="dropdown-item" href="#">Parceria Contra o Desperdício</a></li>
                                <li><a class="dropdown-item" href="#">Apoios Emergenciais</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" onmouseover="changeIcon(this)" onmouseout="resetIcon(this)">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Trabalho
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Mãos na Massa</a></li>
                                <li><a class="dropdown-item" href="#">Prosperar</a></li>
                                <li><a class="dropdown-item" href="#">NATA</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" onmouseover="changeIcon(this)" onmouseout="resetIcon(this)">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Apoio / Parceria
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Movimento Arredondar</a></li>
                                <li><a class="dropdown-item" href="#">Produtos Sociais</a></li>
                                <li><a class="dropdown-item" href="#">Projetos Incentivados</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Voluntariado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Organizações Sociais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notícias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>

                    <nav class="nav social-icons pb-5 px-0 d-md-none d-flex justify-content-center">
                        <a class="nav-link px-2" href="#" target="_blank">
                            <img src="assets/icons/instagram-white.svg" alt="Ícone do Instagram">
                        </a>
                        <a class="nav-link px-2" href="#" target="_blank">
                            <img src="assets/icons/facebook-white.svg" alt="Ícone do Facebook">
                        </a>
                        <a class="nav-link px-2" href="#" target="_blank">
                            <img src="assets/icons/youtube-white.svg" alt="Ícone do Youtube">
                        </a>
                    </nav>
                </div>
            </div>
        </nav>
    </div>
</header>

<main>