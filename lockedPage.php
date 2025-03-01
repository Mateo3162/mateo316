<?php
session_start();

if (isset($_SESSION["valid"]) && $_SESSION["valid"]) {
	// Page with Secrets
?>

<!DOCTYPE html>
<html lang="en">
<script src="yes.js"> </script>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="mateo316 is the latest advancement in the world of computing">
    <title>mateo316</title>
    <link rel="stylesheet" href="fernan.css">
    <link rel="icon" href="images/5.jpeg" type="image/icon type">
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MV8D0H10XN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MV8D0H10XN');
</script>

<body class="d-flex flex-column min-vh-100">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <a class="nav-link active" href="index.php"><h1 class="text-center">AILAN PAGE IS LIVE NOW!!!</h1></a>
        <a class="announcement" href="a1.php">CLICK HERE</a>
    </header>
    <nav class="navbar navbar-expand-lg bg-terciary">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" href="index.php">
          <img src="images/5.jpeg" class="rounded-circle me-2" alt="Bootstrap" width="60" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button> 
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav border-mobile">
            <a class="nav-link active mx-2" href="g1.php">Demacrado</a>
            <a class="nav-link active mx-2" href="a1.php">Ailan</a>
            <a class="nav-link active mx-2" href="thanks.php">Thanks</a>
          </div>
		  <button type="button" class="btn btn-danger m-2" onclick="logout()">Logout</button>
        </div>
      </div>
  </nav>
    <main>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/1.jpeg" class="d-block w-100" alt="" width="1600" height="900">
                <div class="carousel-caption d-none d-sm-block">
                    <h5>Demacrado</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/2.jpeg" class="d-block w-100" alt="" width="1600" height="900">
                <div class="carousel-caption d-none d-sm-block">
                    <h5>Feli</S></h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/3.jpeg" class="d-block w-100" alt="" width="1600" height="900">
                <div class="carousel-caption d-none d-sm-block">
                    <h5>Deprimido</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/4.jpeg" class="d-block w-100" alt="" width="1600" height="900">
                <div class="carousel-caption d-none d-sm-block">
                    <h5>Sopita</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </main>

    <footer class="mt-auto">© 2025, mateo316</footer>
</body>

</html>

<?php } else { 
	// Page with no secrets!
?>
	
<html>

Nope! Nope! Nope! All the Nope!
<br>
<h1 class="text-center">BEGONE!</h1>

</html>

<?php } ?>