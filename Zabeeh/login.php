<!DOCTYPE html>
<html>
<head>
    <title>Social Net</title>
    <script src="scripts/login.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .box {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            margin-top: 100px;
        }

        #form-set {
            margin-bottom: 20px;
        }

        #form-set label {
            display: block;
            margin-bottom: 6px;
            color: #333333;
        }
        

        #form-set input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        #form-set button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #form-set button:hover {
            background-color: #555;
        }

        #form-set .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1 style=" text-align: center; color: #333;">Login</h1>
        <form method="post" action="login.php">
            <div class="form-set">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-set">
                <label for="password">Password:</label>
                <input type="password" id="password" required>
            </div>
            <div class="form-set">
                <button type="submit" name="login-form"><a href="home.php">Login</a></button>
            </div>
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
  
</body>
</html>
