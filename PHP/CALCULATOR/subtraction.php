<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Subtraction Result</title>
  </head>
  <body>
    <?php $result = $_GET['minuend'] - $_GET['subtrahend']?>
    
    <?="<p>The difference of ${_GET['minuend']} and ${_GET['subtrahend']} is: ${result}</p>"?><br>
    
    <a href="index.php">Reset</a>
  </body>
</html>