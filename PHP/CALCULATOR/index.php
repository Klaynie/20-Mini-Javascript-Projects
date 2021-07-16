<html>
  <body>

    <h3>Addition</h3>
    <form method="get" action="addition.php">
      First Number: <input type="number" name="add_first"><br>
      Second Number: <input type="number" name="add_second"><br>
      <button type="submit">Add</button><br>
    </form>

    <h3>Subtraction</h3>
    <form method="get" action="subtraction.php">
      Minuend: <input type="number" name="minuend"><br>
      Subtrahend: <input type="number" name="subtrahend"><br>
      <button type="submit">Subtract</button><br>
    </form>

    <h3>Multiplication</h3>
    <form method="get" action="multiplication.php">
      Multiplier: <input type="number" name="multiplier"><br>
      Multiplicand: <input type="number" name="multiplicand"><br>
      <button type="submit">Multiply</button><br>
    </form>

    <h3>Division</h3>
    <form method="get" action="division.php">
      Numerator: <input type="number" name="div_num"><br>
      Denominator: <input type="number" name="div_den"><br>
      <button type="submit">Divide</button><br>
    </form>

    <a href="index.php">Reset</a>
  </body>
</html>