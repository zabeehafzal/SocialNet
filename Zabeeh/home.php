<!DOCTYPE html>
<html>
<head>
    <title>Social Net</title>
    <script src="scripts/home.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .box {
            max-width: 960px;
            background-color: #fff;
            border: 1px solid #ccc;
            margin-top: 50px;
            margin: 0 auto;
            padding: 20px;
           
        }

        #box-title {
            text-align: center;
        }

        #box-links {
            text-align: right;
        }

        #box-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 10px;
        }
        header {
            background-color: #333;
            padding: 10px;
            color: #fff;
            text-align: center;
        }
        .pin {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        #pin-opt {
            display: flex;
            justify-content: space-between;
        }


        #pin-img {
            text-align: center;
            margin-bottom: 10px;
        }

        #comm-input {
            display: none; margin-top: 10px;
        }

        #comm-list {
            list-style-type: none; padding: 0; margin-top: 10px;
        }

    </style>
    
</head>
<body>
    <header>
        
            <div id="box-title">
                <h1>Social Net</h1>
            </div>
            <div id="box-links">
                <a href="profile.php">Profile</a>
                <a href="index.html">Logout</a>
                <a href="post.php">Add Post</a>
            </div>
        
    </header>

    <div class="box">
        <div class="post" id="post-1">
            <div id="pin-img">
                <img src="image1.jpg" alt="Post 1" width="300">
            </div>
            
            <div id="pin-opt">
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('like', 1)">Like</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('dislike', 1)">Dislike</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="toggleCommentInput(1)" id="comment-button-1">Comment</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="deletePost(1)">Delete</a>
            </div>
            <div>
                <span id="like-count-1">0</span> Likes |
                <span id="dislike-count-1">0</span> Dislikes
            </div>
            <div id="comment-display-1">
                <ul id="comm-list"></ul>
            </div>
            <textarea id="comm-input" id="comment-input-1" rows="2"></textarea>
        </div>

        <div class="pin" id="post-2">
            <div id="pin-img">
                <img src="image2.jpg" alt="Post 2" width="300">
            </div>
            
            <div id="pin-opt">
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('like', 2)">Like</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('dislike', 2)">Dislike</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="toggleCommentInput(2)" id="comment-button-2">Comment</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="deletePost(2)">Delete</a>
            </div>
            <div>
                <span id="like-count-2">0</span> Likes |
                <span id="dislike-count-2">0</span> Dislikes
            </div>
            <div id="comment-display-2">
                <ul id="comm-list"></ul>
            </div>
            <textarea id="comm-input" id="comment-input-2" rows="2"></textarea>
        </div>

        <div class="pin" id="post-3">
            <div id="pin-img">
                <img src="image3.jpg" alt="Post 3" width="300">
            </div>
            
            <div id="pin-opt">
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('like', 3)">Like</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('dislike', 3)">Dislike</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="toggleCommentInput(3)" id="comment-button-3">Comment</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="deletePost(3)">Delete</a>
            </div>
            <div>
                <span id="like-count-3">0</span> Likes |
                <span id="dislike-count-3">0</span> Dislikes
            </div>
            <div id="comment-display-3">
                <ul id="comm-list"></ul>
            </div>
            <textarea id="comm-input" id="comment-input-3" rows="2"></textarea>
        </div>

        <div class="pin" id="post-4">
            <div id="pin-img">
                <img src="image4.jpg" alt="Post 4" width="300">
            </div>
            
            <div id="pin-opt">
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('like', 4)">Like</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="incrementCount('dislike', 4)">Dislike</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="toggleCommentInput(4)" id="comment-button-4">Comment</a>
                <a style="color: #333; text-decoration: none; margin-right: 10px;" href="#" onclick="deletePost(4)">Delete</a>
            </div>
            <div>
                <span id="like-count-4">0</span> Likes |
                <span id="dislike-count-4">0</span> Dislikes
            </div>
            <div id="comment-display-4">
                <ul id="comm-list"></ul>
            </div>
            <textarea id="comm-input" id="comment-input-4" rows="2"></textarea>
        </div>
    </div>

    <footer style="background-color: #333; padding: 10px; color: #fff; text-align: center; position: fixed; bottom: 0; left: 0; width: 100%;">
        <p>&copy;  Social Net. All rights reserved.</p>
    </footer>
</body>
</html>
