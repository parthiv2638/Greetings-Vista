<?php
session_start();
include_once("head.php");
include_once("menu.php");
include_once("clsCategory.php");
$obj=new clsCategory();
$No="";
$Name="";
$Img="";
?>





<?php
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><th>Category</th></tr>";
$result=$obj->select_rec();

$x=1;
while($row=mysql_fetch_array($result))
{
if($x==1)
{
$str.="<tr>";
}

$str.="<td><a href='clientproducts.php?Category_Id=".$row[0]."'>".$row[1]."</a><br><img src='Upload_Images/".$row[2]."' height='150' width='150'></td>";
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
include_once("footer.php");
?>
