<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order - FataFeto's Restaurant</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            margin: 0;
            padding: 20px;
            color: #333;
        }
        #container {
            max-width: 700px;
            margin: 20px auto;
            padding: 30px;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #00ab69;
        }
        h1 {
            color: #00ab69;
            margin-bottom: 10px;
            font-size: 32px;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #00ab69;
            color: white;
            font-weight: 600;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tr:hover {
            background-color: #e9ecef;
        }
        input[type="text"], input[type="number"] {
            width: 70px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
        }
        input[type="text"] {
            width: 100%;
            margin-bottom: 15px;
            padding: 12px;
        }
        button {
            padding: 12px 20px;
            background-color: #00ab69;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: all 0.3s;
            margin: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        button:hover {
            background-color: #008a54;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        #food-items, #drinks-items {
            display: none;
            margin-top: 20px;
            animation: fadeIn 0.5s;
        }
        .section-title {
            background-color: #2c3e50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        #order-summary {
            margin-top: 30px;
            padding: 25px;
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            border-radius: 10px;
            border-left: 5px solid #00ab69;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        #totalPrice {
            font-weight: bold;
            font-size: 24px;
            color: #00ab69;
            text-align: center;
            margin-top: 20px;
            padding: 15px;
            background-color: white;
            border-radius: 8px;
            border: 2px dashed #00ab69;
        }
        .customer-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        .info-box {
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        .info-box p {
            margin: 5px 0;
        }
        .order-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        .order-item:last-child {
            border-bottom: none;
        }
        .item-name {
            font-weight: 500;
        }
        .item-price {
            color: #00ab69;
            font-weight: bold;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @media (max-width: 768px) {
            .customer-info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div id="container">
        <div class="header">
            <h1>FataFeto's Restaurant</h1>
            <p>Order your favorite food and drinks</p>
        </div>

        <h2>Order Details</h2>
        <div class="customer-info">
            <div class="info-box">
                <p><strong>Your Name:</strong></p>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="info-box">
                <p><strong>Your Address:</strong></p>
                <input type="text" id="address" name="address" placeholder="Enter your address" required>
            </div>
        </div>

        <div style="text-align: center; margin: 20px 0;">
            <button onclick="showFoodItems()">Food Items</button>
            <button onclick="showDrinksItems()">Drinks Items</button>
        </div>

        <div id="food-items">
            <div class="section-title">Food Menu</div>
            <table>
                <tr><th>Food Item</th><th>Quantity</th><th>Price (EGP)</th></tr>
                <tr><td>Chicken</td><td><input type="number" name="quantity_chicken" min="0" value="0"></td><td>120</td></tr>
                <tr><td>Salad</td><td><input type="number" name="quantity_salad" min="0" value="0"></td><td>80</td></tr>
                <tr><td>Bread</td><td><input type="number" name="quantity_bread" min="0" value="0"></td><td>25</td></tr>
                <tr><td>Pizza</td><td><input type="number" name="quantity_pizza" min="0" value="0"></td><td>150</td></tr>
            </table>
        </div>

        <div id="drinks-items">
            <div class="section-title">Drinks Menu</div>
            <table>
                <tr><th>Drink Item</th><th>Quantity</th><th>Price (EGP)</th></tr>
                <tr><td>Soda</td><td><input type="number" name="quantity_soda" min="0" value="0"></td><td>35</td></tr>
                <tr><td>Juice</td><td><input type="number" name="quantity_juice" min="0" value="0"></td><td>50</td></tr>
                <tr><td>Tea</td><td><input type="number" name="quantity_tea" min="0" value="0"></td><td>25</td></tr>
            </table>
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <button type="button" onclick="submitOrder()" style="padding: 15px 30px; font-size: 18px;">
                Submit Order
            </button>
        </div>

        <div id="order-summary" style="display: none;">
            <h2 style="color: #00ab69; text-align: center;">Order Confirmation</h2>
            <div id="customer-details"></div>
            <div class="section-title">Order Items</div>
            <div id="order-details"></div>
            <div id="totalPrice"></div>
        </div>
    </div>

    <script>
        function showFoodItems() { 
            document.getElementById("food-items").style.display = "block"; 
            document.getElementById("drinks-items").style.display = "none";
        }
        
        function showDrinksItems() { 
            document.getElementById("drinks-items").style.display = "block"; 
            document.getElementById("food-items").style.display = "none";
        }
        
        function submitOrder() {
            const name = document.getElementById("name").value;
            const address = document.getElementById("address").value;
            
            if (!name || !address) {
                alert("Please enter your name and address.");
                return;
            }
            

            const foodItems = [
                { name: "Chicken", id: "quantity_chicken", price: 120 },
                { name: "Salad", id: "quantity_salad", price: 80 },
                { name: "Bread", id: "quantity_bread", price: 25 },
                { name: "Pizza", id: "quantity_pizza", price: 150 }
            ];
            

            const drinkItems = [
                { name: "Soda", id: "quantity_soda", price: 35 },
                { name: "Juice", id: "quantity_juice", price: 50 },
                { name: "Tea", id: "quantity_tea", price: 25 }
            ];
            
            let orderDetails = "";
            let totalPrice = 0;
            

            foodItems.forEach(item => {
                const quantity = parseInt(document.querySelector(`[name="${item.id}"]`).value) || 0;
                if (quantity > 0) {
                    const itemTotal = quantity * item.price;
                    totalPrice += itemTotal;
                    orderDetails += `
                        <div class="order-item">
                            <span class="item-name">${item.name} x${quantity}</span>
                            <span class="item-price">${itemTotal} EGP</span>
                        </div>
                    `;
                }
            });
            

            drinkItems.forEach(item => {
                const quantity = parseInt(document.querySelector(`[name="${item.id}"]`).value) || 0;
                if (quantity > 0) {
                    const itemTotal = quantity * item.price;
                    totalPrice += itemTotal;
                    orderDetails += `
                        <div class="order-item">
                            <span class="item-name">${item.name} x${quantity}</span>
                            <span class="item-price">${itemTotal} EGP</span>
                        </div>
                    `;
                }
            });
            
            if (totalPrice === 0) {
                alert("Please select at least one item to order.");
                return;
            }
            

            document.getElementById("customer-details").innerHTML = `
                <div class="info-box">
                    <p><strong>Customer Name:</strong> ${name}</p>
                    <p><strong>Delivery Address:</strong> ${address}</p>
                </div>
            `;
            

            document.getElementById("order-details").innerHTML = orderDetails;
            

            document.getElementById("totalPrice").innerHTML = `
                <div style="text-align: center; margin-top: 20px;">
                    <h3>Total Amount: ${totalPrice} EGP</h3>
                    <p>Thank you for your order! It will be delivered within 45 minutes.</p>
                </div>
            `;
            

            document.getElementById("order-summary").style.display = "block";
            

            document.getElementById("order-summary").scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>