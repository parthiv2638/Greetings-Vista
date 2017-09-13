 <?php
include_once('dbConnect.php');

class clsProductTemplate
{
private $_Template_Id;
private $_Template_Name;
private $_Template_Img;
private $_Product_Id;
private $_Group_Id;




public function getTemplate_Id()
{
return $this->_Template_Id;
}

public function setTemplate_Id($tid)
{
$this->_Template_Id=$tid;
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



public function getProduct_Id()
{
return $this->_Product_Id;
}

public function setProduct_Id($pid)
{
$this->_Product_Id=$pid;
}




public function getGroup_Id()
{
return $this->_Group_Id;
}

public function setGroup_Id($gid)
{
$this->_Group_Id=$gid;
}




function insert_rec(clsProductTemplate $p1)
{
$str="Insert into product_template(Template_Name,Template_Img,Product_Id,Group_Id) values('".$p1->getTemplate_Name()."','".$p1->getTemplate_Img()."',".$p1->getProduct_Id().",".$p1->getGroup_Id().")";
//echo $pdt->getIsdisplay();
mysql_query($str);
echo $str;
}

function update_rec(clsProductTemplate $p1)
{
$str="Update product_template set Template_Name='".$p1->getTemplate_Name()."', Template_Img='".$p1->getTemplate_Img()."',Product_Id=".$p1->getProduct_Id().", Group_Id=".$p1->getGroup_Id()." where Template_Id=".$p1->getTemplate_Id();
mysql_query($str);
}

function delete_rec(clsProductTemplate $pdt)
{
$str="Delete from product_template where Template_Id=".$pdt->getTemplate_Id();
mysql_query($str);
}

function select_rec()
{
	//$str="select product_id,Product_Name,Side_Description,Size_Description,Category_Name,Paper_Description,Rate,Product_Img
//from product,side_master,size_master,category,paper_type
//where product.side_id=side_master.side_id and product.size_id=size_master.size_id
//and product.category_id=category.category_id and product.paper_typeid= paper_type.paper_typeid";
	$str="Select Template_Id,Template_Name,Template_Img,Product_Name,Group_Name from product_template,product,groups where product_template.product_id=product.product_id and product_template.group_id=groups.group_id";
	//$str="select * from product_template";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_whererec($Template_Id)
{
	$strquery="Select * from product_template where Template_Id=".$Template_Id;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}




function select_wherereccid($Group_Id,$pid)
{ 	
	$strquery="Select Template_Id,Template_Name,Template_Img,Product_Name,Group_Name from product_template,product,groups where product_template.Product_Id=product.Product_Id and product_template.Group_id=Groups.Group_Id and Groups.Group_Id=".$Group_Id." and product.Product_Id = ".$pid;
	//$strquery="Select Template_Id,Template_Name,Template_Img,Product_Name,Group_Name from product_template,groups where  product_template.Group_id=Groups.Group_Id and Groups.Group_Id=".$Group_Id;
	//echo $strquery;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}



function select_wherereppidrec($Group_Id,$pid)
{
	$str="Select Template_Id,Template_Name,Template_Img,Product_Name,Group_Name from product_template,product,groups where product_template.Product_Id=product.Product_Id and product_template.Group_id=Groups.Group_Id and Groups.Group_Id=".$Group_Id." and product.Product_Id = ".$pid;
	$SelectRec=mysql_query($str);
	return $SelectRec;
}



function select_whereccid1($Template_Id)
{
	$str="Select Template_Id,Template_Name,Template_Img from product_template where Template_Id=".$Template_Id;
	$SelectRec=mysql_query($str);
	return $SelectRec;
}



function select_gettemplatename($Tid)
{
	$strquery="Select Template_Name from product_template where Template_Id=".$Tid;
	$SelectRec=mysql_query($strquery);
	$row=mysql_fetch_array($SelectRec);
	return $row[0];
}


function select_gettemplateimg($Tid)
{
	$strquery="Select Template_Img from product_template where Template_Id=".$Tid;
	$SelectRec=mysql_query($strquery);
	$row=mysql_fetch_array($SelectRec);
	return $row[0];
}




}
?>
