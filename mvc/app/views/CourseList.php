<html> 
 <title>Course Table</title>
 

<style>
table {
    width:50%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
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
 <table BORDER="5" id="t01">



<TR>
      <TH >
         <H1>Courses</H1>
      </TH>
   </TR>
      <TH>Course_name</TH>
        <TH>Action</TH>
 <?php

 		if ($result->num_rows > 0)
		 {
  
 			while($row = $result->fetch_assoc())
    		{
				$idd=$row["cid"];
?> 			
 			
 			
  			<tr>

    			<td><?php echo $row["cname"]  ?></td>
   				
    			<td align='center'><form method="POST">
    			<input type="hidden" name="hid" value="<?php echo $idd ?>">
    			<input type=submit   class="button button4" value="Edit" formaction="edit"   style="width:100%"></form></td>

 			</tr>
 


  <?php      		
        		
    		 }
	   	} 
 
?>




</table>
 
 </body>
 </html>