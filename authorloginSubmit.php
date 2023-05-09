<?php
 include("connection.php");
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
                header("Location: home1.php");
           
         }
        
            }
        
}

   
     
?>