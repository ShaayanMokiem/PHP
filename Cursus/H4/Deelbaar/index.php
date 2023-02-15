<!DOCTYPE html>
<html>

<head>
  <title>Deelbaar</title>
</head>

<body>
  <?php
  $getal = 9;
  $deelbaar = false;

  getalDeelDrie($getal, $deelbaar);

  function getalDeelDrie($getal, $deelbaar)
  {
    if ($getal % 3 == 0) {
      $deelbaar = true;
    } else {
      $deelbaar = false;
    }
    if ($deelbaar == true) {
      echo ($getal . " is deelbaar door 3");
    } else {
      echo ($getal . " is niet deelbaar door 3");
    }
  }
  ?>

</body>

</html>