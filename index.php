<!-- index.php-->
<html>
  <?php include "head.php"; ?>
  <body>
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php?halaman=home">
          <img src="assets/img/logo.png" alt="" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php?halaman=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?halaman=profile">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?halaman=contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?halaman=portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?halaman=login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid h-75">
      <div class="row d-flex justify-content-center">
        <?php
          if (!empty($_GET['halaman'])) {
            if ($_GET['halaman']=='home') {
              include "halaman/home.php";
            }
            else if ($_GET['halaman']=='profile') {
              include "halaman/profile.php";
            }
            else if ($_GET['halaman']=='contact') {
              include "halaman/contact.php";
            }
            else if ($_GET['halaman']=='portofolio') {
              include "halaman/portofolio.php";
            }
            else if ($_GET['halaman']=='login') {
              include "halaman/login.php";
            }else{
              echo "Halaman Tidak Ditemukan";
            }
          }else{
            include "halaman/home.php";
          }
        ?>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>