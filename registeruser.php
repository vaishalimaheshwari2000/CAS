<?php
 include("connection.php");
                      $showAlert= false;
                      if($_SERVER['REQUEST_METHOD']=='POST'){
                         $firstname =    $_POST['fname'];
                         $lastname = $_POST['lname'];
                         $phoneno =  $_POST['phone'];
                        $email =  $_POST['email'];
                        $password =  $_POST['password'];
                         $Cpassword = $_POST['cpwd'];
                     
                    
                       
                      if(($password==$Cpassword)){
                            echo"Post";
                            echo "<br>";
                            $query = "INSERT INTO `users` (`fname`,`lname`,`contact`,`email`,`password`,`cpassword`) VALUES ('$firstname','$lastname','$phoneno','$email','$password', '$Cpassword')"; 
                      
                          
                            $data = mysqli_query($conn,$query);
                            
                       
                       if($data){
                        header("Location: home1.php");
                         
                       }  
                     else {
                        
                      echo "failed".mysqli_error($conn); }

                    } }
                   
?>