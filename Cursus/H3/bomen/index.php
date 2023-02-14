<?php
?>
<!DOCTYPE html>
<html>

<head>
  <title>PHP Opdrachten</title>
</head>

<body>
  <?php
  $bomen = ['f1', 'f2', 'f3', 'f4', 'f5', 'f6', 'f7', 'f8', 'f9'];

  foreach ($bomen as $boom) {
    echo "<img src='./" . $boom . ".jpg'>";
  }

  ?>

</body>

</html>