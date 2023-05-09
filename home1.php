<?php include("connection.php");  ?>

<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Home</title>
</head>
<body>
    <div class="blockquote text-center">
        <h3>Dayalbagh Educational Institute</h3>
        <h4>(Deemed To Be University)</h4>
        <h4>Dayalbagh, Agra</h4>
        <h5>Assessment Criteria and Methodology Proforma for Promotion under CAS </h5>

    </div>
    <hr style="border-top: 1mm solid black ;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="#" class="navbar-brand"> <img class="svg" src="logo.jpeg" alt="Bootstrap" width="40" height="40" loading="lazy"></a>
      <a class="navbar-brand" href="https://www.dei.ac.in/dei/">DEI Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://admission.dei.ac.in:8085/cms_new/">DEI CMS<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="https://www.dei.ac.in/dei/files/IQAC/2022/CAS_GUIDELINES_2018.pdf">CAS GUIDELINES<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
         
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="authorlogin.php">Log Out</button>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="authorlogin.php">Back</button>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="registration.php">Registration</button>
        </form>
      </div>
    </nav>

      <br>
 <div class="container">
         <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">PART A:
        </h5>
          <h6 class="card-subtitle mb-2 text-muted"> GENERAL INFORMATION AND ACADEMIC BACKGROUND</h6>
    
          <a href="CASpartA(new).php" class="card-link">Add Details</a>
        
        </div>
      </div>
      <br>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">PART B: </h5>
          <h6 class="card-subtitle mb-2 text-muted">ASSESSMENT OF PERFORMANCE</h6>
          <p>Category I:Teaching, Learning and Evaluation Related Activates</p>
          <p>Category II: Research, Publications and Academic Contributions</p>
          <a href="CASpartB22.php" class="card-link">Add details</a>
          <!-- <a href="CASpartB2.html" class="card-link">Category II</a> -->
        </div>
      </div>
     <br>
     
    </div>

</body>
</html>
<!-- ?> -->