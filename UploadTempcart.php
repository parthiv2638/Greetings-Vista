
<?php
session_start();
include_once("head.php");
include_once("menu.php");
include_once("clsProduct.php");
include_once("clsSide_Master.php");
include_once("clsSize_Master.php");
include_once("clsPaper_Type.php");
include_once("clsTempcart.php");
$obj=new clsTempcart();



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



if(isset($_GET["Id"]))
{
$No=$_GET["Id"];
$sel=$obj->select_whererec($No);
$row1=mysql_fetch_array($sel); 
$PName=$row[1];
$Side_Description=$row[2];
$Size_Description=$row[3];
$Paper_Description=$row[4];
$Group_Name=$row[5];
$Data_File=$row[6];
$Logo_File=$row[7];
$Other_File=$row[8];
$Rate=$row[9];
$Quantity=$row[10];
$Rateintoquantity=$row[11];
$Session_Id=$row[12];
$TName=$row[13];
$PTImg=$row[14];
$PImg=$row[15];
}



//
//$obj->setProduct_Name(($_SESSION['Pname']));
//$obj->setSide_Description(($_SESSION['SideDesc']));
//$obj->setSize_Description(($_SESSION['SizeDesc']));
//$obj->setPaper_Description(($_SESSION['PaperDesc']));
//$obj->setGroup_Name(($_SESSION['Gname']));
//$obj->setData_File(($_SESSION['Datafile']));
//$obj->setLogo_File(($_SESSION['Logofile']));
//$obj->setOther_File(($_SESSION['Otherfile']));
//$obj->setRate(($_SESSION['Rate']));
//$obj->setQuantity(($_SESSION['Quantity']));
//$obj->setRateintoquantity(($_SESSION['Rateintoquantity']));
//$sessionid=session_id();
//$obj->setSession_id("$Sessionid");
//$obj->setTemplate_Name(($_SESSION['Tname']));
//$obj->setTemplate_Img(($_SESSION['Timg']));
//$obj->setProduct_Img(($_SESSION['Pimg']));
//$obj->insert_rec($obj);
?>





<div id="main" role="main">
          <div class="block">
   		  <div class="clearfix">
		  <div class="grid-content overflow">
		  
<form name="frm1" method="post" enctype="multipart/form-data">
<table class="table table-bordered table-mod-2">
					<tr>
		</tr>
		</table>
		</div>
		</div>
		</div>
		</div>
</form>
		
           
					 

<?php
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><td>Product</td><td>Side</td><td>Size</td><td>Paper</td><td>Group Name</td><td>Data</td><td>Logo</td><td>Other</td><td>Rate</td><td>Quantity</td><td>Total</td><td>Session</td></tr>";
$sid=session_id();
$result=$obj->select_rec1($sid);
while($row=mysql_fetch_array($result))
{
$str.="<tr><td>".$row[0]."</td><td>".$row[1] ."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td><img src='../uploadimg/".$row[5]."' height='100' width='100'></td><td>"."</td><td><img src='../uploadimg/".$row[6]."' height='100' width='100'>"."</td><td><img src='../uploadimg/".$row[7]."' height='100' width='100'></td><td>"."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td><td><img src='../uploadimg/".$row[12]."' height='100' width='100'></td><td>"."</td><td><img src='../uploadimg/".$row[13]."' height='100' width='100'></td></tr>";
}
$str.="</table>";
echo "$str";

?>

<?php
include_once("footer.php");
?>