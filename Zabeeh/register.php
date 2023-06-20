<!DOCTYPE html>
<html>
<head>
    <title>Social Net</title>
    <script src="scripts/register.js"></script>
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
            background-color: #fff;
            border: 1px solid #ccc;
            margin-top: 100px;
            padding: 20px;
            
        }

        #form-set {
            margin-bottom: 20px;
        }


        #form-set input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #form-set button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
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
    <?php  
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
  }
  
  //submit these to database
  
  //Connecting to dataBase
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "zabi";
  
  //Creating database connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);
  
  if(!$conn){
  die("Sorry we failed to connect: ".mysqli_connect_error());
  }
  else
  {
  $sql="INSERT INTO `users` (`User`,`Email`, `Pass`) VALUES ('$user','$email', '$pass')";
  $result = mysqli_query($conn,$sql);
  
  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You ' .$username. ' have logged in successfully!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }else{
    echo "Record was not inserted";
  
  }
  }

  //submit these to database
?>
        <h1 style=" text-align: center; color: #333333;">Register</h1>
        <form action="register.php" method="post" >
            <div id="form-set">
                <label style="display: block; margin-bottom: 5px; color: #333;" for="name">Name:</label>
                <input type="text" name="user" id="name" required>
            </div>
            <div id="form-set">
                <label style="display: block; margin-bottom: 5px; color: #333;" for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div id="form-set">
                <label style="display: block; margin-bottom: 5px; color: #333;" for="password">Password:</label>
                <input type="password" name="pass" id="password" required>
            </div>
            <div class="form-set">
                <button type="submit">Register</button>
            </div>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
   
</body>
</html>
