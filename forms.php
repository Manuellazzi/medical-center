<?php
/* 
include 'db_conn.php';
if(isset($_POST['submit'])){

$doctorname = $_POST['doctorname'];
$patientname = $_POST['patientname'];
$date = $_POST['date'];
$medicines = $_POST['medicines'];


$sql = "INSERT INTO forms (doctor_name,patient_name,date,medicines) 
VALUES('$doctorname', '$patientname', '$date', '$medicines')";
$res = mysqli_query($conn, $sql);

if ($res) {
  echo "Your message was sent successfully!";
}else {
  echo "Your message could not be sent!";
}
}*/

include 'db_conn.php';
if(isset($_POST['submit'])){

$patientname = $_POST['patientname'];
$dateofbirth= $_POST['dateofbirth'];
$doctorname = $_POST['doctorname'];
$patientweight = $_POST['patientweight'];
$gender = $_POST['gender'];
$physicalexam= $_POST['physicalexam'];
$allergies = $_POST['allergies'];
$smoke = $_POST['smoke'];
$drink = $_POST['drink'];
$diet = $_POST['diet'];
$chronicdisease = $_POST['chronicdisease'];
$childhoodillness= $_POST['childhoodillness'];
$bloodtransfusion = $_POST['bloodtransfusion'];
$surgeries = $_POST['surgeries'];
$listofmedications = $_POST['listofmedications'];
$vaccine = $_POST['vaccine'];
$parents= $_POST['parents'];
$children= $_POST['children'];
$grandparents = $_POST['grandparents'];
$auntsuncles = $_POST['auntsuncles'];
$cousins = $_POST['cousins'];
$sistersbrothers = $_POST['sistersbrothers'];
/*do{
    if (empty($patientname) || empty($dateofbirth) ||empty($doctorname) ||empty($patientweight) ||empty($gender)||empty($physicalexam)
    ||empty($allergies) ||empty($smoke) ||empty($drink) ||empty($chronicdisease) ||empty($childhoodillness)||empty($bloodtransfusion)
    ||empty($surgies)||empty($listofmedications)||empty($vaccine)||empty($surgies)||empty($parents)||empty($children)||empty($grandparents)
    ||empty($auntsuncles)||empty($cousins)||empty($sistersbrothers))
    {
    $errorMessage="Fill the required fields";
    break;}

  $sql = "INSERT INTO `efile` (firstname,lastname,phonenumber,dateofbirth,disease,medicine) 
   VALUES('$firstname', '$lastname','$phonenumber', '$dateofbirth','$disease', '$medicine')";
   $res = mysqli_query($conn, $sql);
  
   if (!$res) {
   $errorMessage="Invalid query: " . $conn->error;
   break;
 }
 $patientname = "";
 $dateofbirth=  "";
 $doctorname = "";
 $patientweight =  "";
 $gender =  "";
 $physicalexam= "";
 $allergies = "";
 $smoke ="";
 $drink ="";
 $diet = "";
 $chronicdisease ="";
 $childhoodillness= "";
 $bloodtransfusion = "";
 $surgies ="";
 $listofmedications = "";
 $vaccine = "";
 $parents= "";
 $children="";
 $grandparents = "";
 $auntsuncles = "";
 $cousins = "";
 $sistersbrothers ="";
    

    $successMessage="filled correctly the efile is saved";

    header("location:/Login-registration-System-PHP-and-MYSQL-master/display.php");
    exit;

  }while(false);
*/
$sql = "INSERT INTO form (patientname,dateofbirth,doctorname,patientweight,gender,physicalexam,allergies,smoke,drink,diet,
chronicdisease,childhoodillness,bloodtransfusion,surgeries,listofmedications,vaccine,parents,children,grandparents,auntsuncles,
cousins,sistersbrothers) 
VALUES('$patientname','$dateofbirth','$doctorname','$patientweight','$gender','$physicalexam','$allergies','$smoke','$drink',
'$diet','$chronicdisease','$childhoodillness','$bloodtransfusion','$surgeries','$listofmedications','$vaccine','$parents',
'$children','$grandparents','$auntsuncles','$cousins','$sistersbrothers')";
$res = mysqli_query($conn, $sql);

}


