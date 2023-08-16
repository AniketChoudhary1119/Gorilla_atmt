
<?php
include("config.php");
$date=date("y_m_d");
$name=$_POST["name"];        #a=name
$mobile=$_POST["mobile"];        #b=Mobile
$email=$_POST["email"];        # Email  # database name= login
$insert="insert into login(`id`,`name`,`mobile`,`email`,`date`)        
          values('Null','".$name."','".$mobile."','".$email."','".$date."')";
		  
if(!mysql_query($insert,$con))
{
	echo "not inserted";
}	

else
{
	echo"<script language='javascript'>
{
  alert(' Inserted Successfully.');	
   
}
</script>";
	echo"<meta http-equiv='REFRESH' content='0;url=index.html'>";
}	
?>		  