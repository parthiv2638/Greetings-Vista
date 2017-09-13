<?php
include_once('dbConnect.php');

class clsCustomer
{
private $_C_UName;
private $_C_FName;
private $_C_LName;
private $_C_Address;
private $_City_Id;
private $_C_Contactno;
private $_C_EmailId;
private $_Gender;
private $_C_DOB;
private $_C_Img;
private $_C_Pwd;
private $_C_DOJ;


public function getC_UName()
{
return $this->_C_UName;
}

public function setC_UName($cun)
{
$this->_A_CName=$cun;
}

public function getC_FName()
{
return $this->_C_FName;
}

public function setC_FName($cfn)
{
$this->_C_FName=$cfn;
}



public function getC_LName()
{
return $this->_C_LName;
}

public function setC_LName($cln)
{
$this->_C_LName=$cln;
}



public function getC_Address()
{
return $this->_C_Address;
}

public function setC_Address($add)
{
$this->_C_Address=$add;
}



public function getCity_Id()
{
return $this->_City_Id;
}

public function setCity_Id($cid)
{
$this->_City_Id=$cid;
}



public function getC_Contactno()
{
return $this->_C_Contactno;
}

public function setC_Contactno($ccn)
{
$this->_C_Contactno=$ccn;
}



public function getC_EmailId()
{
return $this->_C_EmailId;
}

public function setC_EmailId($cei)
{
$this->_C_EmailId=$cei;
}



public function getGender()
{
return $this->_Gender;
}

public function setGender($gen)
{
$this->_Gender=$gen;
}



public function getC_DOB()
{
return $this->_C_DOB;
}

public function setC_DOB($cdob)
{
$this->_C_DOB=$cdob;
}


public function getC_Img()
{
return $this->_C_Img;
}

public function setC_Img($cimg)
{
$this->_C_Img=$cimg;
}



public function getC_Pwd()
{
return $this->_C_Pwd;
}

public function setC_Pwd($cpwd)
{
$this->_C_Pwd=$cpwd;
}




public function getC_DOJ()
{
return $this->_C_DOJ;
}

public function setC_DOJ($cdoj)
{
$this->_C_DOJ=$cdoj;
}


function insert_rec(clsCustomer $s1)
{
$str="Insert into customer(C_UName,C_FName,C_LName,C_Address,City_Id,C_Contactno,C_EmailId,Gender,C_DOB,C_Img,C_Pwd,C_DOJ) values('".$s1->getC_UName()."','".$s1->getC_FName()."','".$s1->getC_LName()."','".$s1->getC_Address()."',".$s1->getCity_Id().",'".$s1->getC_Contactno()."','".$s1->getC_EmailId()."',".$s1->getGender().",".$s1->getC_DOB().",'".$s1->getC_Img()."','".$s1->getC_Pwd()."',".$s1->getC_DOJ().")";
mysql_query($str);
}



function update_rec(clsCustomer $s1)
{
$str="Update customer set C_FName='".$s1->getC_FName().'" C_LName="'.$s1->getC_LName().'" C_Address="'.$s1->getC_Address()." City_Id= ".$s1->getCity_Id().'" C_Contactno="'.$s1->getC_Contactno().'" C_EmailId="'.$s1->getC_EmailId()." Gender= ".$s1->getGender()." C_DOB = ". $s1->getC_DOB().'" C_Img ="'. $s1->getC_Img().'" C_Pwd="'.$s1->getC_Pwd(). " C_DOJ=".$s1->getC_DOJ().'" where C_UName="'.$s1->getC_UName();
mysql_query($str);
}

function delete_rec(clsCustomer $s1)
{
$str="Delete from customer where C_UName=".$s1->getC_UName();
mysql_query($str);
}


function select_rec()
{
	$str="Select * from customer";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}




function select_whererec($Email)
{
	$strquery="Select * from customer where C_EmailId='".$Email."'";
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}


function select_rec_login($Email,$Pwd){
		$str="Select * from customer where C_EmailId='".$Email."' and C_Pwd='". $Pwd ."'";
		$SelectRec=mysql_query($str);
		$ans1=mysql_num_rows($SelectRec);
		//echo $str;
		//$col=mysql_fetch_array($SelectRec);
//		$xyz=$col[6];
//echo $str;
  		if($ans1==1)
		{
			$row=mysql_fetch_array($SelectRec);
			return $row[0];

			//return 1;
		}
		else
		{
			return 0;
		}
   }
}
?>
