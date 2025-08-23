<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 30px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 4px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        
        .btn:hover {
            background-color: #45a049;
        }
        
        .message {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            text-align: center;
        }
        
        .error {
            background-color: #ffebee;
            color: #d32f2f;
            border: 1px solid #ffcdd2;
        }
        
        .success {
            background-color: #e8f5e9;
            color: #2e7d32;
            border: 1px solid #c8e6c9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        
        <?php
        session_start();
        

        $users = [
            'nehal' => 'nehal123',
            'fatma' => 'fatma1234',
            'hoor' => 'hoor12'
        ];
        

        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            
            if (empty($username) || empty($password)) {
                echo '<div class="message error">Please fill in all fields</div>';
            } else {

                if (array_key_exists($username, $users) && $users[$username] === $password) {
                    
                    $_SESSION['user'] = $username;
                    $_SESSION['login_time'] = time();
                    
                    echo '<div class="message success">Login successful! Welcome, ' . htmlspecialchars($username) . '.</div>';
                } else {
                    echo '<div class="message error">Invalid username or password</div>';
                }
            }
        }
        
        
        if (isset($_SESSION['user'])) {
            echo '<div class="message success">You are already logged in as ' . htmlspecialchars($_SESSION['user']) . '</div>';
        }
        ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit" class="btn" name="login">Login</button>
        </form>
        
        <div style="margin-top: 20px; text-align: center; font-size: 14px; color: #777;">
            <p>Demo accounts:</p>
            <p>nehal / nehal123</p>
            <p>fatma / fatma1234</p>
            <p>hoor / hoor12</p>
        </div>
    </div>
</body>
</html>