<html> 
 <title>HTML with PHP</title>
 <body>
<?php

 		if ($result->num_rows > 0)
		 {
   		 
    		while($row = $result->fetch_assoc())
    		 {
    		 	$idd=$row["id"];
				$fn=$row["firstname"];
				$ln=$row["lastname"];
				$em=$row["email"];
				$r_d=$row["address"];
        		
    		 }
	   	} 
 
?>

 <form action="update" method="post">
 <input type="hidden" name="hid" value="<?php echo $idd ?>"><br>
First Name: <input type="text" name="fname" value="<?php echo $fn ?>"><br>
Last Name: <input type="text" name="lname" value="<?php echo $ln ?>"><br>

E-mail: <input type="text" name="email" value="<?php echo $em ?>"><br>
Address: <input type="text" name="address" value="<?php echo $r_d ?>"><br>

<input type="submit" value="Update" name='good'>
<input type="submit" value="Delete"  formaction="delete">
</form>
 </body>
 </html>
 
