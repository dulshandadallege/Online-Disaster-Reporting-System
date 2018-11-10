
<?php include 'DBconnection.php';

/**/
?>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" type="text/css" href="Css/Signup.css" />
     <style>
        body{background-image: url("669e5afad4adbcdc66af89ed7f3f6240.jpg");
            height:400px;
            
        }
      
      </style>  
    </head>
    <body>

      <form method="post">
      
        <h1>Sign Up I-CADS Disaster Management System</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="id">ID:</label>
          <input type="text" id="Sid" name="Sid">

          <label name="fname">First Name:</label>
            <?php
                if($fname!="any")
                {
                    echo "<p style='color:red' >".$fnametxt."</p>";
                }
            ?>
          <input type="text" id="fname" name="fname">

          <label name="lname">Last Name:</label>
          <?php
            if($lname!="any")
            {
                echo "<p style='color:red' >". $lnametxt . "</p>";
            }
          ?>
          <input type="text" id="lname" name="lname">

          <label name="nic">NIC:</label>
          <input type="text" id="nic" name="nic">

          <label name="tNo">Telephone Number:</label>
          <?php
            if($tno!="any")
            {
                echo "<p style='color:red' >". $tnotxt . "</p>";
            }
          ?>
          <input type="text" id="tno" name="tno">

          <fieldset>
        <label name="job">Job Role:</label>
        <select id="job" name="job">
          <optgroup label="Roll">
            <option value="reporter">Reporter</option>
            <option value="manager">Manager</option>
          
           
        </select>
        
        </fieldset>

          <label name="mail">Email:</label>
         <?php
            if($email!="any")
            {
                echo "<p style='color:red' >". $emailtxt . "</p>";
            }
          ?>
          <input type="email" id="mail" name="mail">
          
          <label name="address">Address Line 1:</label>
          <input type="text" id="add1" name="add1">

          <label name="address">Address Line 2:</label>
          <input type="text" id="add2" name="add2">

          <label name="address">Address Line 3:</label>
          <input type="text" id="add3" name="add3">

          <label name="dob">Date of Birth:</label>
          <input type="text" id="dob" name="dob">

          <label name="password">Password: <br></label>
          <label><font color="red"> *Your password must have atleast one uppercase letter, one lowercase letter, one number and minimum 6 characters. </font></label>
          <?php
            if($pwd!="any")
            {
                echo "<p style='color:red' >". $pwdtxt . "</p>";
            }
          ?>
          <input type="password" id="password" name="password">
    
        </fieldset>
        
        
        
        <button type="submit" name="signup">Sign Up</button>
      </form>
      
    </body>
</html>