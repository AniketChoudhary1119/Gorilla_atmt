
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo"database not connected";
}

	$con_string=mysql_select_db("gorillaatmt",$con);

?>