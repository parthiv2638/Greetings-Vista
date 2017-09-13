<?php
include_once('dbConnect.php');
class clsOrder
{
private $_Order_Id;
private $_C_UName;
private $_Order_Date;
private $_Order_StatusId;


public function getOrder_Id()
{
return $this->_Order_Id;
}

public function setOrder_Id($oid)
{
$this->_Order_Id=$oid;
}

public function getC_UName()
{
return $this->_C_UName;
}

public function setC_UName($cname)
{
$this->_C_UName=$cname;
}



public function getOrder_Date()
{
return $this->_Order_Date;
}
public function setOrder_Date($odate)
{
$this->_Order_Id=$odate;
}

public function getOrder_StatusId()
{
return $this->_Order_StatusId;
}

public function setOrder_StatusId($ostatusid)
{
$this->_Order_StatusId=$ostatusid;
}

function insert_rec(clsOrder $s1)
{
$str="Insert into orders(C_UName,Order_Date,Order_StatusId) values ('".$s1->getC_UName()."',".$s1->getOrder_Date().",".$s1->getOrder_StatusId().")";
//echo $str;
mysql_query($str);
}
}
?>