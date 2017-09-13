<?php
include_once("head.php");
include_once("menu.php");
include_once("clsPaper_Type.php");


$obj=new clsPaper_Type();
$No="";
$Description="";

if(isset($_GET["Id"]))
{
$No=$_GET["Id"];
$sel=$obj->select_whererec($No);
$row1=mysql_fetch_array($sel); 
$Description=$row1[1];
}


if(isset($_POST["btninsert"]))
{
$obj->setPaper_Description($_POST["paperdescription"]);
$obj->insert_rec($obj);
}



if(isset($_POST["btnupdate"]))
{
$obj->setPaper_TypeId($No);
$obj->setPaper_Description($_POST["paperdescription"]);
$obj->update_rec($obj);
}


if(isset($_POST["btndelete"]))
{
$obj->setPaper_TypeId($No);
$obj->delete_rec($obj);
}
?>


<div id="main" role="main">
          <div class="block">
   		  <div class="clearfix">
		  <div class="grid-content overflow">
		  
<form name="frm1" method="post">
<table class="table table-bordered table-mod-2">
<tr>
<td>
Paper Description
</td>
<td>
<input type="text" name="paperdescription" value="<?php echo $Description; ?>"/>
<tr>
<td>
<br>
<br>
<input type="submit" class="btn btn-success btn-large" value="Insert" name="btninsert" /> 
<input type="submit" class="btn btn-info btn-large"" value="Update"  name="btnupdate"/> 
</td>
<td>
<br />
<br />
<input type="submit" class="btn btn-danger btn-large"" value="Delete" name="btndelete" /> 
<input type="reset" class="btn btn-large" value="Reset" /> 
</td>
</tr>
</table>
</div>
</form>
</div>
</div>
</div>





<div class="grid-title">
               <div class="pull-left">
                  <div class="icon-title"><i class="icon-eye-open"></i></div>
                  <span>Record</span> 
                  <div class="clearfix"></div>
               </div>
               <div class="pull-right"> 
               	  <div class="icon-title"><a href="#"><i class="icon-refresh"></i></a></div>
                  <div class="icon-title"><a href="#"><i class="icon-cog"></i></a></div>
               </div>
			   </div>


<?php
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><th>Edit</th><th>Paper Description</th></tr>";
$result=$obj->select_rec();

while($row=mysql_fetch_array($result))
{
$str.="<tr><td><a href='Paper_Type.php?Id=".$row[0] ."'>Edit</a></td><td><a href='Paper_Type.php?Id=".$row[0] ."'> ".$row[1]."</td></tr>";
}
$str.="</table>";
echo "$str";
?>

</div>
</div>
</div>




</div>


<?php
include_once("footer.php");
?>
