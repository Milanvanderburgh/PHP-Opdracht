<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <title>Spyservice International</title>
</head>

<body>

    <?php
    include("content/navmenu.php");
    
    // Checken op welke pagina hij zich bevind
    if (isset($_GET["pagina"])) {
        $paginanaam = $_GET["pagina"];
    } else {
        $paginanaam = "home";
    }
    // Home content koppelen aan home page
    if($paginanaam== "home") {
        include("content/home_content.php");
    }
    // Over ons content koppelen aan over ons page
    if($paginanaam== "overons") {
        include("content/overons_content.php");
    }
    if($paginanaam== "documenten") {
        include("content/inlog.php");
    }

    if($paginanaam== "contact") {
        include("content/contact.php");
    }

    ?>

</body>

</html>