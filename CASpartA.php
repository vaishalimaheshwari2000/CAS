                                      <!-- PERFECTLY WORKING FILE -->

<?php
$insert = false;
if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
 if (!$con) {
   die("connection Failed due to ". mysqli_connect_error());

 }


 $name = $_POST['name'];
 $Fname = $_POST['Fname'];
 $Department = $_POST['Department'];
 $CDLPM = $_POST['CDLPM'];
 $DLP = $_POST['DLP'];
 $Position = $_POST['Position'];
 $DEP = $_POST['DEP'];
 $DOB = $_POST['DOB'];
 $POB = $_POST['POB'];
 $Gender = $_POST['Gender'];
 $MaritalStatus = $_POST['MaritalStatus'];
 $Nationality = $_POST['Nationality'];
 $Category = $_POST['Category'];
 $Email = $_POST['Email'];
 $Mob = $_POST['Mob'];
//  $LocalAddress = $_POST['LocalAddress'];  $PermanentAddress = $_POST['PermanentAddress'];

         // local address
 $inputAddress = $_POST['inputAddress'];
 $inputCity = $_POST['inputCity'];
 $inputState = $_POST['inputState'];
 $inputZip = $_POST['inputZip'];
       // Permanent Address
 $inputPAddress = $_POST['inputPAddress'];
 $inputPCity = $_POST['inputPCity'];
 $inputPState = $_POST['inputPState'];
 $inputPZip = $_POST['inputPZip'];

//  variable for acedmic details
 $Matrixboard = $_POST['Matrixboards'];
 $MatrixpassingYears = $_POST['MatrixpassingYears'];
 $Matrixpercentile = $_POST['Matrixpercentile'];
 $Matrixdivision = $_POST['Matrixdivision'];
 $Matrixsubjects = $_POST['Matrixsubjects']; 


 $Interboard = $_POST['Interboards'];
 $InterpassingYears = $_POST['InterpassingYears'];
 $Interpercentile = $_POST['Interpercentile'];
 $Interdivision = $_POST['Interdivision'];
 $Intersubjects = $_POST['Intersubjects'];

 $Bachelorboard = $_POST['Bachelorboards'];
 $BachelorpassingYears = $_POST['BachelorpassingYears'];
 $Bachelorpercentile = $_POST['Bachelorpercentile'];
 $Bachelordivision = $_POST['Bachelordivision'];
 $Bachelorsubjects = $_POST['Bachelorsubjects'];

 $Mastersboard = $_POST['Mastersboards'];
 $MasterspassingYears = $_POST['MasterspassingYears'];
 $Masterspercentile = $_POST['Masterspercentile'];
 $Mastersdivision = $_POST['Mastersdivision'];
 $Masterssubjects = $_POST['Masterssubjects'];

 $Otherboard = $_POST['Otherboards'];
 $OtherpassingYears = $_POST['OtherpassingYears'];
 $Otherpercentile = $_POST['Otherpercentile'];
 $Otherdivision = $_POST['Otherdivision'];
 $Othersubjects = $_POST['Othersubjects'];

//  $board = $_POST['board'];
//  $passingYears = $_POST['passingYears'];
//  $percentile = $_POST['percentile'];
//  $division = $_POST['division'];
//  $subjects = $_POST['subjects'];


 $Mtitle = $_POST['Mtitle'];
 $Mdate = $_POST['Mdate'];
 $Muniversity = $_POST['Muniversity'];

 $Dtitle = $_POST['Dtitle'];
 $Ddate = $_POST['Ddate'];
 $Duniversity = $_POST['Duniversity'];

 $DDtitle = $_POST['DDtitle'];
 $DDdate = $_POST['DDdate'];
 $DDuniversity = $_POST['DDuniversity'];


 $Designation1 = $_POST['Designation1'];
 $NOE1 = $_POST['NOE1'];
 $DOJ1 = $_POST['DOJ1'];
 $DOL1 = $_POST['DOL1'];
 $Salary1 = $_POST['Salary1'];
 $ROL1 = $_POST['ROL1'];

 $Designation2 = $_POST['Designation2'];
 $NOE2 = $_POST['NOE2'];
 $DOJ2 = $_POST['DOJ2'];
 $DOL2 = $_POST['DOL2'];
 $Salary2 = $_POST['Salary2']; 
 $ROL2 = $_POST['ROL2'];

 $Designation3 = $_POST['Designation3'];
 $NOE3 = $_POST['NOE3'];
 $DOJ3 = $_POST['DOJ3'];
 $DOL3 = $_POST['DOL3'];
 $Salary3 = $_POST['Salary3'];
 $ROL3 = $_POST['ROL3'];


 $Desig1 = $_POST['Desig1'];
 $Department1 = $_POST['Department1'];
 $DOJfrom1 = $_POST['DOJ(from)1'];
 $DOJto1 = $_POST['DOJ(to)1'];
 $Grade1 = $_POST['Grade1'];

 $Desig2 = $_POST['Desig2'];
 $Department2 = $_POST['Department2'];
 $DOJfrom2 = $_POST['DOJ(from)2'];
 $DOJto2 = $_POST['DOJ(to)2'];
 $Grade2 = $_POST['Grade2'];

 $Desig3 = $_POST['Desig3'];
 $Department3 = $_POST['Department3'];
 $DOJfrom3 = $_POST['DOJ(from)3'];
 $DOJto3 = $_POST['DOJ(to)3'];
 $Grade3 = $_POST['Grade3'];

 $PGexperience = $_POST['PGexperience'];
 $UGexperience = $_POST['UGexperience'];
 $ResearchExp = $_POST['ResearchExp'];
 $Specialization = $_POST['Specialization'];
//  $ = $_POST[''];

$sql = "INSERT INTO `cas`.`casa1` (`name`, `Fname`, `Department`, `CDLPM`, `DLP`, `Position`, `DEP`, `DOB`, `POB`, `Gender`, `MaritalStatus`, `Nationality`, `Category`, `Email`, `Mob`,`LocalAddress`,`PermanentAddress`) VALUES ('$name', ' $Fname', '$Department', '$CDLPM', '$DLP', '$Position', '$DEP', '$DOB', '$POB', '$Gender', '$MaritalStatus', '$Nationality', '$Category', '$Email', '$Mob','$inputAddress,$inputCity,$inputState,$inputZip','$inputPAddress,$inputPCity,$inputPState,$inputPZip'); " ;


