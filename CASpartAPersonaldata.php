<?php
        //  session_start();
        include("connection.php");
        // echo"text1";
        
        if(isset($_POST['submit13'])){
            // echo"text2";
            $name = $_POST['name'];
            $parentsName = $_POST['parentsName'];
            $depart = $_POST['depart'];
            $matrix = $_POST['matrix'];
            $date = $_POST['date'];
            $position = $_POST['position'];
            $promotion = $_POST['promotion'];
            $birth = $_POST['birth'];
            $gender = $_POST['gender'];
            $status = $_POST['status'];
            $nationality = $_POST['nationality'];
            $category = $_POST['category'];
            $code = $_POST['code'];
            $tele = $_POST['tele'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
           
          

            $sql = "INSERT INTO `personaldetails`(`name`, `parentsName`, `department`, `matrix`, `promotionlastDate`, `position`, `eligibility`, `dateBirth`, `gender`, `status`, `nationality`, `category`, `address`, `tele`, `mobile`, `mail`)
             VALUES ('$name','$parentsName','$depart','$matrix','$date','$position','$promotion','$birth','$gender','$status','$nationality','$category','$code','$tele','$mobile','$email')";
            //   echo"text3";
            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartA(new).php");
        }

     
                 
    ?> 