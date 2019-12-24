<?php
   //connection
   $con = mysqli_connect('localhost','root','');
   //databas
   mysqli_select_db($con,'db_cmh');
   //update
   $sql =  " update tb_patient set p_id = '$_POST[p_id]',p_name = '$_POST[p_name]',p_sex = '$_POST[p_sex]',p_age= '$_POST[p_age]',p_address= '$_POST[p_address]',p_contact= '$_POST[p_contact]',p_case= '$_POST[p_case]',p_admit= '$_POST[p_admit]',p_release= '$_POST[p_release]',p_condition= '$_POST[p_condition]' where p_id = '$_POST[p_id]'" ;
   //execute
   if(mysqli_query($con,$sql))
   header("refresh:1; url=patient_inf.php");
   else
	   echo "Not update";
   ?>