
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

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone_no'];
$password=$_POST['password'];
$sql = "INSERT INTO users (Name, email, password, phone_no) 
VALUES ('$name', '$email','$password', '$number')";


if(mysqli_query($conn,$sql)){
    echo "success";
}

else{
    echo "error";
}
}
 if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];
 
    $job= "INSERT INTO jobs ( cname , position , Jdesc , skills , CTC ) VALUES ('$cname', '$pos' , '$Jdesc' ,'$skills', '$CTC')";
    if(mysqli_query($conn,$job)){
        echo "success";
    }
    
else{
    echo "error l;v;lfd;flvmfd;lbmfgb;".mysqli_error($conn);
}
}
//mysqli_close($conn);
?>