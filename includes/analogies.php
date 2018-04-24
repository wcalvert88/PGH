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

if(isset($_GET['sub'])) {
  $subSource = $_GET['sub'];
} else {
  $subSource = "";
}

if (isSet($_GET['title'])) {
  $title = $_GET['title'];
} else {
  $title = "Something";
}
switch ($title) {
  case "lig":
    $title1 = "Loops in General";
  break;
  case "html":
    $title1 = "html";
  break;
  case "cssgeneral":
    $title1 = "CSS in General";
  break;
  case "jsgeneral":
    $title1 = "JavaScript in General";
  break;
  case "clvsid":
    $title1 = "ClassesIds";
  break;
  case "floops":
    $title1 = "For Loops";
  break;
  case "wloops":
    $title1 = "While Loops";
  break;
  case "fgeneral":
    $title1 = "Functions in General";
  break;
  case "ifelse":
    $title1 = "IfElse";
  break;
  case "variables":
    $title1 = "Variables";
  break;
  case "strings":
    $title1 = "Strings";
  break;
  case "htmltags":
    $title1 = "HTML tags";
  break;
  default :
    $title1 = "Title not found.";
  break;
}

$query2 = "SELECT title FROM analogies WHERE title = '{$title1}' ";
$queryrow2 = mysqli_query($connection, $query2);
$row2 = mysqli_fetch_assoc($queryrow2);
$realTitle = $row2['title'];

$query3 = "SELECT analogy1, analogy2, analogy3 FROM analogies WHERE title = '{$title1}' ";
$row3 = mysqli_query($connection, $query3);

$query = "SELECT * FROM analogies WHERE Category = '{$source}' AND SubCategory = '{$subSource}' AND title = '{$title1}' ";

$subQuery = mysqli_query($connection, $query);
confirmQuery($subQuery);
$row = mysqli_fetch_assoc($subQuery);
$analogy1 = $row['analogy1'];
$analogy2 = $row['analogy2'];
$analogy3 = $row['analogy3'];

?>
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5 text-center"><?php echo $source?></h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                
              <h3 class="mb-0"><?php echo $subSource ?></h3>
              <div class="subheading mb-3 "><?php echo $realTitle; ?></div>
              <p><?php echo $analogy1; ?></p>
            
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"></span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Analogy 2</h3>
              <div class="subheading mb-3"></div>
              <p><?php echo $analogy2; ?></p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"></span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Analogy 3</h3>
              <div class="subheading mb-3"></div>
              <p><?php echo $analogy3; ?></p>
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