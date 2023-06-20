<!DOCTYPE html>
<html>
<head>
    <title>Social Net</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #333;
            color: #fff;
        }

        header {
            background-color: #333;
            padding: 10px;
            color: #fff;
            text-align: center;
        }

        .box {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        #profile-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        #profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 20px;
        }

        #profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #profile-info {
            text-align: center;
        }

        #profile-info p {
            margin: 5px 0;
        }

        #reset-password {
            margin-top: 20px;
            text-align: center;
        }

        #reset-pass input[type="password"] {
            width: 200px;
            margin-bottom: 10px;
            padding: 5px;
        }

        #reset-pass button {
            padding: 10px 20px;
            background-color: #fff;
            color: #333;
            border: none;
            cursor: pointer;
        }

    </style>
</head>
<body>
<header>
        <div class="box">
            <h1>Social Net</h1>
            <div class="header-links">
                <a href="index.html">Logout</a>
                <a href="profile.php">Profile</a>
                <a href="post.php">Add Post</a>
            </div>
        </div>
    </header>

    <div class="box">
        <div id="profile-box">
            <div id="profile-img">
                <img src="profile-picture.jpeg" alt="Profile Picture">
            </div>
            <div id="profile-info">
                <p><strong>Email:</strong> zabeehafzal@gmail.com</p>
                <p><strong>Password:</strong> zabi321</p>
            </div>
            <div id="reset-pass">
                <h3>Reset Password</h3>
                <input type="password" placeholder="Current Password">
                <input type="password" placeholder="New Password">
                <input type="password" placeholder="Confirm New Password">
                <button>Reset</button>
            </div>
        </div>
    </div>

    <footer style="background-color: #333; padding: 10px; color: #fff; text-align: center; position: fixed; bottom: 0; left: 0; width: 100%;">
    <p>&copy; 2023 Social Net. All rights reserved.</p>
    </footer>
</body>
</html>
