<?php
include_once('dbConnect.php');

class clsSide_Master
{
private $_Side_Id;
private $_Side_Description;



public function getSide_Id()
{
return $this->_Side_Id;
}

public function setSide_Id($sid)
{
$this->_Side_Id=$sid;
}

public function getSide_Description()
{
return $this->_Side_Description;
}

public function setSide_Description($sd)
{
$this->_Side_Description=$sd;
}



function insert_rec(clsSide_Master $s1)
{
$str="Insert into side_master(Side_Description) values ('".$s1->getSide_Description()."')";
mysql_query($str);
}


function update_rec(clsSide_Master $s1)
{
$str="Update side_master set Side_Description='".$s1->getSide_Description()."' where Side_Id=".$s1->getSide_Id();
mysql_query($str);
}

function delete_rec(clsSide_Master $s1)
{
$str="Delete from side_master where Side_Id=".$s1->getSide_Id();
mysql_query($str);
}


function select_rec()
{
	$str="Select * from side_master";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_whererec($Side_Id)
{
	$strquery="Select * from side_master where Side_Id=".$Side_Id;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}
}
?>
