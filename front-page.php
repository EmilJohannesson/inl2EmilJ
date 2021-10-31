<?php

get_header();

$title = get_field('page_title');
$text = get_field('page_text');
$image = get_field('page_image');
$link = get_field('page_link');

?>



  <section class="red-bg" id="hero">
    <div class="container">
      <div class="d-flex flex-row-reverse justify-content-center p-4">
        <div class="row d-flex flex-row-reverse">
          <div class="col-lg-6">
            <img class="img-fluid" src="/img/hologram.png">
          </div>
          <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-1"><?php echo $title; ?></h1>
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
            <p><?php echo $text; ?>
            </p>
          </div>
        </div>

        <div class="col-sm-12 col-md-3 p-0">
          <img class="img-fluid" src="<?php echo $image; ?>">
        </div>
        <div class="col-sm-12 col-md-3"></div>
      </div>
    </div>
  </section>

  <footer class="text-center text-lg-start">
    <div class="footer text-center text-light p-3">
      © 2021 Copyright:
      <a class="text-light" href="<?php echo $link; ?>"> example.com</a>
    </div>
  </footer>


<?
get_footer();
?>