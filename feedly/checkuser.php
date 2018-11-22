<?php
extract($_GET);
$filearray=file("nameVal.txt");
$f=1;
foreach ($filearray as $i)
{
	$nameval=explode(";",$i);
	if ($nameval[0]==$usn)
	{
		echo "Not Available";
		$f=0;
	}

}  
if ($f==1)
{
	echo"Available";
}
?>