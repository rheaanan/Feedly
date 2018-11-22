<?php
extract($_GET);
$filearray=file("nameVal.txt");
$f=1;

foreach ($filearray as $i)
{
	
	$i=trim($i);
	$nameval=explode(";",$i);
	if ((strcmp($nameval[0],$usn)==0 )&& (strcmp($nameval[1],$pass)==0))
	{
		echo "User logging in";$f=0;
	}

}  
if ($f==1)
echo "Wrong Password or UserName";
?>
