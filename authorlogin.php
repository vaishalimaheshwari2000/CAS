<?php include("connection.php"); ?>

<?php
     clearstatcache();
     $login = false;
     $showError = false;
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = $_POST['emailid'];
        $password = $_POST['password'];
        $stmt = $conn->prepare("select * from users where email=? and password=?");

        $stmt->bind_param("ss",$email,$password);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            echo "data:  " ;
            echo implode($data);
            if($data["password"] === $password) {
                header("Location: home.html");
           
         }
        
            }
        
}

   
     
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/png" href="dayalbagh-educational-institute-distance-education-logo.png">
<title>Author Login</title>
<link rel="stylesheet" type="text/css" href="css/authorlogincss.css">
</head>
<style>
    *{
        margin:0;
        padding:0;
        top:0;
        left:0;
        /* margin-bottom:2%; */
    }
    h2{
        font-size:5rem;
    }
     
    .logSign{
        display: inline-block;
    }

    .btn {
       
    /* display: flex; */
    background-color: #b5efef; 
  
    height: 35px;
    
   
} 

button.close {
    /* padding: 2px;
    height: 30px; */
    /* flex-direction: row; */
    /* margin: 5px; */
    /* margin-top: -2px; */
    
    background-color:#b5efef;
    border:none;
    font-size: 30px;
    font-style: bold;
} 

#logo_head{
    display:flex;
    align-items:centre;
   
}
#logo_head h2{
    margin:auto;
    font-size:2vw;
    text-align:centre;
   
}

#logo_head img{
    width:100px;
    display:flex;
    padding:15px;
}
table{
    margin:auto;
    padding-left:100px;
}

.blockquote{
    text-align : center;
    font-size:1.5rem;
    display:flex;
}
.dayal{
    text-align : center;
    font-size:1.5rem;
    /* display:flex; */
    margin:0 auto;
}

#signUpForm{
    /* position:relative; */
    margin-top:30%;
}
    </style>



<?php

if($login){
    // echo" Data Inserted into db";
    // echo"post";
    // echo $
    echo "<div class='alert alert-warning alert-dismissible fade show btn' role='alert'>
    <strong>Login Successfully! </strong> 
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
    echo $display. "\n";
    
}
if($showError){
    // echo" Data Inserted into db";
    // echo"post";
    echo "<div class='alert alert-warning alert-dismissible fade show btn' role='alert'>
    <strong>Error! </strong>".$showError."<br>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
    // echo $display. "\n";
    
}
?>

<body>

<div class="blockquote text-center">
<div id="logohead">
        <a href="#" id="logo_head"><img src="dayalbagh-educational-institute-distance-education-logo.png" id='logo'/> </a>
      
    </div>
    <div class="dayal">

        <h3>Dayalbagh Educational Institute</h3>
        <h4>(Deemed To Be University)</h4>
        <h4>Dayalbagh, Agra</h4>
        <h5>Assessment Criteria and Methodology Proforma for Promotion under CAS </h5>
    </div>

    </div>
    
    <hr style="border-top: 1mm solid black ;">
    <table cellspacing="0" width="500px" class="tle" >
	<tr>

    
	</tr>
   
		<td colspan="2">



    



<style>
    #email, #registrationid{
        width:500px;
        height:23px;
    }
    label{
        font-size: 1.5rem;
    }
</style>

        <form  action="#" method="post" id='signUpForm'>
    <span ></span>
        <div class="mail">

            <p>
                <label for="login">Email ID</label></br><br>
                <input type="text" name="emailid" id="email" placeholder="Author's Mail ID"><br><br>
            </p>
        </div>
    <div class="pass">

        <p>
            <label for="password">Password</label><br><br>
            <input type="password" name="password" id="registrationid" placeholder="Password"> <br><br>
        </p>
    </div>
    <div class="log">
        
        <p>
            <div class="logSign">
       <input  type="submit" name="submit" value="Login" id="smt">
     
        <!-- <a href="registration.php"> -->
    <!-- <form action="registration.php"> -->

        <input type="submit" name="sign" value="Sign Up" formaction='registration.php' id="smt2">
    <!-- </form> -->
       
    </div>
    </p>       
    </div>
    
</form>
   <style>
    #smt{
         width:50px;
    }
    #smt2{
        width:70px;
        padding:-10px;
    }
   </style>     
        </td>
	</tr>
   
    </table>
    
    
    <script>
    document.querySelector('.alert').style.display ='none';
    document.querySelector('button').addEventListener('click', (e)=>{
        e.preventDefault();
        setTimeout("location.reload(true);");
        // document.querySelector('.alert').style.display ='none';
    });    
    document.querySelector('#smt').addEventListener('click', (e)=>{
        e.preventDefault();
        document.querySelector('.alert').style.display ='block';

    });    

 
</script>
    


</body>
</html>