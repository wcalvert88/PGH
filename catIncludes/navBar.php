<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Home</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <?php 
          if ($_GET['name']) {
            $cat = $_GET['name'];
          }
          // echo $cat;
          switch($cat) {
            case "bpc";
                $cat = "Basic Programming Concepts";
                break;
            case "html";
                $cat = "HTML";
                break;
            case "css";
                $cat = "CSS";
                break;
            case "js";
                $cat = "JavaScript";
                break;
            case "nodejs";
                $cat = "NodeJS";
                break;
            case "php";
                $cat = "PHP";
                break;
            default;
                echo "Category Not Available";
                break;
        }
          $query = "SELECT Category FROM analogies WHERE Category = '{$cat}'";
          $catQuery = mysqli_query($connection, $query);
          confirmQuery($catQuery);
          while ($row = mysqli_fetch_assoc($catQuery)) {


            ?> <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about"><?php echo $cat; ?></a></li>
            <?php
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