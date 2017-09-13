
<?php
session_start();
include_once("head.php");
include_once("menu.php");
include_once("clsCategory.php");
include_once("clsProduct.php");
include_once("clsSide_Master.php");
include_once("clsSize_Master.php");
include_once("clsPaper_Type.php");
include_once("clsGroup.php");


$obj=new clsProduct();
$obj1=new clsGroup();

$pid=$_SESSION["pid"];


$No="";
$PName="";
$Size_Id="";
$Side_Id="";
$Category_Id="";
$Paper_TypeId="";
$Rate="";
$PImg="";
?>


<?php
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><td>Product</td></tr>";
$result=$obj->select_wherereppidrec($pid);
$x=1;

while($row=mysql_fetch_array($result))
{
if($x==1)
{
$str.="<tr>";
}

$str.="<td><a href='ProductDetails.php?Product_Id=".$row[0]."'><br>".$row[1]."<br></a><img src='Upload_Images/".$row[7]."' height='150' width='150'><br>".$row[2]."<br>".$row[3]."<br>".$row[5]."<br>$".$row[6]."<br></td>";
$x++;
if($x==4)
{
$str.="</tr>";
$x=1;
}
}
$str.="</table>";
echo "$str";
?>





<?php
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><th>Group</th></tr>";
$result1=$obj1->select_rec();
//$result1=select_wherereccid($No);

while($row=mysql_fetch_array($result1))
{
$str.="<tr><td><a href='ClientProductTemplate.php?Id=".$row[0] ."'><a href='ClientProductTemplate.php?Id=".$row[0] ."'>".$row[1]."</td></tr>";
}
$str.="</table>";
echo "$str";
?>



<?php
include_once("footer2.php");
?>