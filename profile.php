<?php include("connection.php");  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
</head>


<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
        background-color: #dddddd;
    }
    #submit{
       border:none;
       border-radius:3px;
       margin-left:auto;
       text-align:centre;
    }
    .submit{
        align-items:center;
        padding:2px;
       display:flex;
       justify-content:center;
    }
    .input_field> input{
        margin:10px;
        padding: 7.1px;
        border: none;
        border-radius:3px;
        background-color: rgb(124, 223, 236);
        margin-left:40%;
    }
    #bitexInfo{
      border-radius:3px;
    }
    .bib{
        /* margin-left:7%; */
    }
    input[type='text']{
        width:80%;
    } 
    .full{
        margin-left:10%;
    }

    #head{
        text-align:center;
    }
</style>
<body>
    


                                       <label><h2 id='head'>PROFILE PAGE</h2></label><br><b><hr></b>
<!-- <form method="post" id='full'> -->
 <br>


<!--------------------------------------------------------------------- start column--------------------------------------------------------------------------------- -->
        <form action='profileconnect.php' method="post" class='full'  enctype="multipart/form-data">
                <br>
                
                    <label><h2>Personal Data</h2></label><br>
                        <br>
                       <label>Image</label><br>
                       <input type="file" name="userImage" required class="form-control">
                       <br>
                       <br>
                       <label>Name</label><br>
                       <input type="text" name="userName" required class="form-control">
                       <br>
                       <br>
                       <label>Current Position</label><br>
                       <input type="text" name="position" required class="form-control">
                       <br>
                       <br>
                       <label>Area of Specialization</label><br>
                       <input type="text" name="Specialization" required class="form-control">
                       <br>
                       <br>
                       <label>Qualification</label><br>
                       <input type="text" name="qualification" required class="form-control">
                       <br>
                       <br>
                       <label>Department</label><br>
                       <input type="text" name="department" required class="form-control">
                       <br>
                       <br>
                       <label>Faculty</label><br>
                       <input type="text" name="faculty" required class="form-control">
                       <br>
                       <br>
                       <label>Address of College</label><br>
                       <input type="text" name="address" required class="form-control">
                       <br>
                       <br>
                       <label>Email</label><br>
                       <input type="text" name="mail" required class="form-control">
                       <br>
                       <br>
                       <label>Phone</label><br>
                       <input type="text" name="phone" required class="form-control">
                       <br>
                       <br>
                      
                      
                       <label>BioSketch</label><br>
                       <input type="text" name="biosketch" required class="form-control">
                       <br>
                       <div class="input_field">
                            <input type="submit" value="Submit" name="submit10" class="button" id="submit10">
           
                                   </div>
           </form>
<!----------------------------------------------------------- 1st column---------------------------------------------------------------------- -->








<!-------------------------------------------------------Area(s)Research---------------------------------------------------------------------- -->
<form action="profileArea.php" method="post" class='full' >
  
  <label><h2>Area(s)Research</h2></label><br>
  <input type="text" name="researcgASrea" required class="form-control">
  <br>
  <div class="input_field">
    <input type="submit" value="Submit" name="submit5" class="button" id="submit5">
    
  </div>
</form>




<!-----------------------------------------------Research Interests---------------------------------------------------------------------- -->
<form action="profileinterest.php" method ="post" class='full' >
  
      <label><h2>Research Interests</h2></label><br>
              <input type="text" name="interests" required class="form-control">
                       <br>
                           <div class="input_field">
                            <input type="submit" value="Submit" name="submit9" class="button" id="submit9">
           
                                   </div>
</form>











<!----------------------------------------------------------- HONORS ---------------------------------------------------------------------- -->


<form action="profileHonors.php" method="post" class='full'  enctype="multipart/form-data">
                                    
                                    <label><h2>Honors and Recoginitions</h2></label><br>  
                                    <input type="text" name="honors" required class="form-control">
                                    <br>
                           <div class="input_field">
                             <input type="submit" value="Submit" name="submit0" class="button" id="submit0">
                             
                            </div>
</form>
                          
            </a>
        <!-- </div> -->
        <br>
     
        








  <!----------------------------------------------------------- journal---------------------------------------------------------------------- -->





  <form action="profilejournal.php" method="post" class='full'  enctype="multipart/form-data">
          <br>
     
                <br>
            
                <label><h2><b>Selected Publications</b></h2></label><br><br>  
                <label><b>Journal Publications</b></h2></label><br>
                        <br>
                       <label>BibTex(Source File): </label><br>
                       <input type="text" id="bitexInfo" class="form-control"  onchange="convert()">
                       <br>

                       <br>
                       <label>Author(s)</label><br>
                       <!-- <br> -->
                       <input type="text" name="author" required class="form-control">
                       <br>
                       <br>
                       <label>Title</label><br>
                       <!-- <br> -->
                       <input type="text" name="title" required class="form-control">
                       <br>
                       <br>
                       <label>Name of Journal</label><br>
                       <!-- <br> -->
                       <input type="text" name="journal" required class="form-control">
                       <br>
                       <br>
                       <label>Volume</label><br>
                       <!-- <br> -->
                       <input type="text" name="volume" required class="form-control">
                       <br>
                       <br>
                       <label>Page</label><br>
                       <!-- <br> -->
                       <input type="text" name="pages" required class="form-control">
                       <br>
                       <br>
                       <label>Year</label><br>
                       <!-- <br> -->
                       <input type="text" name="year" required class="form-control">
                       <br>
                       
                      
                       <br>
                       <div class="input_field">
           <input type="submit" value="Submit" name="submit4" class="button" id="submit1">
           
       </div>
    </form>
<!------------------------------------------------------------- columns completed----------------------------------------------------------------------------------- -->

<script>


function convert() {
let citation = document.querySelector('#bitexInfo').value;
const regex = /([^\s]+)\s*=\s*\{([^}]*)\}/g;
const matches = citation.matchAll(regex);

for (const match of matches) 
 { let key = match[1];
    console.log(key);
    let value = match[2];
  let inputFields = document.querySelectorAll('input[type="text"]');
  let inputArray = Array.from(inputFields);
  for (let i = 0; i < inputArray.length; i++) {
    let inputField = inputArray[i];
let fieldName = inputArray[i].getAttribute('name');
  if (fieldName === key) {
    inputField.value = value;

}
  }


  
  }
}

function saveBitexField() {
  const bitexField = document.querySelector('#bitexfield');
  localStorage.setItem('bitexfieldValue', bitexField.value);
}

function loadBitexField() {
  const bitexField = document.querySelector('#bitexfield');
  const bitexFieldValue = localStorage.getItem('bitexfieldValue');
  if (bitexFieldValue !== null) {
    bitexField.value = bitexFieldValue;
  }
}

window.addEventListener('load', loadBitexField);
window.addEventListener('beforeunload', saveBitexField);
</script>
 </body>
</html>