$sql1 = "INSERT INTO `cas`.`casa2` (`Matrix`, `Intermediate`, `Graduation`, `PostGraduation`, `Other`, `Research(Masters)`, `Research(PhD/DPhil)`, `Research(DSc/DLitt)`, `PreviousPost1`, `PreviousPost2`, `PreviousPost3`, `AfterPost1`, `AfterPost2`, `AfterPost3`, `TeachingExperience(PG,UG)`, `ResearchExperience`, `Specialization`) VALUES (' $Matrixboard,$MatrixpassingYears,$Matrixpercentile,$Matrixdivision, $Matrixsubjects', ' $Interboard,$InterpassingYears,$Interpercentile,$Interdivision,$Intersubjects', ' $Bachelorboard,$BachelorpassingYears,$Bachelorpercentile,$Bachelordivision,$Bachelorsubjects', ' $Mastersboard,$MasterspassingYears,$Masterspercentile,$Mastersdivision,$Masterssubjects', ' $Otherboard,$OtherpassingYears,$Otherpercentile,$Otherdivision,$Othersubjects', '$Mtitle,$Mdate,$Muniversity', '$Dtitle,$Ddate,$Duniversity', '$DDtitle,$DDdate,$DDuniversity', '$Designation1,$NOE1,$DOJ1,$DOL1,$Salary1,$ROL1', '$Designation2,$NOE2,$DOJ2,$DOL2,$Salary2,$ROL2', '$Designation3,$NOE3,$DOJ3,$DOL3,$Salary3,$ROL3', '$Desig1,$Department1,$DOJfrom1,$DOJto1,$Grade1','$Desig2,$Department2,$DOJfrom2,$DOJto2,$Grade2','$Desig3,$Department3,$DOJfrom3,$DOJto3,$Grade3', '$PGexperience,$UGexperience', '$ResearchExp', '$Specialization');" ;

if($con->query($sql) == true){
  echo "";}
  if($con->query($sql1) == true){
    echo "";}
 $con->close();
}    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script>
    function setBillingAddress() {
      document.getElementById("inputPAddress").value = document.getElementById("inputAddress").value;
      document.getElementById("inputPCity").value = document.getElementById("inputCity").value;
      document.getElementById("inputPState").value = document.getElementById("inputState").value;
      document.getElementById("inputPZip").value = document.getElementById("inputZip").value;

    }
  </script>
  <title>CAS Proforma Part-A </title>
</head>

