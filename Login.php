<?php
$server="localhost";
$username="root";
$password="";
$database="jobs";
$conn= mysqli_connect($server, $username, $password, $database);
if($conn->connect_error){
die("connection failed: ".$conn->connect_error);
}
   echo "cvc";

if(isset($_POST['Login'])){

$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from users where password='$password' and email='$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);

if(mysqli_num_rows($result)==1){
    header("location:index.php");
    }
    else
    {
    $error='emailid or password is incorrect';
    }
}
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style type= "text/css">
        body{
            margin: 0px;
            padding: 0px;
            background-image: url('backgroundimage.jpg');
            background-size: cover;
        }
        form{
            background-color: #fff;
            margin-left: 30em;
            margin-right: 10em;
            margin-top: 6em;
            padding: 40px;
            box-shadow: 10px 10px 8px 10px #888888;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" >
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name='password' id="exampleInput Password1" name="password">
`           </div>
            <button type="submit" class="btn btn-primary" name="Login">Submit</button> 
            <p style="text-align: center;">New User?<br>Create Account <a href="register.php">Sign Up</a></p>
        </form>
    </div>
</body>
</html>
