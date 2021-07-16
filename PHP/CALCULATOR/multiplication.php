<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Multiplication Result</title>
  </head>
  <body>
    <?php $result = $_GET['multiplier'] * $_GET['multiplicand']?>
    
    <?="<p>The product of ${_GET['multiplier']} and ${_GET['multiplicand']} is: ${result}</p>"?><br>
    
    <a href="index.php">Reset</a>
  </body>
</html>