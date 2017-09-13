
<?php
include_once("head.php");
include_once("menu.php");
include_once("clsCategory.php");
include_once("clsProduct.php");
include_once("clsSide_Master.php");
include_once("clsSize_Master.php");
include_once("clsPaper_Type.php");

$obj=new clsProduct();



$No="";
$PName="";
$Size_Id="";
$Side_Id="";
$Category_Id="";
$Paper_TypeId="";
$Rate="";
$PImg="";



if(isset($_GET["Id"]))
{
$No=$_GET["Id"];
$sel=$obj->select_whererec($No);
$row1=mysql_fetch_array($sel); 
$PName=$row1[1];
$Size_Id=$row1[2];
$Side_Id=$row1[3];
$Category_Id=$row1[4];
$Paper_TypeId=$row1[5];
$Rate=$row1[6];
$PImg=$row1[7];
}




if(isset($_POST["btninsert"]))
{
$obj->setProduct_Name(($_POST["pname"]));
$obj->setSide_Id(($_POST['SideMastr']));
$obj->setSize_Id(($_POST['SizeMastr']));
$obj->setCategory_Id(($_POST["Cmbcat"]));
$obj->setPaper_TypeId(($_POST['Papertype']));
$obj->setRate(($_POST["price"]));



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
$obj->setProduct_Img("$fname");
$obj->insert_rec($obj);
//header('location:product.php');
}




if(isset($_POST["btnupdate"]))
{
$obj->setProduct_Id($No);
$obj->setProduct_Name(($_POST["pname"]));
$obj->setSide_Id(($_POST['SideMastr']));
$obj->setSize_Id(($_POST['SizeMastr']));
$obj->setCategory_Id(($_POST["Cmbcat"]));
$obj->setPaper_TypeId(($_POST['Papertype']));
$obj->setRate(($_POST["price"]));



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
$obj->setProduct_Img("$fname");
$obj->update_rec($obj);
header('location:product.php');
}




if(isset($_POST["btndelete"]))
{
//echo "hello";
$obj->setProduct_Id($No);
$obj->delete_rec($obj);
header('location:product.php');

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
        
                            <label>Enter Product Name</label>
							
							</td>
							<td>
                            <input type="text" name="pname" class="form-control" placeholder="Enter Product Name" value="<?php  echo $PName ;?>">
						</td>
					
						</tr>
						<tr>
						<td>
							<label>Enter Side</label>
						</td>
						<td>
						<select name="SideMastr"> 
							<?php
							 $objsidemaster=new clsSide_Master();
							 $sel1=$objsidemaster->select_rec();
							 
							 
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
						<label>Enter Size</label>
						</td>
						<td>
						<select name="SizeMastr"> 
							 <?php
							 $objsizemaster=new clsSize_Master();
							 $sel1=$objsizemaster->select_rec();
							 
							 
							 while($row2=mysql_fetch_array($sel1))
							 {
							 echo "<option value='".$row2[0]."'>$row2[1]</option>";
							 }
							 
							 ?>
							 </select>
							</td> 
							 
						
						<tr>
						<td>
						<label>Choose Category</label>
						</td>
						<td>
						<select name="Cmbcat"> 
							 <?php
							 $objcategory=new clsCategory();
							 $sel1=$objcategory->select_rec();
							 
							 
							 while($row2=mysql_fetch_array($sel1))
							 {
							 echo "<option value='".$row2[0]."'>$row2[1]</option>";
							 }
							 ?>
							 </select>
							</td> 
							
							
						<tr>
						<td>
						<label>Choose Paper Type</label>
						</td>
						<td>
						<select name="Papertype"> 
							 <?php
							 $objpapertype=new clsPaper_Type();
							 $sel1=$objpapertype->select_rec();
							 
							 
							 while($row2=mysql_fetch_array($sel1))
							 {
							 echo "<option value='".$row2[0]."'>$row2[1]</option>";
							 }
							 
							 ?>
							 </select>
						</td>
						
						
						
					<tr>
					<td>
                           <label>Rate</label>
							</td>
							<td>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price" value="<?php  echo $Rate ;?>" >
                        </td>
						<tr>
						<td>
						<label>Product Images:-</label>
						</td>
						<td>
						<input name="file" type="file"  />
						</td>
						
						<?php if(isset($_GET['Id'])){?><img src="<?php if(isset($_GET['Id'])){echo "../../Upload_Images".$row1[7];}?>" height="100" width="100" /><?php }?>
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
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><th>Edit</th><th>Product Name</th><Th>Side</th><Th>Size</th><Th>Category</th><Th>Paper Type</th><Th>Rate</th><th>Product Image</th></tr>";
$result=$obj->select_rec();
while($row=mysql_fetch_array($result))
{
$str.="<tr><td><a href='ProductDetails.php?Id=".$row[0] ."'>Edit</a></td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td><img src='Upload_Images/".$row[7]."' height='100' width='100'></td></tr>";
}



$str.="</table>";
echo "$str";

?>


<?php
include_once("footer.php");
?>

