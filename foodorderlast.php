<!DOCTYPE html>
<html>
<head>
<title>Food Order - FataFeto's Restaurant</title>
<style>
body { font-family: sans-serif; }
#container { max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9; }
h1, h2 { text-align: center; }
h2 { margin-bottom: 10px; }
table { width: 100%; border-collapse: collapse; margin-bottom: 10px; }
th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
input[type="text"], input[type="number"] { width: 70%; padding: 5px; margin-bottom: 5px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box; }
button { padding: 8px 15px; background-color: #00ab69ff; color: white; border: none; border-radius: 3px; cursor: pointer; }
#food-items, #drinks-items { display: none; }
#output { width: 100%; margin-top: 10px; border: 1px solid #ddd; padding: 10px; background-color: #fff; border-radius: 5px; }
#totalPrice { font-weight: bold; margin-top: 10px; text-align: center; font-size: 18px; }
#nameAddress { text-align: center; }
#nameAddress p { font-size: 16px; margin: 5px 0; }
</style>
</head>
<body>
<div id="container">
  <h1>Order Food from FataFeto's Restaurant</h1>
  <div id="nameAddress">
    <h2>Order Details</h2>
    <p>Your Name:</p> <input type="text" id="name" name="name" required>
    <p>Your Address:</p> <input type="text" id="address" name="address" required>
  </div>

  <button onclick="showFoodItems()">Food Items</button>
  <button onclick="showDrinksItems()">Drinks Items</button>

  <div id="food-items">
    <table>
      <tr><th>Food Item</th><th>Quantity</th><th>Price (EGP)</th></tr>
      <tr><td>Chicken</td><td><input type="number" name="quantity_chicken" min="0" value="0"></td><td>120</td></tr>
      <tr><td>Salad</td><td><input type="number" name="quantity_salad" min="0" value="0"></td><td>80</td></tr>
      <tr><td>Bread</td><td><input type="number" name="quantity_bread" min="0" value="0"></td><td>25</td></tr>
      <tr><td>Pizza</td><td><input type="number" name="quantity_pizza" min="0" value="0"></td><td>150</td></tr>
    </table>
  </div>

  <div id="drinks-items">
    <table>
      <tr><th>Drink Item</th><th>Quantity</th><th>Price (EGP)</th></tr>
      <tr><td>Soda</td><td><input type="number" name="quantity_soda" min="0" value="0"></td><td>35</td></tr>
      <tr><td>Juice</td><td><input type="number" name="quantity_juice" min="0" value="0"></td><td>50</td></tr>
      <tr><td>Tea</td><td><input type="number" name="quantity_tea" min="0" value="0"></td><td>25</td></tr>
    </table>
  </div>

  <form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" value="Submit Order">
  </form>

</div>
<div id="output"></div>
<div id="totalPrice"></div>
<script>
function showFoodItems() { document.getElementById("food-items").style.display = "block"; }
function showDrinksItems() { document.getElementById("drinks-items").style.display = "block"; }
</script>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $address = $_POST["address"];

  $orderDetails = "";
  $totalPrice = 0;

  $foodItems = ['chicken', 'salad', 'bread', 'pizza'];
  foreach ($foodItems as $item) {
    $quantity = (int)$_POST['quantity_' . $item];
    if ($quantity < 0) $quantity = 0;
    $prices = ['chicken' => 120, 'salad' => 80, 'bread' => 25, 'pizza' => 150];
    $price = $prices[$item] ?? 0; 
    if ($quantity > 0) {
      $totalPrice += $quantity * $price;
      $orderDetails .= "<li>" . ucfirst($item) . ": " . $quantity . " x " . $price . " = " . ($quantity * $price) . " EGP</li>";
    }
  }


  $drinkItems = ['soda', 'juice', 'tea'];
  $drinkPrices = ['soda' => 35, 'juice' => 50, 'tea' => 25];
  foreach ($drinkItems as $item) {
    $quantity = (int)$_POST['quantity_' . $item];
    if ($quantity < 0) $quantity = 0;
    $price = $drinkPrices[$item] ?? 0;
    if ($quantity > 0) {
      $totalPrice += $quantity * $price;
      $orderDetails .= "<li>" . ucfirst($item) . ": " . $quantity . " x " . $price . " = " . ($quantity * $price) . " EGP</li>";
    }
  }

  $output = "<div id='output'>";
  if ($orderDetails) {
    $output .= "<p><b>Order Details:</b></p><ul>" . $orderDetails . "</ul>";
    $output .= "<p id='totalPrice'><b>Total Price:</b> " . $totalPrice . " EGP</p>";
  } else {
    $output .= "<p><b>No items selected.</b></p>";
  }
  $output .= "</div>";

  echo $output;
}
?>
