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
include_once("clsProductTemplate.php");
include_once("clsTempcart.php");

$obj=new clsProduct();
$obj2=new clsTempcart();
$obj1=new clsProductTemplate();

$pid=$_SESSION["pid"];

$str="";
$Template_Id=$_GET["Id"];

$gid="";
$No="";
$PName="";
$Size_Id="";
$Side_Id="";
$Category_Id="";
$Paper_TypeId="";
$Rate="";
$PImg="";






if(isset($_POST["btnsubmit"]))
{
$pname=$obj->select_productname($pid);
//echo $pname;
$obj2->setProduct_name($pname);


$sidname=$obj->select_getsidename($pid);
//echo $sidname;
$obj2->setSide_Description($sidname);


$sizname=$obj->select_getsizename($pid);
//echo $sizname;
$obj2->setSize_Description($sizname);






$papername=$obj->select_getpapername($pid);
//echo $papername;
$obj2->setPaper_Description($papername);


$gname=$obj->select_getgroupname($gid);
//echo $gname;
$obj2->setGroup_Name($gname);


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
//echo "<br>".$fname;
$obj2->setData_File($fname);

$fname1=$_FILES['file1']['name'];

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

//echo "<br>".$fname1;
$obj2->setLogo_File($fname1);

$rate=$obj->select_rate($pid);
//echo "<Br>".$rate;
$obj2->setRate($rate);



$qty = $_POST['cmbQty'];
//echo "<Br>".$qty;
$obj2->setQuantity($qty);


$rq= (($rate*$qty)/1000);
//echo "<Br>". $rq;
$obj2->setRateintoquantity($rq);


$sessionid=session_id();
$obj2->setSession_Id($sessionid);



$tname=$obj1->select_gettemplatename($Template_Id);
//echo "<Br>". $tname;
$obj2->setTemplate_Name($tname);


$timg=$obj1->select_gettemplateimg($Template_Id);
//echo "<Br>". $timg;
$obj2->setTemplate_Img($timg);


$pimg=$obj->select_img($pid);
//echo "<Br>". $pimg;
$obj2->setProduct_Img($pimg);

$obj2->insert_rec($obj2);
header('location:tempcart.php');
}
?>









<body>
<form name="frm1" method="post" enctype="multipart/form-data">
<div class="row">    
              <!--visitor statistics-->
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="grid">
              <div class="grid-title">
               <div class="pull-left">
                  <div class="icon-title"><i class="icon-file"></i></div>
                  <span>Product Details</span> 
                  <div class="clearfix"></div>
               </div>
               <div class="pull-right"> 
               	  <div class="icon-title"><a href="#"><i class="icon-refresh"></i></a></div>
                  <div class="icon-title"><a href="#"><i class="icon-cog"></i></a></div>
               </div>
              <div class="clearfix"></div>   
              </div>
            
              <div class="grid-content overflow">

<?php
$str="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><td>Product</td></tr>";
$result=$obj->select_wherereppidrec($pid);
$row=mysql_fetch_array($result);
$str.="<td><a href='ProductDetails.php?Product_Id=".$row[0]."'><br>".$row[1]."<br></a><img src='Upload_Images/".$row[7]."' height='150' width='150'><br></td>";
$str.="</table>";
echo $str;
?>


<?php
$str1="<table border='3' class='table table-striped table-mod-2' class='grid-content' class='grid-content-overflow' class='grid' id='datatable_3' class='grid-title' class='pull-left' class='pull-right' height=150 width=200><tr><td>Template</td></tr>";
$result1=$obj1->select_whereccid1($Template_Id);
$row=mysql_fetch_array($result1);
$str1.="<tr><td><a href='TemplateOrder.php?Id=".$row[0] ."'><br>".$row[1]."<br></a><img src='Upload_Images/".$row[2]."' height='100' width='100'></td></tr>";
$str1.="</table>";
echo "$str1";
?>





              </div>
			  <div>
			  </div>
              </div><!--/.grid-->
              </div>
              <!--visitor statistics END-->
              
              <!--friends-->
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="grid">
              <div class="grid-title">
               <div class="pull-left">
                  <div class="icon-title"><i class="icon-user"></i></div>
                  <span>Options</span> 
                  <div class="clearfix"></div>
               </div>
               <div class="pull-right"> 
               	  <div class="icon-title"><a href="#"><i class="icon-refresh"></i></a></div>
                  <div class="icon-title"><a href="#"><i class="icon-cog"></i></a></div>
               </div>
              <div class="clearfix">

			  
			  </div>   
              </div>
            
              <div class="grid-content overflow">
                <div class="friends">
                  <div class="clearfix"></div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                      <label class="control-label" for="inputSuccess">Data file</label>
					  <tr>
						<td>
						<label></label>
						</td>
						<td>
						<input name="file" type="file"  />
						</td>
						</tr>
                  </div>
				  
				  <div class="clearfix"></div>
				  <br>
				  <div class="clearfix"></div>
				  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                      <label class="control-label" for="inputSuccess">Logo file</label>
                     <tr>
						<td>
						<label></label>
						</td>
						<td>
						<input name="file1" type="file"  />
						</td>
						</tr>
                  </div>
				  <br>
              <div class="clearfix"></div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
				  <br>
                    <label class="control-label" for="inputSuccess">Select Quantity</label>
                    <div class="controls">
                      <select class="form-control" name="cmbQty">
                          <option>1000</option>
                          <option>2000</option>
                          <option>3000</option>
                          <option>4000</option>
                          <option>5000</option>
                        </select>
                     
                    </div>
					<input type="submit" src="Tempcart.php" class="btn btn-success btn-large" value="Submit" name="btnsubmit" /> 
					</form>
                    </div>
					</div>
                     <p class="help-inline control-label</p>
                  </div>
        		</div>
			  <div class="clearfix"></div>
              </div>
              </div>
              </div>
              <!--friends END-->
              </div>
		  
			  
			
<?php
include_once("footer.php");
?>