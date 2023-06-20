<!DOCTYPE html>
<html>
<head>
    <title>Social Net</title>
    <script src="scripts/post.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
        #box-links {
            text-align: right;
        }

        #box-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 10px;
        }

        #add-pin-box {
            text-align: center;
        }

        #pin-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #pin-form input[type="text"],
        #pin-form textarea {
            width: 100%;
            margin-top: 5px;
            padding: 5px;
            
        }

        #pin-form button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        footer { background-color: #333; padding: 10px; color: #fff; text-align: center; position: fixed; bottom: 0; left: 0; width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="box">
            <h1>Social Net</h1>
            <div id="box-links">
                <a href="index.html">Logout</a>
                <a href="profile.php">Profile</a>
                <a href="#">Add Post</a>
            </div>
        </div>
    </header>

    <div class="box">
        <div id="add-pin-box">
            <h1>Add Post</h1>
            <div id="pin-form">
                <label style="margin-top: 10px;" for="pin-title">Title:</label>
                <input type="text" id="pin-title" placeholder="Enter post title">
                <label style="margin-top: 10px;" for="pin-content">Content:</label>
                <textarea id="pin-content" rows="5" placeholder="Enter post content"></textarea>
                <label style="margin-top: 10px;" for="pin-img">Image:</label>
                <input type="file" id="pin-img">
                <button onclick="addPost()">Add Post</button>
            </div>
        </div>
    </div>

    <footer style="background-color: #333; padding: 10px; color: #fff; text-align: center; position: fixed; bottom: 0; left: 0; width: 100%;
">
        <p>&copy; Social Net. All rights reserved.</p>
    </footer>
</body>
</html>
