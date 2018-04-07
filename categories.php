<?php      
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