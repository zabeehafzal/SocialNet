session_start();
if(  isset($_SESSION['email']) )
{
  header("location:html.php");
  die();
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
  }
//connect to database
$db=mysqli_connect("localhost","root","","zabi");
if($db)
{
  if(isset($_POST['login-form']))
  {
      $email=mysqli_real_escape_string($db,$_POST['email']);
      $password=mysqli_real_escape_string($db,$_POST['pass']);
    //   $password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM users WHERE  email='$email' AND pass='$password'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['email']=$email;
            header("location:home.php");
        }
       else
       {
              $_SESSION['message']="Email and Password combiation incorrect";
       }
      }
  }
}
document.getElementById('login-form').addEventListener('submit', function (e) {
    e.preventDefault();
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
});