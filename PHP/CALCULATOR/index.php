<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>PHP Calculator</title>
  </head>
  <body>
  <div class="container">
    <h3>Addition</h3>
    <form method="get" action="addition.php">
      <label for="add_first">First Number:</label>
      <input type="number" name="add_first"><br>
      <label for="add_second">Second Number:</label>
      <input type="number" name="add_second"><br>
      <button type="submit">Add</button><br>
    </form>
  </div>
  <div class="container">
    <h3>Subtraction</h3>
    <form method="get" action="subtraction.php">
      <label for="minuend">Minuend:</label>
      <input type="number" name="minuend"><br>
      <label for="subtrahend">Subtrahend:</label>
      <input type="number" name="subtrahend"><br>
      <button type="submit">Subtract</button><br>
    </form>
  </div>
  <div class="container">
    <h3>Multiplication</h3>
    <form method="get" action="multiplication.php">
      <label for="multiplier">Multiplier:</label>
      <input type="number" name="multiplier"><br>
      <label for="multiplicand">Multiplicand:</label>
      <input type="number" name="multiplicand"><br>
      <button type="submit">Multiply</button><br>
    </form>
  </div>
  <div class="container">
    <h3>Division</h3>
    <form method="get" action="division.php">
      <label for="div_num">Numerator:</label>
      <input type="number" name="div_num"><br>
      <label for="div_den">Denominator:</label>
      <input type="number" name="div_den"><br>
      <button type="submit">Divide</button><br>
    </form>
  </div>
    <a href="index.php">Reset</a>
  </body>
</html>