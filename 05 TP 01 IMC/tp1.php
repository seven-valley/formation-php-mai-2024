<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="weight-scale.svg" type="image/svg+xml">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>

<body>
  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
      <a class="navbar-brand" href="#!"><i class="fa-solid fa-weight-scale me-3"></i> Calculer IMC</a>
    </div>
  </nav>
  <div class="container p-5">
    <!-- col-4 : je prends 4 colonnes sur 12 -->
    <div class="col-4">
      <form method="post" action="tp1.php">
      <input type="text" class="form-control" name="poids" placeholder="Poids en kg " />
      <input type="text" class="form-control my-3" name="taille" placeholder="Taille en mètre " />
      <button class="btn btn-primary" type="submit">Calculer</button>
      </form>
      <?php  if ((isset($_POST['taille'])) && (isset($_POST['poids']))): ?>
      <?php var_dump($_POST); // debug ?>
      <div class="alert alert-success mt-3" role="alert">
        Votre IMC est <span id="imc"></span><br />
        tranche : normal<span id="tranche"></span><br />
        conseil : <span id="conseil"></span>
      </div>

      <div class="alert alert-danger mt-3" role="alert">
        Votre IMC est <span id="imc"></span><br />
        tranche : suproids<span id="tranche"></span><br />
        conseil : <span id="conseil"></span>
      </div>

      <div class="alert alert-warning mt-3" role="alert">
        Votre IMC est <span id="imc"></span><br />
        tranche : obese<span id="tranche"></span><br />
        conseil : <span id="conseil"></span>
      </div>
      <a href="https://getbootstrap.com/docs/4.0/components/alerts/">https://getbootstrap.com/docs/4.0/components/alerts/</a>
    <?php endif; ?>
    </div>
  </div>
  <footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5">
      <p class="m-0 text-center text-white">Copyright &copy;IMC 2023</p>
    </div>
  </footer>

</body>

</html>