<html> 
 <title>HTML with PHP</title>


<style>

input[type=text] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}



.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {font-size: 10px;}
.button2 {font-size: 12px;}
.button3 {font-size: 16px;}
.button4 {font-size: 20px;}
.button5 {font-size: 24px;}

</style>


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

<input type="submit" value="Update"  class="button button4" name='good'>
<input type="submit" value="Delete"   class="button button4" formaction="delete">
</form>
 </body>
 </html>
 
