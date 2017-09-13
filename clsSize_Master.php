<?php
include_once('dbConnect.php');

class clsSize_Master
{
private $_Size_Id;
private $_Size_Description;



public function getSize_Id()
{
return $this->_Size_Id;
}

public function setSize_Id($sid)
{
$this->_Size_Id=$sid;
}

public function getSize_Description()
{
return $this->_Size_Description;
}

public function setSize_Description($sd)
{
$this->_Size_Description=$sd;
}



function insert_rec(clsSize_Master $s1)
{
$str="Insert into size_master(Size_Description) values ('".$s1->getSize_Description()."')";
mysql_query($str);
}


function update_rec(clsSize_Master $s1)
{
$str="Update size_master set Size_Description='".$s1->getSize_Description()."' where Size_Id=".$s1->getSize_Id();
mysql_query($str);
}

function delete_rec(clsSize_Master $s1)
{
$str="Delete from size_master where Size_Id=".$s1->getSize_Id();
mysql_query($str);
}


function select_rec()
{
	$str="Select * from size_master";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_whererec($Size_Id)
{
	$strquery="Select * from size_master where Size_Id=".$Size_Id;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}
}
?>
