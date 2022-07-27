<?php
session_start();
if (isset($_POST['submit'])) {
	eligible();
}
function eligible()	{
        $job = $_POST['Application for'];
        $experience = $_POST['teachingexp'];
        $graduation = $_POST['graduation'];
        $country = $_POST['Citizenship'];        
	       intval($experience);
        intval($graduation);
	if(strcmp($job,"Physics")){
         if ($experience >=2 && $graduation >=60 && strcmp($country,"India"))
         echo ("<script LANGUAGE='JavaScript'>
              window.alert('You are eligible to apply');
              window.location.href='teacher/signup.php';
              </script>");
         else
         echo ("<script LANGUAGE='JavaScript'>
              window.alert('You are not eligible to apply');
              window.location.href='index.php';
              </script>");
        }	
  else
      {
         if ($experience >=4 && $graduation >=80 && strcmp($country,"India"))
         echo ("<script LANGUAGE='JavaScript'>
              window.alert('You are eligible to apply');
              window.location.href='teacher/signup.php';
              </script>");
         else
         echo ("<script LANGUAGE='JavaScript'>
              window.alert('You are not eligible to apply');
              window.location.href='index.php';
              </script>");
	    }
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>    
    <title>Eligibility</title> 
    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<form name="" method="post" action="" enctype="multipart/form-data">
    <fieldset>
      <legend>Job</legend><br>
      <label>
        Apply for *
        <select name="Application for" required>
          <option>Physics</option>
          <option>Computer science</option>
        </select>
      </label>
    </fieldset>
    <br>
    <fieldset>
        <br>
      <legend>Personal data</legend>
      <div class="two-cols">
        <label>First name * <input type="text" name="First name" required></label><br><br>
        <label> Last name * <input type="text" name="Last name" required> </label>
        <br>
      </div>
      <br>
      <div class="two-cols">
        <label>Citizenship * <input type="text" name="Citizenship" required="true"></label><br><br>
        <label>Date of birth<input type="date" name="Date of birth"></label><br><br>
      </div>
      <div class="two-cols">
<label>Teaching Experience (in Years) * <input type="text" name="teachingexp" pattern="[0-9]+" required="true"></label><br><br>
<label>Graduation percentage * <input type="text" name="graduation" pattern="[0-9]+" required="true"> %</label><br><br>
</div>
      <div class="two-cols">
        <label>Phone * <input type="tel" name="Phone" required></label><br><br>
        <label>Email address * <input type="email" name="Email" required></label><br><br>
      </div>
    </fieldset>
    <br>
    <fieldset>
      <legend>Application documents</legend>
      <input type="hidden" name="MAX_FILE_SIZE" value="10485760"><br>
      <div class="two-cols">
        <label>
          Application letter
          <input type="file" name="Application letter" accept=".doc,.docx,.pdf">
        </label><br><br>
        <label>
          Resume upload
          <input type="file" name="resume upload" accept=".doc,.docx,.pdf">
        </label><br>
      </div>
      <p>Possible file types: DOC, PDF. Maximum file size: 10 MB.</p>
    </fieldset>
    <br>
    <div class="btns"><input type="submit" name="submit", value="Check Eligibility"></div>
  </form>
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>

</body>
</html>