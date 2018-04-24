<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="./index.php">
        <span class="d-block d-lg-none">Home</span>
        <span class="d-none d-lg-block">
        <?php
        if ($_GET['name']) {
          $cat = $_GET['name'];
        } 
        switch ($cat) {
          case "bpc":
            $img = "./images/BPC.jpg";
            break;
          case "cplusplus":
            $img = "./images/CPlusPlus.png";
            break;
          case "css":
            $img = "./images/CSS3.jpg";
            break;
          case "html":
            $img = "./images/HTML5.png";
            break;
          case "js":
            $img = "./images/JavaScript.jpg";
            break;
          case "nodejs":
            $img = "./images/nodejs.jpg";
            break;
          case "php":
            $img = "./images/PHP.jpg";
            break;
          case "python":
            $img = "./images/Python.jpg";
            break;
          case "ruby":
            $img = "./images/Ruby.jpg";
            break;
          default:
            echo "Image Not Found";
        }
        ?>
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo $img; ?>" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <?php 
          
          // echo $cat;
          switch($cat) {
            case "bpc":
                $cat1 = "Basic Programming Concepts";
                break;
            case "html":
                $cat1 = "HTML";
                break;
            case "css":
                $cat1 = "CSS";
                break;
            case "js":
                $cat1 = "JavaScript";
                break;
            case "nodejs":
                $cat1 = "NodeJS";
                break;
            case "php":
                $cat1 = "PHP";
                break;
            case "python":
                $cat1 = "Python";
                break;
            default;
                echo "Category Not Available";
        }

        if (isSet($_GET['title'])) {
          $title = $_GET['title'];
        } else {
          $title = "";
        }

        // Categories
          $query = "SELECT Category FROM analogies WHERE Category = '{$cat1}'";
          $catQuery = mysqli_query($connection, $query);
          confirmQuery($catQuery);
          // Sub-categories
          $subQuery = "SELECT DISTINCT SubCategory FROM analogies WHERE Category = '{$cat1}'";
          $subSubQuery = mysqli_query($connection, $subQuery);
          $subCat = array();
          while ($rows = mysqli_fetch_assoc($subSubQuery)) {
            $subCat[] = $rows['SubCategory'];
          }
          echo "<strong>";
          echo $cat1;
          echo "</strong>";
          $count = 0;
          while ($row = mysqli_fetch_assoc($catQuery)) {
            if ($count < count($subCat)) {
            $titleQuery = "SELECT title FROM analogies WHERE Category = '{$cat1}' AND SubCategory = '{$subCat[$count]}' ";
            
            $whileTitleQuery = mysqli_query($connection, $titleQuery);
            // print_r($whileTitleQuery);
            $row1 = mysqli_fetch_assoc($whileTitleQuery);
            switch ($row1['title']) {
              case "Loops in General":
                $title = "lig";
                break;
              case "html":
                $title = "html";
                break;
              case "CSS in General":
                $title = "cssgeneral";
                break;
              case "JavaScript in General":
                $title = "jsgeneral";
                break;
              case "ClassesIds":
                $title = "clvsid";
                break;
              case "For Loops":
                $title = "floops";
                break;
              case "While Loops":
                $title = "wloops";
                break;
              case "Functions in General":
                $title = "fgeneral";
                break;
              case "IfElse":
                $title = "ifelse";
                break;
              case "Variables":
                $title = "variables";
                break;
              case "Strings":
                $title = "strings";
                break;
              case "HTML tags":
                $title = "htmltags";
                break;
              default :
                $title = "Title not found.";
                break;
             }
             ?>
             <!--<li class="nav-item nav-link js-scroll-trigger"><?php //echo $subCat[$count]; ?></li>-->


            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="categories.php?name=<?php echo $cat; ?>&sub=<?php echo $subCat[$count]; ?>&title=<?php echo $title; ?>"><?php echo $row1['title']; ?></a></li>
            <?php
            }
            $count++;
          }
          ?>

          <li class="nav-item">
          <a href="mailto:name@email.com">name@email.com</a>
          </li>
        </ul>
      </div>
    </nav>