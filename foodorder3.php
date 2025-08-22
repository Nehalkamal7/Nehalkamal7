<!DOCTYPE html>
<html>
<head>
<title>طلب الطعام</title>
<style>
  body { font-family: sans-serif; }
  table { width: 50%; border-collapse: collapse; }
  th, td { border: 1px solid black; padding: 8px; text-align: center; }
  #output { width: 50%; margin-top: 20px; border: 1px solid black; padding: 10px; }
  #language-select { margin-bottom: 10px; }
</style>
</head>
<body>

<h1>طلب الطعام</h1>

<div id="language-select">
  <select id="language">
    <option value="ar">عربي</option>
    <option value="en" selected>English</option>
  </select>
</div>

<form method="post" action="">  
  <table>
    <tr>
      <th>اسم الطعام</th>
      <th>الكمية</th>
      <th>السعر (جنيه مصري)</th>
    </tr>
    <tr>
      <td>Chicken</td>
      <td><input type="number" name="quantity_chicken" min="0" value="0"></td>
      <td>10</td>
    </tr>
    <tr>
      <td>Salad</td>
      <td><input type="number" name="quantity_salad" min="0" value="0"></td>
      <td>15</td>
    </tr>
    <tr>
      <td>Bread</td>
      <td><input type="number" name="quantity_bread" min="0" value="0"></td>
      <td>5</td>
    </tr>
    <tr>
      <td>Drink</td>
      <td><input type="number" name="quantity_drink" min="0" value="0"></td>
      <td>20</td>
    </tr>
  </table>
  <input type="submit" value="إرسال الطلب">
</form>

<div id="output"></div>

<script>
  const languageSelect = document.getElementById('language');
  languageSelect.addEventListener('change', function() {
    const language = this.value;
  });
</script>

</body>
</html>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $quantity_chicken = $_POST["quantity_chicken"];
  $quantity_salad = $_POST["quantity_salad"];
  $quantity_bread = $_POST["quantity_bread"];
  $quantity_drink = $_POST["quantity_drink"];


  $total_price = (int)$quantity_chicken * 10 + (int)$quantity_salad * 15 + (int)$quantity_bread * 5 + (int)$quantity_drink * 20;

  $output = "<p><b>تفاصيل الطلب:</b></p>";
  $output .= "<ul>";
  if ($quantity_chicken > 0) $output .= "<li>فراخ: " . $quantity_chicken . " × 10 جنيه = " . $quantity_chicken * 10 . " جنيه</li>";
  if ($quantity_salad > 0) $output .= "<li>سلطة: " . $quantity_salad . " × 15 جنيه = " . $quantity_salad * 15 . " جنيه</li>";
  if ($quantity_bread > 0) $output .= "<li>خبز: " . $quantity_bread . " × 5 جنيه = " . $quantity_bread * 5 . " جنيه</li>";
  if ($quantity_drink > 0) $output .= "<li>مشروب: " . $quantity_drink . " × 20 جنيه = " . $quantity_drink * 20 . " جنيه</li>";
  $output .= "</ul>";
  $output .= "<p><b>الإجمالي:</b> " . $total_price . " جنيه</p>";

  echo "<div id='output'>" . $output . "</div>";
}
?>
