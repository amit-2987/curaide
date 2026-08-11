<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/autoload.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/favicon.ico">
    <title>Curaide - Thank you</title>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header-assets.php') ?>
    <link href="/css/separate-curaide.css?v=<?php echo date("Y-m-d H:i:s"); ?>" rel="stylesheet">
</head>


<body>
  <section class="curaide-hero-section-privacy">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

    <div class="container">

      <div class="row banner-privacy py-5 mt-5">

        <div class="col-md-12 col-lg-12 col-xl-12">

          <h1>Thank you for your inquiry!</h1>

          <h2>We will reach out to you shortly.</h2>

          <!-- <a href="/" class="btn btn-gradient-danger mt-4">Back to Home</a> -->

        </div>

      </div>

    </div>
  </section>


<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>