
<?php
include_once("head.php");
include_once("menu.php");
include_once("clsOrder.php");
?>










<?php
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><th>Orders</th></tr>";
$result=$obj->select_rec();

while($row=mysql_fetch_array($result))
{
$str.="<tr><td><a href='Category.php?Id=".$row[0] ."'>Edit</a></td><td><a href='Category.php?Id=".$row[0] ."'>".$row[1]."</td><td><img src='Upload_Images/".$row[2]."' height='100' width='100'></td></tr>";
}
$str.="</table>";
echo "$str";
?>



<?php
include_once("footer.php");
?>