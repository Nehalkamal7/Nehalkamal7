<!DOCTYPE html>
<html>
<head>
<title>اختيار الطعام</title>
<style>
  body { font-family: sans-serif; }
  table { width: 50%; border-collapse: collapse; }
  th, td { border: 1px solid black; padding: 8px; text-align: center; }
  #output { width: 50%; margin-top: 20px; border: 1px solid black; padding: 10px; }
  #language-select { margin-bottom: 10px; }
</style>
</head>
<body>

<h1>Food Selection</h1>

<div id="language-select">
  <select id="language">
    <option value="ar">عربي</option>
    <option value="en" selected>English</option>
  </select>
</div>

<form method="post" action="process.php">
  <table>
    <tr>
      <th>Item Name</th>
      <th>Quantity</th>
      <th>Price (EGP)</th>
    </tr>
  </table>
  <input type="submit" value="Calculate">
</form>

<div id="output"></div>

<script>
  const languageSelect = document.getElementById('language');
  languageSelect.addEventListener('change', function() {
    const language = this.value;
    const table = document.querySelector("table");
    if (language === 'ar') {
      table.innerHTML = `<tr><th>اسم الطعام</th><th>الكمية</th><th>السعر (جنيه مصري)</th></tr>
                       <tr><td>Chicken</td><td><input type="number" name="quantity[]" min="1" value="1"></td><td><input type="number" name="price[]" min="0" value="10"></td></tr>
                       <tr><td>Salad</td><td><input type="number" name="quantity[]" min="1" value="1"></td><td><input type="number" name="price[]" min="0" value="15"></td></tr>
                       <tr><td>Bread</td><td><input type="number" name="quantity[]" min="1" value="1"></td><td><input type="number" name="price[]" min="0" value="5"></td></tr>
                       <tr><td>Drink</td><td><input type="number" name="quantity[]" min="1" value="1"></td><td><input type="number" name="price[]" min="0" value="20"></td></tr>`;
    } else {
      table.innerHTML = `<tr><th>Item Name</th><th>Quantity</th><th>Price (EGP)</th></tr>
                       <tr><td>Chicken</td><td><input type="number" name="quantity[]" min="1" value="1"></td><td><input type="number" name="price[]" min="0" value="10"></td></tr>
                       <tr><td>Salad</td><td><input type="number" name="quantity[]" min="1" value="1"></td><td><input type="number" name="price[]" min="0" value="15"></td></tr>
                       <tr><td>Bread</td><td><input type="number" name="quantity[]" min="1" value="1"></td><td><input type="number" name="price[]" min="0" value="5"></td></tr>
                       <tr><td>Drink</td><td><input type="number" name="quantity[]" min="1" value="1"></td><td><input type="number" name="price[]" min="0" value="20"></td></tr>`;
    }
  });
</script>

</body>
</html>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $items = $_POST["items"]; 
  $quantities = $_POST["quantity"];
  $prices = $_POST["price"];

  $total = 0;
  $output = "<table><tr><th>Item Name</th><th>Quantity</th><th>Price</th></tr>";

  for ($i = 0; $i < count($quantities); $i++) {
    if (isset($quantities[$i]) && $quantities[$i] != "") {
      $quantity = $quantities[$i];
      $price = $prices[$i];

      $total += $quantity * $price;
      $output .= "<tr><td>";
      $output .= "</td><td>" . $quantity . "</td><td>" . $price . "</td></tr>";
    }
  }

  $output .= "<tr><td colspan='2'>Total</td><td>" . $total . "</td></tr></table>";
  echo "<div id='output'>" . $output . "</div>";
}
?>
