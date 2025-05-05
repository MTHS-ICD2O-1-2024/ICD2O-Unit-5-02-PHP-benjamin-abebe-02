<!DOCTYPE html>
<!-- ICS2O-Unit5-02-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Positive or Negative #, in JS" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Positive or Negative #, in JS</title>
</head>

<body>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Generated Number</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">
        <?php
        $randomPositive = rand(1, 6);
        $randomNegative = rand(-6, -1);
        $choice = $_GET['kind-of-number'];

        if ($choice == "1") {
          echo "<h4>The random <strong>positive</strong> number is: " . $randomPositive . "</h4>";
        } else {
          echo "<h4>The random <strong>negative</strong> number is: " . $randomNegative . "</h4>";
        }
        ?>
        <br />
        <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" href="./index.php">Try Again</a>
      </div>
    </main>
  </div>
</body>

</html>