<body>

  <div class="blockquote text-center">
    <h3>Dayalbagh Educational Institute</h3>
    <h4>(Deemed To Be University)</h4>
    <h4>Dayalbagh, Agra</h4>
    <h5>Assessment Criteria and Methodology Proforma for Promotion under CAS </h5>

  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="#" class="navbar-brand"> <img class="svg" src="logo.jpeg" alt="Bootstrap" width="40" height="40"
        loading="lazy"></a>
    <a class="navbar-brand" href="https://www.dei.ac.in/dei/">DEI Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://admission.dei.ac.in:8085/cms_new/">DEI CMS<span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="https://www.dei.ac.in/dei/files/IQAC/2022/CAS_GUIDELINES_2018.pdf">CAS
            GUIDELINES<span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="index.html">Log Out</button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="home.html">Back</button>
      </form>
    </div>
  </nav>
  &nbsp
  <!--for space between two tags-->
  <hr style="border-top: 1mm solid black ;">
  <h4 style="text-decoration:underline; text-align: center;"> PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</h4>

  <form action="CASpartA.php" method="post">
    <div class="container">
      <div class="row col-md-6 col-md-offset-3 ">


        <div class="container panel-body">
          <form action="home.html">
            <div class="form-group">
              <label for="#">1. Name (in Block Letters):</label>
              <input type="text" name="name" class="form-control" id="firstname" required>
            </div>
            <div class="form-group">
              <label for="#">2. Father’s Name/Mother’s Name:</label>
              <input type=" text" name="Fname" class="form-control" id="laststname" required>
            </div>
            <div class="form-group">
              <label for="#">3. Department:</label>
              <input type=" text" name="Department" class="form-control" id="firstname" required>
            </div>
            <div class="form-group">
              <label for="#">4. Current Designation & Level in Pay Matrix:</label>
              <input type=" text" name="CDLPM" class="form-control" id="laststname" required>
            </div>
            <div class="form-group">
              <label for="#">5. Date of last Promotion:</label>
              <input type="date" name="DLP" class="form-control" id="firstname" required>
            </div>
            <div class="form-group">
              <label for="#">6. Which position and Level are you an applicant under CAS?</label>
              <input type=" text" name="Position" class="form-control" id="laststname" required>
            </div>
            <div class="form-group">
              <label for="#">7. Date of eligibility for promotion:</label>
              <input type="date" name="DEP" class="form-control" id="firstname" required>
            </div>
            <div class="form-group">
              <label for="#">8. Date and Place of Birth:</label>
              <input type=" text" name="POB" class="form-control" id="laststname" placeholder="Place" required>

              <input type="date" name="DOB" class="form-control" id="laststname" required>
            </div>
            <br>

            <div class="form-group">
              <label for="#">9. Gender:</label>
              <div class="form-control">
                <select name="Gender" id="sex" style="border: solid white ;" required>
                  <option value="">--Gender--</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="others">Others</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="#">10. Marital status:</label>
              <div class="form-control">
                <select name="MaritalStatus" id="sex" style="border: solid white ;" required>
                  <option value="">-------</option>
                  <option value="yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="#"> &nbsp 11. Nationality:</label>
              <div class="form-control">
                <select name="Nationality" style="border: 0px white;" required>
                  <option value="">-- select one --</option>
                  <option value="afghan">Afghan</option>
                  <option value="albanian">Albanian</option>
                  <option value="algerian">Algerian</option>
                  <option value="american">American</option>
                  <option value="andorran">Andorran</option>
                  <option value="angolan">Angolan</option>
                  <option value="antiguans">Antiguans</option>
                  <option value="argentinean">Argentinean</option>
                  <option value="armenian">Armenian</option>
                  <option value="australian">Australian</option>
                  <option value="austrian">Austrian</option>
                  <option value="azerbaijani">Azerbaijani</option>
                  <option value="bahamian">Bahamian</option>
                  <option value="bahraini">Bahraini</option>
                  <option value="bangladeshi">Bangladeshi</option>
                  <option value="barbadian">Barbadian</option>
                  <option value="barbudans">Barbudans</option>
                  <option value="batswana">Batswana</option>
                  <option value="belarusian">Belarusian</option>
                  <option value="belgian">Belgian</option>
                  <option value="belizean">Belizean</option>
                  <option value="beninese">Beninese</option>
                  <option value="bhutanese">Bhutanese</option>
                  <option value="bolivian">Bolivian</option>
                  <option value="bosnian">Bosnian</option>
                  <option value="brazilian">Brazilian</option>
                  <option value="british">British</option>
                  <option value="bruneian">Bruneian</option>
                  <option value="bulgarian">Bulgarian</option>
                  <option value="burkinabe">Burkinabe</option>
                  <option value="burmese">Burmese</option>
                  <option value="burundian">Burundian</option>
                  <option value="cambodian">Cambodian</option>
                  <option value="cameroonian">Cameroonian</option>
                  <option value="canadian">Canadian</option>
                  <option value="cape verdean">Cape Verdean</option>
                  <option value="central african">Central African</option>
                  <option value="chadian">Chadian</option>
                  <option value="chilean">Chilean</option>
                  <option value="chinese">Chinese</option>
                  <option value="colombian">Colombian</option>
                  <option value="comoran">Comoran</option>
                  <option value="congolese">Congolese</option>
                  <option value="costa rican">Costa Rican</option>
                  <option value="croatian">Croatian</option>
                  <option value="cuban">Cuban</option>
                  <option value="cypriot">Cypriot</option>
                  <option value="czech">Czech</option>
                  <option value="danish">Danish</option>
                  <option value="djibouti">Djibouti</option>
                  <option value="dominican">Dominican</option>
                  <option value="dutch">Dutch</option>
                  <option value="east timorese">East Timorese</option>
                  <option value="ecuadorean">Ecuadorean</option>
                  <option value="egyptian">Egyptian</option>
                  <option value="emirian">Emirian</option>
                  <option value="equatorial guinean">Equatorial Guinean</option>
                  <option value="eritrean">Eritrean</option>
                  <option value="estonian">Estonian</option>
                  <option value="ethiopian">Ethiopian</option>
                  <option value="fijian">Fijian</option>
                  <option value="filipino">Filipino</option>
                  <option value="finnish">Finnish</option>
                  <option value="french">French</option>
                  <option value="gabonese">Gabonese</option>
                  <option value="gambian">Gambian</option>
                  <option value="georgian">Georgian</option>
                  <option value="german">German</option>
                  <option value="ghanaian">Ghanaian</option>
                  <option value="greek">Greek</option>
                  <option value="grenadian">Grenadian</option>
                  <option value="guatemalan">Guatemalan</option>
                  <option value="guinea-bissauan">Guinea-Bissauan</option>
                  <option value="guinean">Guinean</option>
                  <option value="guyanese">Guyanese</option>
                  <option value="haitian">Haitian</option>
                  <option value="herzegovinian">Herzegovinian</option>
                  <option value="honduran">Honduran</option>
                  <option value="hungarian">Hungarian</option>
                  <option value="icelander">Icelander</option>
                  <option value="indian">Indian</option>
                  <option value="indonesian">Indonesian</option>
                  <option value="iranian">Iranian</option>
                  <option value="iraqi">Iraqi</option>
                  <option value="irish">Irish</option>
                  <option value="israeli">Israeli</option>
                  <option value="italian">Italian</option>
                  <option value="ivorian">Ivorian</option>
                  <option value="jamaican">Jamaican</option>
                  <option value="japanese">Japanese</option>
                  <option value="jordanian">Jordanian</option>
                  <option value="kazakhstani">Kazakhstani</option>
                  <option value="kenyan">Kenyan</option>
                  <option value="kittian and nevisian">Kittian and Nevisian</option>
                  <option value="kuwaiti">Kuwaiti</option>
                  <option value="kyrgyz">Kyrgyz</option>
                  <option value="laotian">Laotian</option>
                  <option value="latvian">Latvian</option>
                  <option value="lebanese">Lebanese</option>
                  <option value="liberian">Liberian</option>
                  <option value="libyan">Libyan</option>
                  <option value="liechtensteiner">Liechtensteiner</option>
                  <option value="lithuanian">Lithuanian</option>
                  <option value="luxembourger">Luxembourger</option>
                  <option value="macedonian">Macedonian</option>
                  <option value="malagasy">Malagasy</option>
                  <option value="malawian">Malawian</option>
                  <option value="malaysian">Malaysian</option>
                  <option value="maldivan">Maldivan</option>
                  <option value="malian">Malian</option>
                  <option value="maltese">Maltese</option>
                  <option value="marshallese">Marshallese</option>
                  <option value="mauritanian">Mauritanian</option>
                  <option value="mauritian">Mauritian</option>
                  <option value="mexican">Mexican</option>
                  <option value="micronesian">Micronesian</option>
                  <option value="moldovan">Moldovan</option>
                  <option value="monacan">Monacan</option>
                  <option value="mongolian">Mongolian</option>
                  <option value="moroccan">Moroccan</option>
                  <option value="mosotho">Mosotho</option>
                  <option value="motswana">Motswana</option>
                  <option value="mozambican">Mozambican</option>
                  <option value="namibian">Namibian</option>
                  <option value="nauruan">Nauruan</option>
                  <option value="nepalese">Nepalese</option>
                  <option value="new zealander">New Zealander</option>
                  <option value="ni-vanuatu">Ni-Vanuatu</option>
                  <option value="nicaraguan">Nicaraguan</option>
                  <option value="nigerien">Nigerien</option>
                  <option value="north korean">North Korean</option>
                  <option value="northern irish">Northern Irish</option>
                  <option value="norwegian">Norwegian</option>
                  <option value="omani">Omani</option>
                  <option value="pakistani">Pakistani</option>
                  <option value="palauan">Palauan</option>
                  <option value="panamanian">Panamanian</option>
                  <option value="papua new guinean">Papua New Guinean</option>
                  <option value="paraguayan">Paraguayan</option>
                  <option value="peruvian">Peruvian</option>
                  <option value="polish">Polish</option>
                  <option value="portuguese">Portuguese</option>
                  <option value="qatari">Qatari</option>
                  <option value="romanian">Romanian</option>
                  <option value="russian">Russian</option>
                  <option value="rwandan">Rwandan</option>
                  <option value="saint lucian">Saint Lucian</option>
                  <option value="salvadoran">Salvadoran</option>
                  <option value="samoan">Samoan</option>
                  <option value="san marinese">San Marinese</option>
                  <option value="sao tomean">Sao Tomean</option>
                  <option value="saudi">Saudi</option>
                  <option value="scottish">Scottish</option>
                  <option value="senegalese">Senegalese</option>
                  <option value="serbian">Serbian</option>
                  <option value="seychellois">Seychellois</option>
                  <option value="sierra leonean">Sierra Leonean</option>
                  <option value="singaporean">Singaporean</option>
                  <option value="slovakian">Slovakian</option>
                  <option value="slovenian">Slovenian</option>
                  <option value="solomon islander">Solomon Islander</option>
                  <option value="somali">Somali</option>
                  <option value="south african">South African</option>
                  <option value="south korean">South Korean</option>
                  <option value="spanish">Spanish</option>
                  <option value="sri lankan">Sri Lankan</option>
                  <option value="sudanese">Sudanese</option>
                  <option value="surinamer">Surinamer</option>
                  <option value="swazi">Swazi</option>
                  <option value="swedish">Swedish</option>
                  <option value="swiss">Swiss</option>
                  <option value="syrian">Syrian</option>
                  <option value="taiwanese">Taiwanese</option>
                  <option value="tajik">Tajik</option>
                  <option value="tanzanian">Tanzanian</option>
                  <option value="thai">Thai</option>
                  <option value="togolese">Togolese</option>
                  <option value="tongan">Tongan</option>
                  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                  <option value="tunisian">Tunisian</option>
                  <option value="turkish">Turkish</option>
                  <option value="tuvaluan">Tuvaluan</option>
                  <option value="ugandan">Ugandan</option>
                  <option value="ukrainian">Ukrainian</option>
                  <option value="uruguayan">Uruguayan</option>
                  <option value="uzbekistani">Uzbekistani</option>
                  <option value="venezuelan">Venezuelan</option>
                  <option value="vietnamese">Vietnamese</option>
                  <option value="welsh">Welsh</option>
                  <option value="yemenite">Yemenite</option>
                  <option value="zambian">Zambian</option>
                  <option value="zimbabwean">Zimbabwean</option>
                </select>

              </div>
            </div>
            <div class="form-group">
              <label for="#">12. Category</label>
              <div class="form-control">
                <select name="Category" id="sex" style="border: 0px;" required>
                  <option value="">--select--</option>
                  <option value="General">General</option>
                  <option value="OBC">OBC</option>
                  <option value="SC">SC</option>
                  <option value="ST">ST</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">13. Email</label>
                <input type="email" name="Email" class="form-control" id="inputEmail4" placeholder="Email" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">14. Mobile Ph. No.:</label>
                <input type="text" name="Mob" class="form-control" id="inputPassword4" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">15. Address for correspondence (with Pin code)</label>
              <input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="1234 Main St" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="inputCity" id="inputCity" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" name="inputState" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="AP">Andhra Pradesh</option>
                  <option value="AR">Arunachal Pradesh</option>
                  <option value="AS">Assam</option>
                  <option value="BR">Bihar</option>
                  <option value="CT">Chhattisgarh</option>
                  <option value="GA">Gujarat</option>
                  <option value="HR">Haryana</option>
                  <option value="HP">Himachal Pradesh</option>
                  <option value="JK">Jammu and Kashmir</option>
                  <option value="GA">Goa</option>
                  <option value="JH">Jharkhand</option>
                  <option value="KA">Karnataka</option>
                  <option value="KL">Kerala</option>
                  <option value="MP">Madhya Pradesh</option>
                  <option value="MH">Maharashtra</option>
                  <option value="MN">Manipur</option>
                  <option value="ML">Meghalaya</option>
                  <option value="MZ">Mizoram</option>
                  <option value="NL">Nagaland</option>
                  <option value="OR">Odisha</option>
                  <option value="PB">Punjab</option>
                  <option value="RJ">Rajasthan</option>
                  <option value="SK">Sikkim</option>
                  <option value="TN">Tamil Nadu</option>
                  <option value="TG">Telangana</option>
                  <option value="TR">Tripura</option>
                  <option value="UT">Uttarakhand</option>
                  <option value="UP">Uttar Pradesh</option>
                  <option value="WB">West Bengal</option>
                  <option value="AN">Andaman and Nicobar Islands</option>
                  <option value="CH">Chandigarh</option>
                  <option value="DN">Dadra and Nagar Haveli</option>
                  <option value="DD">Daman and Diu</option>
                  <option value="DL">Delhi</option>
                  <option value="LD">Lakshadweep</option>
                  <option value="PY">Puducherry</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Pin Code</label>
                <input type="tel" class="form-control" name="inputZip" id="inputZip" required>
              </div>
            </div>

            <div class="form-group">
              <label for="inputAddress">16. Permanent Address(with Pin code)</label>
              <!--   Check box   -->

              <div class="form-check">

                <label class="form-check-label" for="flexCheckDefault"> &nbsp
                  <input class="form-check-input" type="checkbox" onclick="setBillingAddress()" id="flexCheckDefault">
                  Same as Above:
                </label>
              </div>
              <br>
              <input type="text" class="form-control" name="inputPAddress" id="inputPAddress" placeholder="1234 Main St" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="inputPCity" id="inputPCity" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputPState" name="inputPState" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="AP">Andhra Pradesh</option>
                  <option value="AR">Arunachal Pradesh</option>
                  <option value="AS">Assam</option>
                  <option value="BR">Bihar</option>
                  <option value="CT">Chhattisgarh</option>
                  <option value="GA">Gujarat</option>
                  <option value="HR">Haryana</option>
                  <option value="HP">Himachal Pradesh</option>
                  <option value="JK">Jammu and Kashmir</option>
                  <option value="GA">Goa</option>
                  <option value="JH">Jharkhand</option>
                  <option value="KA">Karnataka</option>
                  <option value="KL">Kerala</option>
                  <option value="MP">Madhya Pradesh</option>
                  <option value="MH">Maharashtra</option>
                  <option value="MN">Manipur</option>
                  <option value="ML">Meghalaya</option>
                  <option value="MZ">Mizoram</option>
                  <option value="NL">Nagaland</option>
                  <option value="OR">Odisha</option>
                  <option value="PB">Punjab</option>
                  <option value="RJ">Rajasthan</option>
                  <option value="SK">Sikkim</option>
                  <option value="TN">Tamil Nadu</option>
                  <option value="TG">Telangana</option>
                  <option value="TR">Tripura</option>
                  <option value="UT">Uttarakhand</option>
                  <option value="UP">Uttar Pradesh</option>
                  <option value="WB">West Bengal</option>
                  <option value="AN">Andaman and Nicobar Islands</option>
                  <option value="CH">Chandigarh</option>
                  <option value="DN">Dadra and Nagar Haveli</option>
                  <option value="DD">Daman and Diu</option>
                  <option value="DL">Delhi</option>
                  <option value="LD">Lakshadweep</option>
                  <option value="PY">Puducherry</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Pin Code</label>
                <input type="tel" class="form-control" name="inputPZip" id="inputPZip" required>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">17. Academic Qualifications (Matric till post-graduation): </label>
              <!--  TABLE FOR COMPONENTS STARTS HERE -->
              <table cellspacing="5px" cellpadding="5px" width="100%">
                <tbody>
                  <tr align="left">
                    <td style="width: 450px;text-align:left;">Examination </td>

                    <td align="center">Name of Board <br>/University</td>
                    <td align="center">Year of Passing </td>
                    <td align="center"> Percentage of Marks Obtained </td>
                    <td align="center"> Division/Class <br>/Grade <br> </td>
                    <td align="center">Subjects</td>

                  </tr>

                  <tr>
                    <td>High School/Matrix </td>
                    <td align="center">

                      <select name="Matrixboards" style="width:150px;" class="combobox" size="1" required>
                        <option value="">-Select Board-
                        </option>
                        <option value="10">ABSE GUWAHATI </option>
                        <option value="09">AHSEC GUWAHATI </option>
                        <option value="06">APBIE Hyderabad </option>
                        <option value="07">APBSE HYDERABAD </option>
                        <option value="08">APOSS HYDERABAD </option>
                        <option value="11">BIEC PATNA </option>
                        <option value="12">BSEB PATNA </option>
                        <option value="13">BSSB PATNA </option>
                        <option value="02">C.B.S.E </option>
                        <option value="14">CHBSE RAIPUR </option>
                        <option value="51">CISCE NEW DELHI </option>
                        <option value="15">GBSHSE GOA </option>
                        <option value="16">GSHSEB GANDHINAGAR </option>
                        <option value="17">HBE BHIWANI </option>
                        <option value="18">HOS BHIWANI </option>
                        <option value="19">HPBSE DHARAMSHALA </option>
                        <option value="01">I.C.S.E </option>
                        <option value="52">INDIAN SCHOOL CERTIFICATE
                        </option>
                        <option value="22">JHAC RANCHI </option>
                        <option value="20">JKSBSE JAMMU </option>
                        <option value="21">JKSOS SRINAGAR </option>
                        <option value="27">KBHSE THIRUVANANTHPURAM
                        </option>
                        <option value="26">KBPE THIRUVANANTHPURAM
                        </option>
                        <option value="23">KBPUE BANGALORE </option>
                        <option value="25">KOS MYSORE </option>
                        <option value="24">KSEEB BANGALORE </option>
                        <option value="28">KSOS THIRUVANANTHPURAM
                        </option>
                        <option value="33">MBSE IMPHAL </option>
                        <option value="35">MBSEC AIZAWL </option>
                        <option value="32">MCHSE IMPHAL </option>
                        <option value="34">MEBSE MEGHALAYA </option>
                        <option value="30">MPBSE BHOPAL </option>
                        <option value="31">MPSOS BHOPAL </option>
                        <option value="29">MSBSHSE PUNE </option>
                        <option value="36">NBSE KOHIMA </option>
                        <option value="50">NIOS NEW DELHI </option>
                        <option value="38">OBSE CUTTACK </option>
                        <option value="37">OCHSE BHUBANESWAR </option>
                        <option value="04">Others </option>
                        <option value="39">PSEB MOHALI </option>
                        <option value="40">RBSE AJMER </option>
                        <option value="41">RSOS JAIPUR </option>
                        <option value="43">TNBHSE CHENNAI </option>
                        <option value="42">TNBSE CHENNAI </option>
                        <option value="44">TRBSE TRIPURA WEST </option>
                        <option value="53">TSBIE </option>
                        <option value="54">TSBSE </option>
                        <option value="03">U.P Board </option>
                        <option value="45">USEPP NANITAL </option>
                        <option value="49">WBBME </option>
                        <option value="46">WBBSE CALCUTTA </option>
                        <option value="47">WBCHSE CALCUTTA </option>
                        <option value="48">WBCROS </option>
                        <option value="05" selected="selected">DAYALBAGH
                          EDUCATIONAL INSTITUTE </option>
                      </select>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" maxlength="4" name="MatrixpassingYears" style="width:100px;"
                        value="" ; required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Matrixpercentile" style="width:100px;"
                        value="" required>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" name="Matrixdivision" style="width:100px;" value="" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Matrixsubjects" style="width:100px;"
                        value="" required>
                    </td>
                  </tr>

                  <tr>
                    <td>Intermediate</td>
                    <td align="center">
                      <!-- <input type="hidden" name="brdUnivRequired" value="Y" required>
                      <input type="hidden" name="universityNeeded" value="N" required> -->
                      <select name="Interboards" style="width:150px;" class="combobox" size="1" required>
                        <option value="">-Select Board-
                        </option>
                        <option value="10">ABSE GUWAHATI </option>
                        <option value="09">AHSEC GUWAHATI </option>
                        <option value="06">APBIE Hyderabad </option>
                        <option value="07">APBSE HYDERABAD </option>
                        <option value="08">APOSS HYDERABAD </option>
                        <option value="11">BIEC PATNA </option>
                        <option value="12">BSEB PATNA </option>
                        <option value="13">BSSB PATNA </option>
                        <option value="02">C.B.S.E </option>
                        <option value="14">CHBSE RAIPUR </option>
                        <option value="51">CISCE NEW DELHI </option>
                        <option value="15">GBSHSE GOA </option>
                        <option value="16">GSHSEB GANDHINAGAR </option>
                        <option value="17">HBE BHIWANI </option>
                        <option value="18">HOS BHIWANI </option>
                        <option value="19">HPBSE DHARAMSHALA </option>
                        <option value="01">I.C.S.E </option>
                        <option value="52">INDIAN SCHOOL CERTIFICATE
                        </option>
                        <option value="22">JHAC RANCHI </option>
                        <option value="20">JKSBSE JAMMU </option>
                        <option value="21">JKSOS SRINAGAR </option>
                        <option value="27">KBHSE THIRUVANANTHPURAM
                        </option>
                        <option value="26">KBPE THIRUVANANTHPURAM
                        </option>
                        <option value="23">KBPUE BANGALORE </option>
                        <option value="25">KOS MYSORE </option>
                        <option value="24">KSEEB BANGALORE </option>
                        <option value="28">KSOS THIRUVANANTHPURAM
                        </option>
                        <option value="33">MBSE IMPHAL </option>
                        <option value="35">MBSEC AIZAWL </option>
                        <option value="32">MCHSE IMPHAL </option>
                        <option value="34">MEBSE MEGHALAYA </option>
                        <option value="30">MPBSE BHOPAL </option>
                        <option value="31">MPSOS BHOPAL </option>
                        <option value="29">MSBSHSE PUNE </option>
                        <option value="36">NBSE KOHIMA </option>
                        <option value="50">NIOS NEW DELHI </option>
                        <option value="38">OBSE CUTTACK </option>
                        <option value="37">OCHSE BHUBANESWAR </option>
                        <option value="04">Others </option>
                        <option value="39">PSEB MOHALI </option>
                        <option value="40">RBSE AJMER </option>
                        <option value="41">RSOS JAIPUR </option>
                        <option value="43">TNBHSE CHENNAI </option>
                        <option value="42">TNBSE CHENNAI </option>
                        <option value="44">TRBSE TRIPURA WEST </option>
                        <option value="53">TSBIE </option>
                        <option value="54">TSBSE </option>
                        <option value="03">U.P Board </option>
                        <option value="45">USEPP NANITAL </option>
                        <option value="49">WBBME </option>
                        <option value="46">WBBSE CALCUTTA </option>
                        <option value="47">WBCHSE CALCUTTA </option>
                        <option value="48">WBCROS </option>
                        <option value="05" selected="selected">DAYALBAGH EDUCATIONAL INSTITUTE </option>
                      </select>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" maxlength="4" name="InterpassingYears" style="width:100px;"
                        value="" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Interpercentile" style="width:100px;"
                        value="" required>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" name="Interdivision" style="width:100px;" value="" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Intersubjects" style="width:100px;"
                        value="" required>
                    </td>
                  </tr>


                  <tr>
                    <td>B.A/B.Sc/B.Com/B.Tech </td>
                    <td align="center">
                      <!-- <input type="hidden" name="brdUnivRequired" value="Y" required>
                      <input type="hidden" name="universityNeeded" value="N" required> -->
                      <select name="Bachelorboards" style="width:150px;" class="combobox" size="1" required>
                        <option value="">-Select Board-
                        </option>
                        <option value="10">ABSE GUWAHATI </option>
                        <option value="09">AHSEC GUWAHATI </option>
                        <option value="06">APBIE Hyderabad </option>
                        <option value="07">APBSE HYDERABAD </option>
                        <option value="08">APOSS HYDERABAD </option>
                        <option value="11">BIEC PATNA </option>
                        <option value="12">BSEB PATNA </option>
                        <option value="13">BSSB PATNA </option>
                        <option value="02">C.B.S.E </option>
                        <option value="14">CHBSE RAIPUR </option>
                        <option value="51">CISCE NEW DELHI </option>
                        <option value="15">GBSHSE GOA </option>
                        <option value="16">GSHSEB GANDHINAGAR </option>
                        <option value="17">HBE BHIWANI </option>
                        <option value="18">HOS BHIWANI </option>
                        <option value="19">HPBSE DHARAMSHALA </option>
                        <option value="01">I.C.S.E </option>
                        <option value="52">INDIAN SCHOOL CERTIFICATE
                        </option>
                        <option value="22">JHAC RANCHI </option>
                        <option value="20">JKSBSE JAMMU </option>
                        <option value="21">JKSOS SRINAGAR </option>
                        <option value="27">KBHSE THIRUVANANTHPURAM
                        </option>
                        <option value="26">KBPE THIRUVANANTHPURAM
                        </option>
                        <option value="23">KBPUE BANGALORE </option>
                        <option value="25">KOS MYSORE </option>
                        <option value="24">KSEEB BANGALORE </option>
                        <option value="28">KSOS THIRUVANANTHPURAM
                        </option>
                        <option value="33">MBSE IMPHAL </option>
                        <option value="35">MBSEC AIZAWL </option>
                        <option value="32">MCHSE IMPHAL </option>
                        <option value="34">MEBSE MEGHALAYA </option>
                        <option value="30">MPBSE BHOPAL </option>
                        <option value="31">MPSOS BHOPAL </option>
                        <option value="29">MSBSHSE PUNE </option>
                        <option value="36">NBSE KOHIMA </option>
                        <option value="50">NIOS NEW DELHI </option>
                        <option value="38">OBSE CUTTACK </option>
                        <option value="37">OCHSE BHUBANESWAR </option>
                        <option value="04">Others </option>
                        <option value="39">PSEB MOHALI </option>
                        <option value="40">RBSE AJMER </option>
                        <option value="41">RSOS JAIPUR </option>
                        <option value="43">TNBHSE CHENNAI </option>
                        <option value="42">TNBSE CHENNAI </option>
                        <option value="44">TRBSE TRIPURA WEST </option>
                        <option value="53">TSBIE </option>
                        <option value="54">TSBSE </option>
                        <option value="03">U.P Board </option>
                        <option value="45">USEPP NANITAL </option>
                        <option value="49">WBBME </option>
                        <option value="46">WBBSE CALCUTTA </option>
                        <option value="47">WBCHSE CALCUTTA </option>
                        <option value="48">WBCROS </option>
                        <option value="05" selected="selected">DAYALBAGH EDUCATIONAL INSTITUTE </option>
                      </select>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" maxlength="4" name="BachelorpassingYears" style="width:100px;"
                        value="" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Bachelorpercentile" style="width:100px;"
                        value="" required>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" name="Bachelordivision" style="width:100px;" value="" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Bachelorsubjects" style="width:100px;"
                        value="" required>
                    </td>
                  </tr>
                  <tr>
                    <td>M.A/M.Sc/M.Com </td>
                    <td align="center">
                      <!-- <input type="hidden" name="brdUnivRequired" value="Y" required>
                      <input type="hidden" name="universityNeeded" value="N" required> -->
                      <select name="Mastersboards" style="width:150px;" class="combobox" size="1" required>
                        <option value="">-Select Board- </option>
                        <option value="10">ABSE GUWAHATI </option>
                        <option value="09">AHSEC GUWAHATI </option>
                        <option value="06">APBIE Hyderabad </option>
                        <option value="07">APBSE HYDERABAD </option>
                        <option value="08">APOSS HYDERABAD </option>
                        <option value="11">BIEC PATNA </option>
                        <option value="12">BSEB PATNA </option>
                        <option value="13">BSSB PATNA </option>
                        <option value="02">C.B.S.E </option>
                        <option value="14">CHBSE RAIPUR </option>
                        <option value="51">CISCE NEW DELHI </option>
                        <option value="15">GBSHSE GOA </option>
                        <option value="16">GSHSEB GANDHINAGAR </option>
                        <option value="17">HBE BHIWANI </option>
                        <option value="18">HOS BHIWANI </option>
                        <option value="19">HPBSE DHARAMSHALA </option>
                        <option value="01">I.C.S.E </option>
                        <option value="52">INDIAN SCHOOL CERTIFICATE
                        </option>
                        <option value="22">JHAC RANCHI </option>
                        <option value="20">JKSBSE JAMMU </option>
                        <option value="21">JKSOS SRINAGAR </option>
                        <option value="27">KBHSE THIRUVANANTHPURAM
                        </option>
                        <option value="26">KBPE THIRUVANANTHPURAM
                        </option>
                        <option value="23">KBPUE BANGALORE </option>
                        <option value="25">KOS MYSORE </option>
                        <option value="24">KSEEB BANGALORE </option>
                        <option value="28">KSOS THIRUVANANTHPURAM
                        </option>
                        <option value="33">MBSE IMPHAL </option>
                        <option value="35">MBSEC AIZAWL </option>
                        <option value="32">MCHSE IMPHAL </option>
                        <option value="34">MEBSE MEGHALAYA </option>
                        <option value="30">MPBSE BHOPAL </option>
                        <option value="31">MPSOS BHOPAL </option>
                        <option value="29">MSBSHSE PUNE </option>
                        <option value="36">NBSE KOHIMA </option>
                        <option value="50">NIOS NEW DELHI </option>
                        <option value="38">OBSE CUTTACK </option>
                        <option value="37">OCHSE BHUBANESWAR </option>
                        <option value="04">Others </option>
                        <option value="39">PSEB MOHALI </option>
                        <option value="40">RBSE AJMER </option>
                        <option value="41">RSOS JAIPUR </option>
                        <option value="43">TNBHSE CHENNAI </option>
                        <option value="42">TNBSE CHENNAI </option>
                        <option value="44">TRBSE TRIPURA WEST </option>
                        <option value="53">TSBIE </option>
                        <option value="54">TSBSE </option>
                        <option value="03">U.P Board </option>
                        <option value="45">USEPP NANITAL </option>
                        <option value="49">WBBME </option>
                        <option value="46">WBBSE CALCUTTA </option>
                        <option value="47">WBCHSE CALCUTTA </option>
                        <option value="48">WBCROS </option>
                        <option value="05" selected="selected">DAYALBAGH
                          EDUCATIONAL INSTITUTE </option>
                      </select>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" maxlength="4" name="MasterspassingYears" style="width:100px;"
                        value="" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Masterspercentile" style="width:100px;"
                        value="" required>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" name="Mastersdivision" style="width:100px;" value="" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Masterssubjects" style="width:100px;"
                        value="" required>
                    </td>
                  </tr>
                  <tr>

                    <td>Other,if any </td>
                    <td align="center">
                      <!-- <input type="hidden" name="brdUnivRequired" value="Y" required>
                      <input type="hidden" name="universityNeeded" value="N" required> -->
                      <select name="Otherboards" style="width:150px;" class="combobox" size="1" required>
                        <option value="">-Select Board-
                        </option>
                        <option value="10">ABSE GUWAHATI </option>
                        <option value="09">AHSEC GUWAHATI </option>
                        <option value="06">APBIE Hyderabad </option>
                        <option value="07">APBSE HYDERABAD </option>
                        <option value="08">APOSS HYDERABAD </option>
                        <option value="11">BIEC PATNA </option>
                        <option value="12">BSEB PATNA </option>
                        <option value="13">BSSB PATNA </option>
                        <option value="02">C.B.S.E </option>
                        <option value="14">CHBSE RAIPUR </option>
                        <option value="51">CISCE NEW DELHI </option>
                        <option value="15">GBSHSE GOA </option>
                        <option value="16">GSHSEB GANDHINAGAR </option>
                        <option value="17">HBE BHIWANI </option>
                        <option value="18">HOS BHIWANI </option>
                        <option value="19">HPBSE DHARAMSHALA </option>
                        <option value="01">I.C.S.E </option>
                        <option value="52">INDIAN SCHOOL CERTIFICATE
                        </option>
                        <option value="22">JHAC RANCHI </option>
                        <option value="20">JKSBSE JAMMU </option>
                        <option value="21">JKSOS SRINAGAR </option>
                        <option value="27">KBHSE THIRUVANANTHPURAM
                        </option>
                        <option value="26">KBPE THIRUVANANTHPURAM
                        </option>
                        <option value="23">KBPUE BANGALORE </option>
                        <option value="25">KOS MYSORE </option>
                        <option value="24">KSEEB BANGALORE </option>
                        <option value="28">KSOS THIRUVANANTHPURAM
                        </option>
                        <option value="33">MBSE IMPHAL </option>
                        <option value="35">MBSEC AIZAWL </option>
                        <option value="32">MCHSE IMPHAL </option>
                        <option value="34">MEBSE MEGHALAYA </option>
                        <option value="30">MPBSE BHOPAL </option>
                        <option value="31">MPSOS BHOPAL </option>
                        <option value="29">MSBSHSE PUNE </option>
                        <option value="36">NBSE KOHIMA </option>
                        <option value="50">NIOS NEW DELHI </option>
                        <option value="38">OBSE CUTTACK </option>
                        <option value="37">OCHSE BHUBANESWAR </option>
                        <option value="04">Others </option>
                        <option value="39">PSEB MOHALI </option>
                        <option value="40">RBSE AJMER </option>
                        <option value="41">RSOS JAIPUR </option>
                        <option value="43">TNBHSE CHENNAI </option>
                        <option value="42">TNBSE CHENNAI </option>
                        <option value="44">TRBSE TRIPURA WEST </option>
                        <option value="53">TSBIE </option>
                        <option value="54">TSBSE </option>
                        <option value="03">U.P Board </option>
                        <option value="45">USEPP NANITAL </option>
                        <option value="49">WBBME </option>
                        <option value="46">WBBSE CALCUTTA </option>
                        <option value="47">WBCHSE CALCUTTA </option>
                        <option value="48">WBCROS </option>
                        <option value="05" selected="selected">DAYALBAGH
                          EDUCATIONAL INSTITUTE </option>
                      </select>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" maxlength="4" name="OtherpassingYears" style="width:100px;"
                        value="" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Otherpercentile" style="width:100px;"
                        value="" required>
                    </td>
                    <td align="center">
                      <input type="text" autocomplete="off" name="Otherdivision" style="width:100px;" value="" required>
                    </td>
                    <td align="center"> <input type="text" autocomplete="off" name="Othersubjects" style="width:100px;"
                        value="" required>
                    </td>
                  </tr>


                </tbody>
              </table>
              </td>
              </tr>
            </div>
            <div class="form-group">
              <label for="#">18. Research Degree(s)</label>
              <table cellspacing="5px" cellpadding="5px" width="100%" border="0 ">
                <thead>
                  <tr>
                    <td>Degrees</td>
                    <td>Title</td>
                    <td>Date of Award</td>
                    <td>University</td>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>M.Phil./M.Tech</td>
                    <td> <input type="text" autocomplete="off" name="Mtitle" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Mdate" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="Muniversity" style="width:150px;" value=""
                        required></td>
                  </tr>
                  <tr>
                    <td>Ph.D./D.Phil.</td>
                    <td> <input type="text" autocomplete="off" name="Dtitle" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Ddate" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="Duniversity" style="width:150px;" value=""
                        required></td>
                  </tr>
                  <tr>
                    <td>D.Sc/D.Litt.</td>
                    <td> <input type="text" autocomplete="off" name="DDtitle" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="DDdate" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="DDuniversity" style="width:150px;" value=""
                        required></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="form-group">
              <label for="#">19. Appointment held prior to joining this Institution</label>
              <table cellspacing="5px" cellpadding="5px" width="100%" border="0 ">
                <thead>
                  <tr>
                    <td>Designation</td>
                    <td>Name of Employer</td>
                    <td>Date of Joining</td>
                    <td>Date of Leaving</td>
                    <td>Salary with Grade</td>
                    <td>Reason of leaving</td>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <input type="text" autocomplete="off" name="Designation1" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="NOE1" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ1" style="width:150px;" value=""
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOL1" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Salary1" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="ROL1" style="width:150px;" value="" required>
                    </td>
                  </tr>
                  <tr>
                    <td> <input type="text" autocomplete="off" name="Designation2" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="NOE2" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ2" style="width:150px;" value=""
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOL2" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Salary2" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="ROL2" style="width:150px;" value="" required>
                    </td>
                  </tr>
                  <tr>
                    <td> <input type="text" autocomplete="off" name="Designation3" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="NOE3" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ3" style="width:150px;" value=""
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOL3" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Salary3" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="ROL3" style="width:150px;" value="" required>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="form-group">
              <label for="#">20. Posts held after appointment at this Institute:</label>
              <table cellspacing="5px" cellpadding="5px" width="100%" border="0 ">
                <thead>
                  <tr>
                    <td>Designation</td>
                    <td>Department</td>
                    <td>Date of Actual Joining (from)</td>
                    <td>Date of Actual Joining (to)</td>
                    <td>Grade/Level</td>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <input type="text" autocomplete="off" name="Desig1" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Department1" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(from)1" style="width:150px;" value=""
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(to)1" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Grade1" style="width:150px;" value="" required></td>
                  </tr>
                  <tr>
                    <td> <input type="text" autocomplete="off" name="Desig2" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Department2" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(from)2" style="width:150px;" value=""
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(to)2" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Grade2" style="width:150px;" value="" required></td>
                  </tr>
                  <tr>
                    <td> <input type="text" autocomplete="off" name="Desig3" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Department3" style="width:150px;" value="" required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(from)3" style="width:150px;" value=""
                        required></td>
                    <td> <input type="text" autocomplete="off" name="DOJ(to)3" style="width:150px;" value="" required>
                    </td>
                    <td> <input type="text" autocomplete="off" name="Grade3" style="width:150px;" value="" required></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="form-group">
              <label for="#">21. Period of teaching experience:</label><br>
              <table>
                <tr>
                  <td>P.G. (in years):</td>
                  <td>U.G. (in years):</td>
                </tr>
                <tr>
                  <td> <input type="number" autocomplete="off" name="PGexperience" style="width:100px;" value="" required>
                  </td>
                  <td> <input type="number" autocomplete="off" name="UGexperience" style="width:100px;" value="" required></td>
                </tr>

              </table>
            </div>
            <div class="form-group">
              <label for="#">22. Research Experience excluding years spent in M.Phil./ Ph.D. (In years): </label>
              <input type="number" autocomplete="off" name="ResearchExp" style="width:100px;" value="" required>

            </div>
            <div class="form-group">
              <label for="#">23. Fields of Specialization under the Subject/Discipline </label>
              <input type="text" autocomplete="off" name="Specialization" style="width:100px;" value="" required>

            </div>
            <hr>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>

        <br>
        <br>


      </div>
    </div>
  </form>

  <script src="CASpartA.php">
  </script>

</body>

</html>