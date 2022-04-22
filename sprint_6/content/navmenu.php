<?php
   $pagina = "";

   If(isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = "home";
}
?>

<nav class="navbar navbar-expand-sm bg-white navbar-white menubalk">
  <div class="container-fluid">
  <img src="images/logotje.png" alt="Foto" class="Mainfoto navbar-brand rounded-circle" style="width: 50px"/>

<a class="navbar-brand fw-bold">Spyservice <br> <div style="color: rgb(3, 83, 148);">International</div></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if($pagina == "home") { echo"active"; }?>" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($pagina == "overons") { echo"active"; }?>" href="overons">Over ons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($pagina == "documenten") { echo"active"; }?>" href="documenten">Documenten</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($pagina == "contact") { echo"active"; }?>" href="contact">Contact</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>
