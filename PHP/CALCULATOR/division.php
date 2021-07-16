<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Division Result</title>
  </head>
  <body>
    <?php $result = $_GET['div_num'] / $_GET['div_den']?>
    
    <?="<p>The result of ${_GET['div_num']} divded by ${_GET['div_den']} is: ${result}</p>"?><br>
    
    <a href="index.php">Reset</a>
  </body>
</html>