
<?php
session_start();
include_once("head.php");
include_once("menu.php");
include_once("clsProductTemplate.php");
include_once("clsProduct.php");
include_once("clsGroup.php");

$obj=new clsProductTemplate();


$gid="";
$No="";
$TName="";
$PTImg="";
$Product_Id="";
$Group_Id="";
?>











<?php
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><th>Template</th></tr>";
$result=$obj->select_wherereccid($_GET['Id'],$_SESSION["pid"]);
while($row=mysql_fetch_array($result))
{
$str.="<td><a href='TemplateOrder.php?Id=".$row[0] ."'><br>".$row[1]."<br></a><img src='Upload_Images/".$row[2]."' height='100' width='100'><br>".$row[3]."<br>".$row[4]."</td></tr>";
}
$str.="</table>";
echo "$str";
?>







<?php
include_once("footer.php");
?>