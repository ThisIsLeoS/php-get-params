<!-- Stampare una stringa verde se la
variabile password passata in GET è
uguale a "Boolean", altrimenti stampare
una stringa rossa. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Boolean</title>

  <!-- reboot CSS (from Bootstrap) -->
  <link rel="stylesheet" href="css\lib\bootstrap-reboot.min.css">

  <!-- personal CSS -->
  <link rel="stylesheet" href="css/master.css">

  <!-- PHP -->
  <?php
    $isBoolean = $_GET["password"] === "Boolean";
  ?>
</head>
<body>

  <!-- main -->
  <main>
    <div class="container">
      <?php if ($isBoolean): ?>
        <p class="green-font">Ok</p>
      <?php else: ?>
        <p class="red-font">Ko</p>
      <?php endif; ?>
    </div>
  </main>
  <!-- /main -->

</body>
</html>