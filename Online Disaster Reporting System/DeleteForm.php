<?php include 'DBconnection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel Delete User</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="Css/styles.css" />
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="Css/Index.css" />
<link rel="stylesheet" type="text/css" href="Css/Olderposts.css" />
<link rel="stylesheet" type="text/css" href="Css/Previous_Disaster.css" />
<link rel="stylesheet" type="text/css" href="Css/Aboutus.css" />
     <!-- Bootstrap core CSS -->
    <link href="Css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Css/blog-post.css" rel="stylesheet">


    <style>
        body{
            background-image: url("669e5afad4adbcdc66af89ed7f3f6240.jpg");
        
            background-repeat: repeat;
            
        }
      
      </style>
</head>
<body>

    <div id="wrapper2">
        
            <div id="banner">
                <image src="Images/WEB baner.jpg" height="200px" width="1100px"/>
            </div>
            <nav id="navigation">
                <div id='cssmenu'>
<ul>
   <li class='active'>
   <a href='Index.php'>Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='googlemap.php'>Disaster Map&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Aboutus.php'>About us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <li><a href='Contact.php'>Contact Us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
   <?php

       if (isset($_SESSION['id1'])){
           
           echo "<li><a href='admin.php'>Admin  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
        }
     ?>
   
   
    
</ul>
</div>
                
            </nav>
            <a href="admin.php"><button type="button" class="btn btn-info btn-sm">Back to the Previous Page</button></a>
            <?php
            
            $message6 = '<div class="my-notify-success"><h1 align="center">You have successfully deleted a user account</h1></div>';
            ?>
<hr>


<?php
		
			$id = $_GET['uname'];
			//include 'DBconnection.php';
			$query = "SELECT * FROM users WHERE user_id= '$id' ";
			$result = mysqli_query($connection,$query);
            $count=mysqli_num_rows($result);
			if($row=mysqli_fetch_array($result))
			{
		?>
    
	<table>
    		<form method="post" action="">
    	<tr>
        	<th>ID</th>
            <td><input type="text" name="uname" value="<?php echo $row['user_id']; ?>" /></td>
        </tr>
        <tr>
        	<th>First Name</th>
            <td><input type="text" name="fname" value="<?php echo $row['fName']; ?>"/></td>
        </tr>
        <tr>
        	<th>Last Name</th>
            <td><input type="text" name="lname" value="<?php echo $row['lName']; ?>" /></td>
        </tr>
        <tr>
        	<th>NIC</th>
            <td><input type="text" name="nic" value="<?php echo $row['NIC']; ?>" /></td>
        </tr>
        <tr>
        	<th>Telephone Number</th>
            <td><input type="text" name="telno" value="<?php echo $row['TelNo']; ?>" /></td>
        </tr>
        <tr>
        	<th>Job Role</th>
            <td><input type="text" name="prv" value="<?php echo $row['privilege']; ?>" /></td>
        </tr>
        <tr>
        	<th>Email</th>
            <td><input type="text" name="mail" value="<?php echo $row['email']; ?>" /></td>
        </tr>
        <tr>
            <th>Address Line 1</th>
            <td><input type="text" name="add1" value="<?php echo $row['address1']; ?>" /></td>
        </tr>
        <tr>
            <th>Address Line 2</th>
            <td><input type="text" name="add2" value="<?php echo $row['address2']; ?>" /></td>
        </tr>
        <tr>
            <th>Address Line 3</th>
            <td><input type="text" name="add3" value="<?php echo $row['address3']; ?>" /></td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td><input type="text" name="dob" value="<?php echo $row['dob']; ?>" /></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="text" name="psw" value="<?php echo $row['password']; ?>" /></td>
        </tr>
        <?php
			}
		?>
        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="delete" value="Delete" onclick="Location:'admin.php'" />
            
            </td>
        </tr>
        	</form>
    </table></center>
	</div>
        <?php

        if (isset($_POST['delete'])) {

            $id = $_POST['uname'];

          $query = "DELETE*FROM users WHERE user_id=$id";
          $result = mysqli_query($connection,$query);
          $result;
          echo $message6;
          //header("Location:admin.php");
        }
       
    ?>

</body>
</html>