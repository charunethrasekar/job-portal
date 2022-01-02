<?php include 'header.php' ?>
<?php
$server="localhost";
$username="root";
$password="";
$database="jobs";
$conn= mysqli_connect($server, $username, $password, $database);
if($conn->connect_error){
die("connection failed: ".$conn->connect_error);
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
mysqli_close($conn);
?>

<div class="content">

  <p>
      <p>
        <!--<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          Link with href
        </a>-->
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Post Job
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <form method="post">
            <div class="mb-3">
              <label for="Company Name" class="form-label">Company Name</label>
              <input type="text" class="form-control" id="" name='cname'>
            </div>
            <div class="mb-3">
              <label for="exampleInputPosition" class="form-label">Position</label>
              <input type="text" class="form-control" id="exampleInputPosition" name='pos'>
            </div>
            <div class="mb-3">
              <label for="JobDesc" class="form-label">Job Description</label>
              <textarea  id=""  cols="30" rows="10" class="form-control" name='Jdesc' ></textarea>
            </div>
            <div class="mb-3">
              <label for="JobDesc" class="form-label">Skills Required</label>
              <input type="text" class="form-control" id="skills" name='skills'>
            </div>
            <div class="mb-3">
              <label for="CTC" class="form-label">CTC</label>
              <input type="TEXT" class="form-control" id="CTC" name='CTC' >
            </div>
            <button type="submit" class="btn btn-primary" name="job">Submit</button>
          </form>    
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Company name</th>
            <th scope="col">Position</th>
            <th scope="col">CTC</th>
          </tr>
        </thead>
        <tbody>
<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="jobs";
    $conn= mysqli_connect($server, $username, $password, $database);
    if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
    }
    
    $sql="select cname, position, CTC from jobs";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){ 
        while($rows=$result->fetch_assoc()){
           echo'
    <tr>
      <th scope="row">'.++$i. '</th> 
      <td>'.$rows['cname'].'</td>
      <td>'.$rows['position'].'</td>
      <td>'.$rows['CTC'].'</td>
    </tr>';}
  } 
    else{
        echo"";
    }
    ?>
    </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>