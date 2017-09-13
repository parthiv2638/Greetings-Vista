<?php
include_once('dbConnect.php');

class clsAdmin
{
private $_A_UName;
private $_A_FName;
private $_A_LName;
private $_A_Address;
private $_City_Id;
private $_A_Contactno;
private $_A_EmailId;
private $_Gender;
private $_A_DOB;
private $_A_Img;
private $_A_Pwd;


public function getA_UName()
{
return $this->_A_UName;
}

public function setA_UName($aun)
{
$this->_A_UName=$aun;
}

public function getA_FName()
{
return $this->_A_FName;
}

public function setA_FName($afn)
{
$this->_A_FName=$afn;
}



public function getA_LName()
{
return $this->_A_LName;
}

public function setA_LName($aln)
{
$this->_A_LName=$aln;
}



public function getA_Address()
{
return $this->_A_Address;
}

public function setA_Address($add)
{
$this->_A_Address=$add;
}



public function getCity_Id()
{
return $this->_City_Id;
}

public function setCity_Id($cid)
{
$this->_City_Id=$cid;
}



public function getA_Contactno()
{
return $this->_A_Contactno;
}

public function setA_Contactno($acn)
{
$this->_A_Contactno=$acn;
}



public function getA_EmailId()
{
return $this->_A_EmailId;
}

public function setA_EmailId($aei)
{
$this->_A_EmailId=$aei;
}



public function getGender()
{
return $this->_Gender;
}

public function setGender($gen)
{
$this->_Gender=$gen;
}



public function getA_DOB()
{
return $this->_A_DOB;
}

public function setA_DOB($adob)
{
$this->_A_DOB=$adob;
}


public function getA_Img()
{
return $this->_A_Img;
}

public function setA_Img($aimg)
{
$this->_A_Img=$aimg;
}



public function getA_Pwd()
{
return $this->_A_Pwd;
}

public function setA_Pwd($apwd)
{
$this->_A_Pwd=$apwd;
}




function insert_rec(clsAdmin $s1)
{
$str="Insert into admin(A_UName,A_FName,A_LName,A_Address,City_Id,A_Contactno,A_EmailId,Gender,A_DOB,A_Img,A_Pwd) values('".$s1->getA_UName()."','".$s1->getA_FName()."','".$s1->getA_LName()."','".$s1->getA_Address()."',".$s1->getCity_Id().",'".$s1->getA_Contactno()."','".$s1->getA_EmailId()."',".$s1->getGender().",".$s1->getA_DOB().",'".$s1->getA_Img()."','".$s1->getA_Pwd()."')";
mysql_query($str);
}



function update_rec(clsAdmin $s1)
{
$str="Update admin set A_FName='".$s1->getA_FName().'" A_LName="'.$s1->getA_LName().'" A_Address="'.$s1->getA_Address()." City_Id= ".$s1->getCity_Id().'" A_Contactno="'.$s1->getA_Contactno().'" A_EmailId="'.$s1->getA_EmailId()." Gender= ".$s1->getGender()." A_DOB = ". $s1->getA_DOB().'" A_Img ="'. $s1->getA_Img().'" A_Pwd="'.$s1->getA_Pwd().'" where A_UName="'.$s1->getA_UName();
mysql_query($str);
}

function delete_rec(clsAdmin $s1)
{
$str="Delete from admin where A_UName=".$s1->getA_UName();
mysql_query($str);
}


function select_rec()
{
	$str="Select * from admin";
	$SelectRec=mysql_query($str);
	return $SelectRec;
}

function select_where_rec($A_UName)
{
	$strquery="Select * from admin where A_UName=".$A_UName;
	$SelectRec=mysql_query($strquery);
	return $SelectRec;
}


function select_rec_login($Email,$Pwd)
{
		$str="Select * from admin where A_EmailId='".$Email."' and A_Pwd='". $Pwd ."'";
		//echo $str;
		$SelectRec=mysql_query($str);
		$ans1=mysql_num_rows($SelectRec);
		$col=mysql_fetch_array($SelectRec);
		$xyz=$col[6];
  		if($xyz==1)
		{
			return 1;
		}
		else
		{
			return 0;
		}
   }
}

?>
