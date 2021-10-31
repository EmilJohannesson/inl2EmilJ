<?php

get_header();

?>

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./img/logga.png" alt="" width="auto" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Hem</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Om mig</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blogg</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontakt</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="red-bg" id="hero">
    <div class="container">
      <div class="d-flex flex-row-reverse justify-content-center p-4">
        <div class="row d-flex flex-row-reverse">
          <div class="col-lg-6">
            <img class="img-fluid" src="./img/—Pngtree—beautiful hologram -color  _3643167.png">
          </div>
          <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-1">My Portfolio</h1>
            <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <span
                class="text-decoration-underline">Duis aute irure dolor in est nonluctus</span> reprehenderi.</p>
            <button type="button" class="btn btn-outline-light">Till blogg</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="generic" id="about">
    <div class="container">
      <h2 class="display-5 mb-2">Om mig</h2>
      <div class="row mb-3">
        <div class="col-sm-12 col-md-6">
          <div class="d-flex h-50 flex-column justify-content-center mt-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
            </p>
          </div>
        </div>

        <div class="col-sm-12 col-md-3 p-0">
          <img class="img-fluid" src="./img/—Pngtree—creative element for pouring red_5353601.png">
        </div>
        <div class="col-sm-12 col-md-3"></div>
      </div>
    </div>
  </section>

  <footer class="text-center text-lg-start">
    <div class="footer text-center text-light p-3">
      © 2021 Copyright:
      <a class="text-light" href="https://example.com/"> example.com</a>
    </div>
  </footer>


<?
get_footer();
?>