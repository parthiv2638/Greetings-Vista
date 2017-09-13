<?php
session_start();
include_once("head.php");
include_once("menu.php");
include_once("clsCategory.php");
include_once("clsProduct.php");
include_once("clsSide_Master.php");
include_once("clsSize_Master.php");
include_once("clsPaper_Type.php");

$obj=new clsProduct();

$_SESSION["pid"]=$_GET['Product_Id'];

$No="";
$PName="";
$Size_Id="";
$Side_Id="";
$Category_Id="";
$Paper_TypeId="";
$Rate="";
$PImg="";
?>



<body>
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
$result=$obj->select_wherereppidrec($_GET['Product_Id']);
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



              </div>
			  <div>
			  <a href="ClientGroup.php"><img src="Se.jpeg"></a>
			  <br>
			  <a href="UploadTemplateOrder.php"><img src="Upload-your-File1.png"></a>

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
              <div class="clearfix"></div>   
              </div>
            
              <div class="grid-content overflow">
                <div class="friends">
                  <div class="clearfix"></div>
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