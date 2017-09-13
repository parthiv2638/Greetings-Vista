
<?php
include_once("head.php");
include_once("menu.php");
include_once("clsProductTemplate.php");
include_once("clsProduct.php");
include_once("clsGroup.php");

$obj=new clsProductTemplate();



$No="";
$TName="";
$PTImg="";
$Product_Id="";
$Group_Id="";



if(isset($_GET["Id"]))
{
$No=$_GET["Id"];
$sel=$obj->select_whererec($No);
$row1=mysql_fetch_array($sel); 
$TName=$row1[1];
$PTImg=$row1[2];
$Product_Id=$row1[3];
$Group_Id=$row1[4];
}




if(isset($_POST["btninsert"]))
{
$obj->setTemplate_Name(($_POST["tname"]));
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
$obj->setTemplate_Img("$fname");
$obj->setProduct_Id(($_POST['ProductMastr']));
$obj->setGroup_Id(($_POST['GroupMastr']));
$obj->insert_rec($obj);
//header('location:producttemplate.php');
}




if(isset($_POST["btnupdate"]))
{
$obj->setTemplate_Id($No);
$obj->setTemplate_Name(($_POST["tname"]));
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
$obj->setTemplate_Img("$fname");
$obj->setProduct_Id(($_POST['ProductMastr']));
$obj->setGroup_Id(($_POST['GroupMastr']));
$obj->update_rec($obj);
//header('location:producttemplate.php');
}




if(isset($_POST["btndelete"]))
{
//echo "hello";
$obj->setTemplate_Id($No);
$obj->delete_rec($obj);
//header('location:product.php');

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
        
                            <label>Enter Template Name</label>
							</td>
							<td>
                            <input type="text" name="tname" class="form-control" placeholder="Enter Template Name" value="<?php  echo $TName ;?>">
						</td>
					
						</tr>
						
						
						<tr>
						<td>
						<label>Template Images:-</label>
						</td>
						<td>
						<input name="file" type="file"  />
						</td>
						
						<?php if(isset($_GET['Id'])){?><img src="<?php if(isset($_GET['Id'])){echo "../../Upload_Images".$row1[2];}?>" height="100" width="100" /><?php }?>
						</tr>
						
						
						
						<tr>
						<td>
							<label>Choose Product</label>
						</td>
						<td>
						<select name="ProductMastr"> 
							<?php
							 $objproductmaster=new clsProduct();
							 $sel1=$objproductmaster->select_rec();
							 
							 
							 while($row2=mysql_fetch_array($sel1))
							 {
							 echo "<option value='".$row2[0]."'>$row2[1]</option>";
							 }
							 
							 ?>
							 </select>
							 </td>
							 </tr>
							 
							 
							 
							 <tr>
						<td>
							<label>Choose Group</label>
						</td>
						<td>
						<select name="GroupMastr"> 
							<?php
							 $objgroupmaster=new clsGroup();
							 $sel1=$objgroupmaster->select_rec();
							 
							 
							 while($row2=mysql_fetch_array($sel1))
							 {
							 echo "<option value='".$row2[0]."'>$row2[1]</option>";
							 }
							 
							 ?>
							 </select>
							 </td>
							 </tr>
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
</form>
					 

<?php
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><th>Edit</th><th>Template Name</th><Th>Template Image</th><Th>Product</th><Th>Group</th></tr>";
$result=$obj->select_rec();

while($row=mysql_fetch_array($result))
{
$str.="<tr><td><a href='ProductTemplate.php?Id=".$row[0] ."'>Edit</a></td><td>".$row[1]."</td><td><img src='Upload_Images/".$row[2]."' height='100' width='100'></td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
}
$str.="</table>";
echo "$str";

?>


<?php
include_once("footer.php");
?>
