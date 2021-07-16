<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Addition Result</title>
  </head>
  <body>
    <?php $result = $_GET['add_first'] + $_GET['add_second']?>
    
    <?="<p>The sum of ${_GET['add_first']} and ${_GET['add_second']} is: ${result}</p>"?><br>
    
    <a href="index.php">Reset</a>
  </body>
</html>