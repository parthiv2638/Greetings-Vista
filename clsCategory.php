<?php
include_once('dbConnect.php');

class clsCategory
{
private $_Category_Id;
private $_Category_Name;
private $_Category_Img;


public function getCategory_Id()
{
return $this->_Category_Id;
}

public function setCategory_Id($cid)
{
$this->_Category_Id=$cid;
}

public function getCategory_Name()
{
return $this->_Category_Name;
}

public function setCategory_Name($cn)
{
$this->_Category_Name=$cn;
}



public function getCategory_Img()
{
return $this->_Category_Img;
}

public function setCategory_Img($cimg)
{
$this->_Category_Img=$cimg;
}



function insert_rec(clsCategory $s1)
{
$str="Insert into category(Category_Name,Category_Img) values ('".$s1->getCategory_Name()."','".$s1->getCategory_Img()."')";
mysql_query($str);
}



function update_rec(clsCategory $s1)
{
$str="Update category set Category_Name='".$s1->getCategory_Name()."' , Category_Img='".$s1->getCategory_Img()."'  where Category_Id=".$s1->getCategory_Id();
//echo $str;
mysql_query($str);
}

function delete_rec(clsCategory $s1)
{
$str="Delete from category where Category_Id=".$s1->getCategory_Id();
mysql_query($str);
}


function select_rec()
{
	$str="Select * from category";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_whererec($Category_Id)
{
	$strquery="Select * from category where Category_Id=".$Category_Id;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}
}
?>