?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style2.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>FORM</title> 
</head>
<body>
    <div class="container">
        <header>Health History Questionnaire</header>

        <form method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Patient Name</label>
                            <input type="text" placeholder="Enter patient name" name="patientname" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name="dateofbirth" required>
                        </div>

                        <div class="input-field">
                            <label>doctor Name</label>
                            <input type="text" placeholder="Enter doctor name" name="doctorname" required>
                        </div>

                        <div class="input-field">
                            <label>patient weight</label>
                            <input type="number" min="0" placeholder="Enter weight in kg" name="patientweight" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>last physical exam</label>
                            <input type="" placeholder="type here..." name="physicalexam" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Health habits and Personal safety</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Allergies to medications</label>
                            <input type="text" placeholder="type here..." name="allergies" required>
                        </div>

                        <div class="input-field">
                            <label>do you smoke?</label>
                            <select name="smoke" required>
                            <option disabled selected>Select  yes or no</option>
                                <option>yes</option>
                                <option>no</option>
                               
                            </select>
                        </div>

                        <div class="input-field">
                        <label>do you drink?</label>
                            <select name="drink" required>
                            <option disabled selected>Select  yes or no</option>
                                <option>yes</option>
                                <option>no</option>
                               
                            </select>
                        </div>

                        <div class="input-field">
                            <label>are you dieting?</label>
                            <select name="diet" required>
                            <option disabled selected>Select  yes or no</option>
                                <option>yes</option>
                                <option>no</option>
                               
                            </select>
                        </div>

                        <div class="input-field">
                            <label>do you suffer from any chronic disease</label>
                            <select name="chronicdisease" required>
                            <option disabled selected>Select  yes or no</option>
                                <option>yes</option>
                                <option>no</option>
                               
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Any Childhood illness</label>
                            <input type="text" placeholder="type here..." name="childhoodillness" required>
                        </div>
                       
                        
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">personal history details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>have you ever had any blood transfusion</label>
                            <select name="bloodtransfusion" required>
                            <option disabled selected>Select  yes or no</option>
                                <option>yes</option>
                                <option>no</option>
                               
                            </select>
                        </div>

                        <div class="input-field">
                            <label>any surgeries</label>
                            <input type="text" placeholder="type here..." name="surgeries" required>
                        </div>

                        <div class="input-field">
                            <label>list of medication intake</label>
                            <input type="text" placeholder="type here..." name="listofmedications" required>
                        </div>

                        <div class="input-field">
                            <label>are you fully vaccinated?</label>
                            <select name="vaccine" required>
                            <option disabled selected>Select  yes or no</option>
                                <option>yes</option>
                                <option>no</option>
                               
                            </select>
                        </div>

                       
                    </div>
                </div>

                <div class="family health history">
                    <span class="title">Family health problems</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>parents  </label>
                            <select name="parents" required>
                            <option>none</option>
                                <option>ALzheimer</option>
                                <option>arthirtis</option>
                                <option>asthma</option>
                                <option>obesity </option>
                                <option>cancer</option>
                                <option>high blood pressure</option>
                                <option>heart disease</option>
                                <option>Ostiporosis</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>children</label>
                            <select name="children" required>
                            <option>none</option>
                                <option>ALzheimer</option>
                                <option>arthirtis</option>
                                <option>asthma</option>
                                <option>obesity </option>
                                <option>cancer</option>
                                <option>high blood pressure</option>
                                <option>heart disease</option>
                                <option>Ostiporosis</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Grandparents</label>
                            <select name="grandparents" required>
                            <option>none</option>
                                <option>ALzheimer</option>
                                <option>arthirtis</option>
                                <option>asthma</option>
                                <option>obesity </option>
                                <option>cancer</option>
                                <option>high blood pressure</option>
                                <option>heart disease</option>
                                <option>Ostiporosis</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>aunts and uncles</label>
                            <select name="auntsuncles"required>
                            <option>none</option>
                                <option>ALzheimer</option>
                                <option>arthirtis</option>
                                <option>asthma</option>
                                <option>obesity </option>
                                <option>cancer</option>
                                <option>high blood pressure</option>
                                <option>heart disease</option>
                                <option>Ostiporosis</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>cousins  </label>
                            <select name="cousins" required>
                                
                            <option>none</option>
                                <option>ALzheimer</option>
                                <option>arthirtis</option>
                                <option>asthma</option>
                                <option>obesity </option>
                                <option>cancer</option>
                                <option>high blood pressure</option>
                                <option>heart disease</option>
                                <option>Ostiporosis</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>sisters and brothers</label>
                            <select name="sistersbrothers"required>
                            <option>none</option>
                                <option>ALzheimer</option>
                                <option>arthirtis</option>
                                <option>asthma</option>
                                <option>obesity </option>
                            <option>cancer</option>
                                <option>high blood pressure</option>
                                <option>heart disease</option>
                                <option>Ostiporosis</option>
                            </select>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                       
                        <button type="submit" name="submit">Submit</button>
<!--<button class="sumbit">
                            <span class="btnText">Submit</span>

<input   type="submit" class="btnText" name="insert" value="submit"/>             
               <i class="uil uil-navigator"></i>
 <button type="submit" name="submit">Submit</button>-->
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
   <script src="script2.js"></script>
</body>
</html>
  