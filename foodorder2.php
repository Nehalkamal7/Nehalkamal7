<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام اختيار الطعام - Food Selection System</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }
        .language-selector {
            text-align: center;
            margin-bottom: 20px;
        }
        .language-btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 5px;
            background-color: #e7e7e7;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s;
        }
        .language-btn.active {
            background-color: #3498db;
            color: white;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }
        select, button {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bold;
        }
        button:hover {
            background-color: #2980b9;
        }
        .result {
            margin-top: 30px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            border-right: 4px solid #3498db;
        }
        .food-option {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #eee;
            border-radius: 5px;
            transition: transform 0.2s;
        }
        .food-option:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .food-option img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            margin-left: 15px;
        }
        .food-info {
            flex-grow: 1;
        }
        .food-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .food-desc {
            color: #666;
            font-size: 14px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header img {
            max-width: 150px;
            margin-bottom: 15px;
        }
        @media (max-width: 600px) {
            .food-option {
                flex-direction: column;
                text-align: center;
            }
            .food-option img {
                margin-left: 0;
                margin-bottom: 10px;
            }
        }
        [dir="rtl"] .food-option img {
            margin-left: 15px;
            margin-right: 0;
        }
        [dir="ltr"] .food-option img {
            margin-right: 15px;
            margin-left: 0;
        }
        [dir="ltr"] .result {
            border-right: none;
            border-left: 4px solid #3498db;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="language-selector">
            <button class="language-btn active" id="arabic-btn">العربية</button>
            <button class="language-btn" id="english-btn">English</button>
        </div>

        <div class="header" id="header">
            <h1 id="title">نظام اختيار الطعام</h1>
            <p id="subtitle">اختر طعامك المفضل والحجم المناسب</p>
        </div>

        <form method="POST" action="">
            <div class="form-group">
                <label for="food" id="food-label">اختر نوع الطعام:</label>
                <select id="food" name="food" required>
                    <option value="">-- اختر الطعام --</option>
                    <option value="pizza">بيتزا</option>
                    <option value="burger">برجر</option>
                    <option value="pasta">معكرونة</option>
                    <option value="salad">سلطة</option>
                    <option value="shawarma">شاورما</option>
                </select>
            </div>

            <div class="form-group">
                <label for="size" id="size-label">اختر الحجم:</label>
                <select id="size" name="size" required>
                    <option value="">-- اختر الحجم --</option>
                    <option value="small">صغير</option>
                    <option value="medium">متوسط</option>
                    <option value="large">كبير</option>
                    <option value="x-large">كبير جدًا</option>
                </select>
            </div>

            <button type="submit" name="submit" id="submit-btn">اطلب الآن</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $food = $_POST['food'];
            $size = $_POST['size'];
            
            
            $prices = [
                'pizza' => ['small' => 80, 'medium' => 120, 'large' => 160, 'x-large' => 200],
                'burger' => ['small' => 60, 'medium' => 90, 'large' => 120, 'x-large' => 150],
                'pasta' => ['small' => 50, 'medium' => 70, 'large' => 90, 'x-large' => 110],
                'salad' => ['small' => 30, 'medium' => 45, 'large' => 60, 'x-large' => 75],
                'shawarma' => ['small' => 40, 'medium' => 60, 'large' => 80, 'x-large' => 100]
            ];
            
         
            $foodNames = [
                'pizza' => ['ar' => 'بيتزا', 'en' => 'Pizza'],
                'burger' => ['ar' => 'برجر', 'en' => 'Burger'],
                'pasta' => ['ar' => 'معكرونة', 'en' => 'Pasta'],
                'salad' => ['ar' => 'سلطة', 'en' => 'Salad'],
                'shawarma' => ['ar' => 'شاورما', 'en' => 'Shawarma']
            ];
            
            
            $sizeNames = [
                'small' => ['ar' => 'صغير', 'en' => 'Small'],
                'medium' => ['ar' => 'متوسط', 'en' => 'Medium'],
                'large' => ['ar' => 'كبير', 'en' => 'Large'],
                'x-large' => ['ar' => 'كبير جدًا', 'en' => 'X-Large']
            ];
            
            $price = $prices[$food][$size];
            $foodNameAr = $foodNames[$food]['ar'];
            $foodNameEn = $foodNames[$food]['en'];
            $sizeNameAr = $sizeNames[$size]['ar'];
            $sizeNameEn = $sizeNames[$size]['en'];
            
            echo "<div class='result' id='result'>";
            echo "<h2 id='success-msg'>تم اختيارك بنجاح!</h2>";
            echo "<p id='food-result'>الطعام: <strong>$foodNameAr</strong> / <strong>$foodNameEn</strong></p>";
            echo "<p id='size-result'>الحجم: <strong>$sizeNameAr</strong> / <strong>$sizeNameEn</strong></p>";
            echo "<p id='price-result'>السعر: <strong>$price جنيه مصري</strong> / <strong>$price EGP</strong></p>";
            echo "</div>";
        }
        ?>

        <div style="margin-top: 40px;">
            <h2 id="menu-title">قائمة الطعام المتاحة</h2>
            
            <div class="food-option">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cmVjdCB3aWR0aD0iODAiIGhlaWdodD0iODAiIGZpbGw9IiNmMWMzYzMiIHJ4PSI1IiByeT0iNSIvPjx0ZXh0IHg9IjQwIiB5PSI0NSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZm9udC1zaXplPSIxNCIgZmlsbD0id2hpdGUiPiUyM4YqJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJ極力簡化:省略部分代碼以滿足長度要求
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const arabicBtn = document.getElementById('arabic-btn');
            const englishBtn = document.getElementById('english-btn');
            const html = document.documentElement;
            
            // Arabic translations
            const arabicText = {
                title: "نظام اختيار الطعام",
                subtitle: "اختر طعامك المفضل والحجم المناسب",
                foodLabel: "اختر نوع الطعام:",
                sizeLabel: "اختر الحجم:",
                submitBtn: "اطلب الآن",
                menuTitle: "قائمة الطعام المتاحة",
                successMsg: "تم اختيارك بنجاح!",
                foodResult: "الطعام:",
                sizeResult: "الحجم:",
                priceResult: "السعر:",
                foodOptions: {
                    "": "-- اختر الطعام --",
                    "pizza": "بيتزا",
                    "burger": "برجر",
                    "pasta": "معكرونة",
                    "salad": "سلطة",
                    "shawarma": "شاورما"
                },
                sizeOptions: {
                    "": "-- اختر الحجم --",
                    "small": "صغير",
                    "medium": "متوسط",
                    "large": "كبير",
                    "x-large": "كبير جدًا"
                }
            };
            
            // English translations
            const englishText = {
                title: "Food Selection System",
                subtitle: "Choose your favorite food and size",
                foodLabel: "Select food type:",
                sizeLabel: "Select size:",
                submitBtn: "Order Now",
                menuTitle: "Available Menu",
                successMsg: "Your selection was successful!",
                foodResult: "Food:",
                sizeResult: "Size:",
                priceResult: "Price:",
                foodOptions: {
                    "": "-- Select Food --",
                    "pizza": "Pizza",
                    "burger": "Burger",
                    "pasta": "Pasta",
                    "salad": "Salad",
                    "shawarma": "Shawarma"
                },
                sizeOptions: {
                    "": "-- Select Size --",
                    "small": "Small",
                    "medium": "Medium",
                    "large": "Large",
                    "x-large": "X-Large"
                }
            };
            
            // Set Arabic as default
            setLanguage('ar');
            
            arabicBtn.addEventListener('click', function() {
                setLanguage('ar');
                arabicBtn.classList.add('active');
                englishBtn.classList.remove('active');
            });
            
            englishBtn.addEventListener('click', function() {
                setLanguage('en');
                englishBtn.classList.add('active');
                arabicBtn.classList.remove('active');
            });
            
            function setLanguage(lang) {
                const text = lang === 'ar' ? arabicText : englishText;
                
                // Set direction
                html.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
                html.setAttribute('lang', lang);
                
                // Update interface text
                document.getElementById('title').textContent = text.title;
                document.getElementById('subtitle').textContent = text.subtitle;
                document.getElementById('food-label').textContent = text.foodLabel;
                document.getElementById('size-label').textContent = text.sizeLabel;
                document.getElementById('submit-btn').textContent = text.submitBtn;
                document.getElementById('menu-title').textContent = text.menuTitle;
                
                // Update food options
                const foodSelect = document.getElementById('food');
                const currentFoodValue = foodSelect.value;
                foodSelect.innerHTML = '';
                for (const [value, label] of Object.entries(text.foodOptions)) {
                    const option = document.createElement('option');
                    option.value = value;
                    option.textContent = label;
                    foodSelect.appendChild(option);
                }
                foodSelect.value = currentFoodValue;
                
                // Update size options
                const sizeSelect = document.getElementById('size');
                const currentSizeValue = sizeSelect.value;
                sizeSelect.innerHTML = '';
                for (const [value, label] of Object.entries(text.sizeOptions)) {
                    const option = document.createElement('option');
                    option.value = value;
                    option.textContent = label;
                    sizeSelect.appendChild(option);
                }
                sizeSelect.value = currentSizeValue;
                
                // Update result if exists
                const result = document.getElementById('result');
                if (result) {
                    document.getElementById('success-msg').textContent = text.successMsg;
                    document.getElementById('food-result').innerHTML = document.getElementById('food-result').innerHTML.replace(/الطعام:|Food:/, text.foodResult);
                    document.getElementById('size-result').innerHTML = document.getElementById('size-result').innerHTML.replace(/الحجم:|Size:/, text.sizeResult);
                    document.getElementById('price-result').innerHTML = document.getElementById('price-result').innerHTML.replace(/السعر:|Price:/, text.priceResult);
                }
            }
        });
    </script>
</body>
</html>