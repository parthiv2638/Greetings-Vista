<?php
include_once('dbConnect.php');

class clsGroup
{
private $_Group_Id;
private $_Group_Name;



public function getGroup_Id()
{
return $this->_Group_Id;
}

public function setGroup_Id($gid)
{
$this->_Group_Id=$gid;
}

public function getGroup_Name()
{
return $this->_Group_Name;
}

public function setGroup_Name($gn)
{
$this->_Group_Name=$gn;
}



function insert_rec(clsGroup $s1)
{
$str="Insert into groups(Group_Name) values ('".$s1->getGroup_Name()."')";
mysql_query($str);
}


function update_rec(clsGroup $s1)
{
$str="Update groups set Group_Name='".$s1->getGroup_Name()."' where Group_Id=".$s1->getGroup_Id();
mysql_query($str);
}

function delete_rec(clsGroup $s1)
{
$str="Delete from groups where Group_Id=".$s1->getGroup_Id();
mysql_query($str);
}


function select_rec()
{
	$str="Select * from groups";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_whererec($Group_Id)
{
	$strquery="Select * from groups where Group_Id=".$Group_Id;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}
}
?>
