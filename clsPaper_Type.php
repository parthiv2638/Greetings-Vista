<?php
include_once('dbConnect.php');

class clsPaper_Type
{
private $_Paper_TypeId;
private $_Paper_Description;



public function getPaper_TypeId()
{
return $this->_Paper_TypeId;
}

public function setPaper_TypeId($pid)
{
$this->_Paper_TypeId=$pid;
}

public function getPaper_Description()
{
return $this->_Paper_Description;
}

public function setPaper_Description($pd)
{
$this->_Paper_Description=$pd;
}



function insert_rec(clsPaper_Type $s1)
{
$str="Insert into paper_type(Paper_Description) values ('".$s1->getPaper_Description()."')";
mysql_query($str);
}


function update_rec(clsPaper_Type $s1)
{
$str="Update paper_type set Paper_Description='".$s1->getPaper_Description()."' where Paper_TypeId=".$s1->getPaper_TypeId();
mysql_query($str);
}

function delete_rec(clsPaper_Type $s1)
{
$str="Delete from paper_type where Paper_TypeId=".$s1->getPaper_TypeId();
mysql_query($str);
}


function select_rec()
{
	$str="Select * from paper_type";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_whererec($Paper_TypeId)
{
	$strquery="Select * from paper_type where Paper_TypeId=".$Paper_TypeId;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}
}
?>
