<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <title>Dashboard</title>
    <style>
      .sidebar {
  margin: 0;
  margin-top: 2px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}


.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}


div.content {
  margin-top: 60px;
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}


@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

.navbar{
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}
    </style>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
  </div>
</nav>
<div class="sidebar">
  <ul class="qwer">
    <a class="active" href="index.php">Jobs</a>
    <a href="jobs.php">Candidates Applied</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
</ul>
  </div>

  <script>

$('.qwer').on('click','a', function() {

$('.qwer a.active').removeClass('active');

$(this) .addClass('active');});
</script>




</body>
</html> 