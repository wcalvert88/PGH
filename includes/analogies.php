<?php 

include "catIncludes/header.php";
include "./catIncludes/navBar.php";

if (isset($_GET['name'])) {
  $source = $_GET['name'];
 } else {
  $source = '';
 }
 switch($source) {
  case "bpc":
      $source = "Basic Programming Concepts";
      break;
  case "html":
      $source = "HTML";
      break;
  case "css":
      $source = "CSS";
      break;
  case "js":
      $source = "JavaScript";
      break;
  case "nodejs":
      $source = "NodeJS";
      break;
  case "php":
      $source = "PHP";
      break;
  default;
      $source = "Page Not Found";
      break;
 }

$query1 = "SELECT category FROM analogies WHERE Category = '{$source}' ";
$transform = mysqli_query($connection, $query1);
confirmQuery($transform);
$row1 = mysqli_fetch_assoc($transform);

if (isSet($_GET['title'])) {
  $title = $_GET['title'];
} else {
  $title = "Something";
}

switch ($title) {
  case "lig":
    $title = "Loops in General";
  break;
  case "html":
    $title = "html";
  break;
  case "cssgeneral":
    $title = "CSS in General";
  break;
  case "jsgeneral":
    $title = "JavaScript in General";
  break;
  case "clvsid":
    $title = "Class vs Id";
  break;
  case "floops":
    $title = "For Loops";
  break;
  case "wloops":
    $title = "While Loops";
  break;
  case "fgeneral":
    $title = "Functions in General";
  break;
  case "ifelse":
    $title = "If and Else";
  break;
  case "variables":
    $title = "Variables";
  break;
  case "strings":
    $title = "Strings";
  break;
  case "htmltags":
    $title = "HTML tags";
  break;
  default :
    $title = "Title not found.";
  break;
}


$query2 = "SELECT title FROM analogies WHERE title = '{$title}' ";
$row2 = mysqli_query($connection, $query2);

$query3 = "SELECT analogy1, analogy2, analogy3 FROM analogies WHERE title = {'$title'} ";
$row3 = mysqli_query($connection, $query3);

?>
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5 text-center"><?php echo $row1['Category']; ?></h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                
              <h3 class="mb-0"><?php print_r($row2); ?></h3>
              <div class="subheadingmb-3"></div>
              <p><?php print_r($row3); ?></p>
            
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"></span>
            </div>
          </div>
          

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0"></h3>
              <div class="subheading mb-3"></div>
              <p>analogy 2</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"></span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0"></h3>
              <div class="subheading mb-3"></div>
              <p>analogy 3</p>
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