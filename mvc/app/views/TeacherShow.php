<html> 
 <title>HTML with PHP</title>
 <body>
 <table BORDER="5" >



<TR>
      <TH >
         <H><BR>Teacher</H>
      </TH>
   </TR>
      <TH>Firstname</TH>
      <TH>Lastname</TH>
       <TH>Email</TH>
       <TH>Address</TH>
        <TH>Action</TH>
 <?php

 		if ($result->num_rows > 0)
		 {
  
 			while($row = $result->fetch_assoc())
    		{
				$idd=$row["id"];
?> 			
 			
 			
  			<tr>

    			<td><?php echo $row["firstname"]  ?></td>
   				<td><?php echo   $row["lastname"]     ?></td> 
    			<td><?php  echo $row["email"]     ?></td>
    			<td><?php  echo $row["address"]     ?></td>
    			<td align='center'><form method="POST">
    			<input type="hidden" name="hid" value="<?php echo $idd ?>">
    			<input type=submit  value="Edit" formaction="edit"   style="width:100%"></form></td>

 			</tr>
 


  <?php      		
        		
    		 }
	   	} 
 
?>




</table>
 
 </body>
 </html>