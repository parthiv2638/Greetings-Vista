<?php
include_once('dbConnect.php');

class clsCity
{
private $_City_Id;
private $_City_Name;



public function getCity_Id()
{
return $this->_City_Id;
}

public function setCity_Id($cid)
{
$this->_City_Id=$cid;
}

public function getCity_Name()
{
return $this->_City_Name;
}

public function setCity_Name($cn)
{
$this->_City_Name=$cn;
}



function insert_rec(clsCity $s1)
{
$str="Insert into city(City_Name) values ('".$s1->getCity_Name()."')";
mysql_query($str);
}


function update_rec(clsCity $s1)
{
$str="Update city set City_Name='".$s1->getCity_Name()."' where City_Id=".$s1->getCity_Id();
mysql_query($str);
}

function delete_rec(clsCity $s1)
{
$str="Delete from city where City_Id=".$s1->getCity_Id();
mysql_query($str);
}


function select_rec()
{
	$str="Select * from city";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_whererec($City_Id)
{
	$strquery="Select * from city where City_Id=".$City_Id;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}
}
?>
