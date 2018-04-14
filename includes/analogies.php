<?php 

include "catIncludes/header.php";
include "./catIncludes/navBar.php";

if (isset($_GET['name'])) {
  $source = $_GET['name'];
} else {
  $source = '';
}

switch($source) {
  case "bpc";
      include "includes/bpc.php";
      break;
  case "html";
      include "includes/html.php";
      break;
  case "css";
      include "includes/css.php";
      break;
  case "js";
      include "includes/js.php";
      break;
  case "nodejs";
      include "includes/nodejs.php";
      break;
  case "php";
      include "includes/php.php";
      break;
  default;
      include "index.php";
      break;
}

?>
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5 text-center"><?php /* fix me */ $query = "SELECT category FROM analogies WHERE title"; ?></h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                
              <h3 class="mb-0">Analogy1</h3>
              <div class="subheading mb-3 ">Analogy title</div>
              <p>explanation</p>
            
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"></span>
            </div>
          </div>
          ?>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Analogy2</h3>
              <div class="subheading mb-3">Analogy title 2.0</div>
              <p>analogy explanation</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"></span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Analogy3</h3>
              <div class="subheading mb-3">analogy subtitle</div>
              <p>analogy explanation</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"></span>
            </div>
          </div>

          
          </div>

        </div>

      </section>
      <?php 
      include "catIncludes/social.php";
      include "catIncludes/footer.php";
      ?>