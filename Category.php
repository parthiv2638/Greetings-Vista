
<?php
include_once("head.php");
include_once("menu.php");
include_once("clsCategory.php");


$obj=new clsCategory();
$No="";
$Name="";
$Img="";





if(isset($_GET["Id"]))
{
$No=$_GET["Id"];
$sel=$obj->select_whererec($No);
$row1=mysql_fetch_array($sel); 
$Name=$row1[1];
$Img=$row1[2];
}


if(isset($_POST["btninsert"]))
{
$obj->setCategory_Name($_POST["categoryname"]);

$fname=$_FILES['file']['name'];

if($_FILES['file']['name'] != "" )
{
move_uploaded_file($_FILES["file"]["tmp_name"],
      "Upload_Images/" . $_FILES["file"]["name"]);
	echo "File is uploaded";	
}
else
{
	echo "File is not selected";
}
$obj->setCategory_Img($fname);
$obj->insert_rec($obj);
header('location:Category.php');
}



if(isset($_POST["btnupdate"]))
{
$obj->setCategory_Id($No);
$obj->setCategory_Name($_POST["categoryname"]);

$fname=$_FILES['file']['name'];

if($_FILES['file']['name'] != "" )
{
move_uploaded_file($_FILES["file"]["tmp_name"],
      "Upload_Images/" . $_FILES["file"]["name"]);
	echo "File is uploaded";	
}
else
{
	echo "File is not selected";
}
$obj->setCategory_Img($fname);
$obj->update_rec($obj);
header('location:Category.php');
}




if(isset($_POST["btndelete"]))
{
$obj->setCategory_Id($No);
$obj->delete_rec($obj);
header('location:Category.php');
}
?>


<div id="main" role="main">
          <div class="block">
   		  <div class="clearfix">
		  <div class="grid-content overflow">
		  
<form name="frm1" method="post" enctype="multipart/form-data">
<table class="table table-bordered table-mod-2">
<tr>
<td>
Category Name
</td>
<td>
<input class="form-control" type="text" name="categoryname" value="<?php echo $Name; ?>"/>
</td>


<td>
<input name="file" type="file"  />
<?php if(isset($_GET['Id'])){?><img src="<?php if(isset($_GET['Id'])){echo "Upload_Images/".$row1[2];}?>" height="100" width="100" /><?php }?>
</td>




<tr>
<td>
<br>
<br>
<input type="submit" class="btn btn-success btn-large" value="Insert" name="btninsert" /> 
<input type="submit" class="btn btn-info btn-large" value="Update"  name="btnupdate"/> 
</td>
<td>
<br />
<br />
<input type="submit" class="btn btn-danger btn-large" value="Delete" name="btndelete" /> 
<input type="reset" class="btn btn-large" value="Reset" /> 
</td>
</tr>
</table>
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
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><th>Edit</th><th>Category Name</th><th>Category Image</th></tr>";
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
