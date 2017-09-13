 <?php
include_once('dbConnect.php');

class clsOrderDetails
{
private $_Order_DetailId;
private $_Order_Id;
private $_Product_Name;
private $_Template_Name;
private $_Size_Description;
private $_Side_Description;
private $_Paper_Description;
private $_Group_Name;
private $_Rate;
private $_Quantity;
private $_Rateintoquantity;
private $_Template_Img;
private $_Product_Img;
private $_Data_File;
private $_Logo_File;
private $_Other_File;










public function getOrder_DetailId()
{
return $this->_Order_DetailId;
}

public function setOrder_DetailId($oid)
{
$this->_Order_DetailId=$oid;
}



public function getOrder_Id()
{
return $this->_Order_Id;
}

public function setOrder_Id($oid)
{
$this->_Order_Id=$oid;
}



public function getProduct_Name()
{
return $this->_Product_Name;
}

public function setProduct_Name($pname)
{
$this->_Product_Name=$pname;
}



public function getTemplate_Name()
{
return $this->_Template_Name;
}

public function setTemplate_Name($tname)
{
$this->_Template_Name=$tname;
}



public function getSize_Description()
{
return $this->_Size_Description;
}

public function setSize_Description($sd)
{
$this->_Size_Description=$sd;
}




public function getSide_Description()
{
return $this->_Side_Description;
}

public function setSide_Description($sd)
{
$this->_Side_Description=$sd;
}

public function getPaper_Description()
{
return $this->_Paper_Description;
}

public function setPaper_Description($pd)
{
$this->_Paper_Description=$pd;
}

public function getGroup_Name()
{
return $this->_Group_Name;
}

public function setGroup_Name($gn)
{
$this->_Group_Name=$gn;
}


public function getRate()
{
return $this->_Rate;
}

public function setRate($rate)
{
$this->_Rate=$rate;
}

public function getQuantity()
{
return $this->_Quantity;
}

public function setQuantity($qty)
{
$this->_Quantity=$qty;
}



public function getRateintoquantity()
{
return $this->_Rateintoquantity;
}

public function setRateintoquantity($rqty)
{
$this->_Rateintoquantity=$rqty;
}



public function getTemplate_Img()
{
return $this->_Template_Img;
}

public function setTemplate_Img($timg)
{
$this->_Template_Img=$timg;
}


public function getProduct_Img()
{
return $this->_Product_Img;
}

public function setProduct_Img($pimg)
{
$this->_Product_Img=$pimg;
}



public function getData_File()
{
return $this->_Data_File;
}

public function setData_File($df)
{
$this->_Data_File=$df;
}


public function getLogo_File()
{
return $this->_Logo_File;
}

public function setLogo_File($lf)
{
$this->_Logo_File=$lf;
}


public function getOther_File()
{
return $this->_Other_File;
}

public function setOther_File($of)
{
$this->_Other_File=$of;
}








function insert_rec(clsOrderDetails $o1)
{
$str="Insert into order_detail(Order_Id,Product_Name,Template_Name,Size_Description,Side_Description,Paper_Description,Group_Name,Rate,Quantity,Rateintoquantity,Template_Img,Product_Img,Data_File,Logo_File,Other_File) values(".$o1->getOrder_Id().",'".$o1->getProduct_Name()."','".$o1->getTemplate_Name()."','".$o1->getSize_Description()."','".$o1->getSide_Description()."','".$o1->getPaper_Description()."','".$o1->getGroup_Name()."',".$o1->getRate().",".$o1->getQuantity().",".$o1->getRateintoquantity().",'".$o1->getTemplate_Img()."','".$o1->getProduct_Img()."','".$o1->getData_File()."','".$o1->getLogo_File()."','".$o1->getOther_File()."')";
//echo $str;
mysql_query($str);
}


function select_rec1()
{
	$str="select C_UName, Product_Name, Template_Name, Size_Description, Side_Description, Paper_Description, Group_Name, Rate, Quantity, Rateintoquantity, Product_Img, Data_File, Logo_File, Other_File
from orders, order_detail";
	$SelectRec=mysql_query($str);
	//return $SelectRec;
}



function select_seson($Sid)
{
	$strquery="Select * from tempcart where Session_Id='".$Sid."'";
	$SelectRec=mysql_query($strquery);
	//echo $strquery;
	return $SelectRec;
}


function getMaxId()
{
	$strquery="Select max(Order_Id) from orders";
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}
}
?>