<?php
session_start();
include_once("head.php");
include_once("menu.php");
include_once("clsProduct.php");
include_once("clsSide_Master.php");
include_once("clsSize_Master.php");
include_once("clsPaper_Type.php");
include_once("clsTempcart.php");
include_once("clsProductTemplate.php");
include_once("clsOrder.php");
include_once("clsOrderDetails.php");
$obj=new clsTempcart();


$x="";
$No="";
$PName="";
$Side_Description="";
$Size_Description="";
$Paper_Description="";
$Group_Name="";
$Data_File="";
$Logo_File="";
$Other_File="";
$Rate="";
$Quantity="";
$Rateintoquantity="";
$S_Id="";
$TName="";
$PTImg="";
$PImg="";
$maxId="";


//
//if(isset($_GET["Id"]))
//{
//$No=$_GET["Id"];
//$sel=$obj->select_whererec($No);
//$row1=mysql_fetch_array($sel); 
//$PName=$row[1];
//$Side_Description=$row[2];
//$Size_Description=$row[3];
//$Paper_Description=$row[4];
//$Group_Name=$row[5];
//$Data_File=$row[6];
//$Logo_File=$row[7];
//
//$Rate=$row[9];
//$Quantity=$row[10];
//$Rateintoquantity=$row[11];
//$Session_Id=$row[12];
//$TName=$row[13];
//$PTImg=$row[14];
//$PImg=$row[15];
//}
//

	
if(isset($_POST["btnOrder"]))
{
$objOrder=new clsOrder();
$objOrderDet=new clsOrderDetails();
$x=$_SESSION['uname1'];
//echo "<h1>user == ".$x."</h1>";
$objOrder->setC_UName($x);
$objOrder->setOrder_Date(date("d-m-y"));
$objOrder->setOrder_StatusId(1);
$objOrder->insert_rec($objOrder);



$row=$objOrderDet->getMaxId();
$Id=mysql_fetch_array($row);
$maxId=$Id[0];
//echo $maxId;


//while($row=mysql_fetch_array($maxId))
//$obj->setOrder_Id('$row[0]');
$result=$objOrderDet->select_seson(session_id());

while($row=mysql_fetch_array($result))
{
$objOrderDet->setOrder_Id($maxId);
$objOrderDet->setProduct_Name($row[1]);
$objOrderDet->setTemplate_Name($row[13]);
$objOrderDet->setSize_Description($row[3]);
$objOrderDet->setSide_Description($row[2]);
$objOrderDet->setPaper_Description($row[4]);
$objOrderDet->setGroup_Name($row[5]);
$objOrderDet->setRate($row[9]);
$objOrderDet->setQuantity($row[10]);
$objOrderDet->setRateintoquantity($row[11]);
$objOrderDet->setTemplate_Img($row[14]);
$objOrderDet->setProduct_Img($row[15]);
$objOrderDet->setData_File($row[6]);
$objOrderDet->setLogo_File($row[7]);
$objOrderDet->setOther_File($row[8]);
//$sessionid=session_id();
//$obj2->setSession_Id($sessionid);
$objOrderDet->insert_rec($objOrderDet);
header('location:welcome.php');
}
}
?>


		
<?php
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><td>Product</td><td>Side</td><td>Size</td><td>Paper</td><td>Group Name</td><td>Data</td><td>Logo</td><td>Rate</td><td>Quantity</td><td>Total</td><td>Session<td>Template Name</td><td>Template Img</td><td>Product Img</td></tr>";
$x="";
$sid=session_id();
$result=$obj->select_rec($sid);
while($row=mysql_fetch_array($result))
{
$x=$x+$row[9];
$str.="<tr><td>".$row[0]."</td><td>".$row[1] ."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td><img src='../uploadimg/".$row[5]."' height='100' width='100'></td><td>"."</td><td><img src='../uploadimg/".$row[6]."' height='100' width='100'>"."</td><td>".$row[7]."</td><td>"."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td><td><img src='../uploadimg/".$row[12]."' height='100' width='100'></td><td>"."</td><td><img src='../uploadimg/".$row[13]."' height='100' width='100'></td></tr>";
}
$str.="</table>";
echo "$str";

$str1="<table  class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=100 width=100> <tr><th>Total</th> <td>".$x." </td></tr></table>";
echo "$str1";
?>




<div id="main" role="main">
          <div class="block">
   		  <div class="clearfix">
		  <div class="grid-content overflow">
		  
<form name="frm1" method="post" enctype="multipart/form-data">
<table class="table table-bordered table-mod-2">
					<tr>
					<td>
					<input type="submit" src="login.php" name="btnOrder" value="Order"/>
					</td>
		</tr>
		</table>
		</form>
	</div>
	</div>
	</div>
	</div>
<?php
include_once("footer.php");
?>