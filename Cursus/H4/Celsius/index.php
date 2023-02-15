<!DOCTYPE html>
<html>

<head>
  <title>Celsius</title>
</head>

<body>
  <?php
  $celsius = 20;
  $fahrenheit = 0;

  temp($celsius, $fahrenheit);

  function temp($celsius, $fahrenheit)
  {
    $fahrenheit = ($celsius + 1.8) + 32;
    echo ($celsius . " celsius is " . $fahrenheit . " fahrenheit");
  };
  ?>
</body>

</html>