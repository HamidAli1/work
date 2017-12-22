<html> 
<head>

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

</head>
 <body>

 <form action="insert" method="post">
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>

E-mail: <input type="text" name="email"><br>
Address: <input type="text" name="address"><br>

<select name='sid'>

<?php

   
            while($row = $result->fetch_assoc())
            {
                $id = $row['cid'];
                $cname = $row['cname']; 

 ?>

                  <option value="<?php echo $id ?>"><?php echo $row['cname'] ?></option>
<?php             
                
            }

?>

</select>>



<input type="submit"  class="button button4" name='good'>
</form>
 </body>
 </html>
 
