<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
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

            ?> 
            <?php if ($count < count($subCat)) { ?>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="categories.php?name=<?php echo $cat; ?>&sub=<?php echo $subCat[$count]; ?>"><?php echo $subCat[$count]; ?></a></li>
            <?php
            }
            $count++;
          }
          ?>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
          </li> -->
          <li class="nav-item">
          <a href="mailto:name@email.com">name@email.com</a>
          </li>
        </ul>
      </div>
    </nav>