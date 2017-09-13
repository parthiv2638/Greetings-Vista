 <?php
include_once('dbConnect.php');

class clsTempcart
{
private $_Tempcart_Id;
private $_Product_Name;
private $_Side_Description;
private $_Size_Description;
private $_Paper_Description;
private $_Group_Name;
private $_Data_File;
private $_Logo_File;
private $_Other_File;
private $_Rate;
private $_Quantity;
private $_Rateintoquantity;
private $_Session_Id;
private $_Template_Name;
private $_Template_Img;
private $_Product_Img;





public function getTempcart_Id()
{
return $this->_Tempcart_Id;
}

public function setTempcart_Id($tid)
{
$this->_Tempcart_Id=$pid;
}

public function getProduct_Name()
{
return $this->_Product_Name;
}

public function setProduct_Name($pname)
{
$this->_Product_Name=$pname;
}

public function getSide_Description()
{
return $this->_Side_Description;
}

public function setSide_Description($sd)
{
$this->_Side_Description=$sd;
}

public function getSize_Description()
{
return $this->_Size_Description;
}

public function setSize_Description($sd)
{
$this->_Size_Description=$sd;
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

public function getSession_Id()
{
return $this->_Session_Id;
}

public function setSession_Id($sid)
{
$this->_Session_Id=$sid;
}

public function getTemplate_Name()
{
return $this->_Template_Name;
}

public function setTemplate_Name($tname)
{
$this->_Template_Name=$tname;
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



function insert_rec(clsTempcart $p1)
{
$str="Insert into tempcart(Product_Name,Side_Description,Size_Description,Paper_Description,Group_Name,Data_File,Logo_File,Rate,Quantity,Rateintoquantity,Session_Id,Template_Name,Template_Img,Product_Img) values('".$p1->getProduct_Name()."','".$p1->getSide_Description()."','".$p1->getSize_Description()."','".$p1->getPaper_Description()."','".$p1->getGroup_Name()."','".$p1->getData_File()."','".$p1->getLogo_File()."',".$p1->getRate().",".$p1->getQuantity().",".$p1->getRateintoquantity().",'".$p1->getSession_Id()."','".$p1->getTemplate_Name()."','".$p1->getTemplate_Img()."','".$p1->getProduct_Img()."')";
//echo $pdt->getIsdisplay();
echo $str;
mysql_query($str);
}

function update_rec(clsTempcart $p1)
{
$str="Update product set Product_Name='".$p1->getProduct_Name()."', Side_Description='".$p1->getSide_Description()."', Size_Description='".$p1->getSize_Description()."',Paper_Description='".$p1->getPaper_Description()."',Group_Name='".$p1->getGroup_Name()."',Data_File='".$p1->getData_File()."',Logo_File='".$p1->getLogo_File()."',Other_File='".$p1->getOther_File()."',Rate=".$p1->getRate().",Quantity=".$p1->getQuantity().",Rateintoquantity=".$p1->getRateintoquantity().",Session_Id=".$p1->getSession_Id().",Template_Name='".$p1->getTemplate_Name()."', Template_Img='".$p1->getTemplate_Img()."',Product_Img='".$p1->getProduct_Img()."' where Tempcart_Id=".$pdt->getTempcart_Id();
mysql_query($str);
echo $str;
}

function delete_rec(clsTempcart $pdt)
{
$str="Delete from tempcart where Tempcart_Id=".$pdt->getTempcart_Id();
mysql_query($str);
}

function select_rec($Session_Id)
{
	$str="Select product_name,side_description,size_description,paper_description,group_name,data_file,logo_file,rate,quantity,rateintoquantity,session_id,template_name,template_img,product_img from tempcart where Session_Id='".$Session_Id."'";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}



function select_rec1($Session_Id)
{
	$str="Select product_name,side_description,size_description,paper_description,group_name,data_file,logo_file,other_file,rate,quantity,rateintoquantity,session_id,template_name,template_img,product_img from tempcart where Session_Id='".$Session_Id."'";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_whererec($Tempcart_Id)
{
	$strquery="Select * from tempcart where Tempcart=".$Tempcart_Id;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}

function select_seson($Sid)
{
	$strquery="Select * from tempcart where Sid='".$Sid."'";
	$SelectRec=mysql_query($strquery);
	//echo $strquery;
	return $SelectRec;
}




}
?>
