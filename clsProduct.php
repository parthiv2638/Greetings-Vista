 <?php
include_once('dbConnect.php');

class clsProduct
{
private $_Product_Id;
private $_Product_Name;
private $_Side_Id;
private $_Size_Id;
private $_Category_Id;
private $_Paper_Typeid;
private $_Rate;
private $_Product_Img;


public function getProduct_Id()
{
return $this->_Product_Id;
}

public function setProduct_Id($pid)
{
$this->_Product_Id=$pid;
}

public function getProduct_Name()
{
return $this->_Product_Name;
}

public function setProduct_Name($pname)
{
$this->_Product_Name=$pname;
}

public function getSide_Id()
{
return $this->_Side_Id;
}

public function setSide_Id($sideid)
{
$this->_Side_Id=$sideid;
}


public function getSize_Id()
{
return $this->_Size_Id;
}

public function setSize_Id($sizeid)
{
$this->_Size_Id=$sizeid;
}



public function getCategory_Id()
{
return $this->_Category_Id;
}

public function setCategory_Id($cid)
{
$this->_Category_Id=$cid;
}



public function getPaper_TypeId()
{
return $this->_Paper_TypeId;
}

public function setPaper_TypeId($pid)
{
$this->_Paper_TypeId=$pid;
}


public function getRate()
{
return $this->_Rate;
}

public function setRate($prate)
{
$this->_Rate=$prate;
}



public function getProduct_Img()
{
return $this->_Product_Img;
}

public function setProduct_Img($pimg)
{
$this->_Product_Img=$pimg;
}



function insert_rec(clsProduct $p1)
{
$str="Insert into product(Product_Name,Side_Id,Size_Id,Category_Id,Paper_TypeId,Rate,Product_Img) values('".$p1->getProduct_Name()."',".$p1->getSide_Id().",".$p1->getSize_Id().",".$p1->getCategory_Id().",".$p1->getPaper_TypeId().",".$p1->getRate().",'".$p1->getProduct_Img()."')";
//echo $pdt->getIsdisplay();
echo $str;
mysql_query($str);
}

function update_rec(clsProduct $p1)
{
$str="Update product set Product_Name='".$p1->getProduct_Name()."', Side_Id=".$p1->getSide_Id().", Size_Id=".$p1->getSize_Id().", Category_Id=".$p1->getCategory_Id()." , Paper_TypeId=".$p1->getPaper_TypeId().", Rate=".$p1->getRate().", Product_Img='".$p1->getProduct_Img()."' where Product_Id=".$p1->getProduct_Id();
mysql_query($str);
echo $str;
}

function delete_rec(clsProduct $pdt)
{
$str="Delete from product where Product_Id=".$pdt->getProduct_Id();
mysql_query($str);
}

function select_rec()
{
	$str="select product_id,Product_Name,Side_Description,Size_Description,Category_Name,Paper_Description,Rate,Product_Img
from product,side_master,size_master,category,paper_type
where product.side_id=side_master.side_id and product.size_id=size_master.size_id
and product.category_id=category.category_id and product.paper_typeid= paper_type.paper_typeid";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_whererec($Product_Id)
{
	$strquery="Select * from product where Product_Id=".$Product_Id;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}

function select_wherereccid($Category_Id)
{ 	
	$strquery="Select product_id,Product_Name,Side_Description,Size_Description,Category_Name,Paper_Description,Rate,Product_Img
from product,side_master,size_master,category,paper_type
where product.side_id=side_master.side_id and product.size_id=size_master.size_id
and product.category_id=category.category_id and product.paper_typeid= paper_type.paper_typeid and Category.Category_Id=".$Category_Id;
	//echo $strquery;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}


function select_wherereppidrec($Product_Id)
{
	$str="select product_id,Product_Name,Side_Description,Size_Description,Category_Name,Paper_Description,Rate,Product_Img
from product,side_master,size_master,category,paper_type
where product.side_id=side_master.side_id and product.size_id=size_master.size_id
and product.category_id=category.category_id and product.paper_typeid= paper_type.paper_typeid and Product.Product_Id=".$Product_Id;
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_getsizename($Pid)
{
	$strquery="Select size_description from size_master,product where product.Size_Id= size_master.Size_Id and Product_Id=".$Pid;
	$SelectRec=mysql_query($strquery);
	$row=mysql_fetch_array($SelectRec);
	return $row[0];
}


function select_getsidename($Pid)
{
	$strquery="Select side_description from side_master,product where product.Side_Id= side_master.Side_Id and Product_Id=".$Pid;
	$SelectRec=mysql_query($strquery);
	$row=mysql_fetch_array($SelectRec);
	return $row[0];
}


function select_getpapername($Pid)
{
	$strquery="Select paper_description from paper_type,product where product.Paper_TypeId= paper_type.Paper_TypeId and Product_Id=".$Pid;
	$SelectRec=mysql_query($strquery);
	$row=mysql_fetch_array($SelectRec);
	return $row[0];
}


function select_getgroupname($Pid)
{
	$strquery="Select group_name from groups,product_template where product_template.Group_Id= groups.Group_Id and Template_Id=".$Pid;
	$SelectRec=mysql_query($strquery);
	$row=mysql_fetch_array($SelectRec);
	return $row[0];
}



function select_rate($Pid)
{
	$strquery="Select rate from product where Product_Id=".$Pid;
	$SelectRec=mysql_query($strquery);
	$row=mysql_fetch_array($SelectRec);
	return $row[0];
}


function select_img($Pid)
{
	$strquery="Select product_img from product where Product_Id=".$Pid;
	$SelectRec=mysql_query($strquery);
	$row=mysql_fetch_array($SelectRec);
	return $row[0];
}


function select_productname($Pid)
{
	$strquery="Select product_name from product where Product_Id=".$Pid;
	$SelectRec=mysql_query($strquery);
	$row=mysql_fetch_array($SelectRec);
	return $row[0];
}
}
?>
