<!DOCTYPE html>
<html>
  
<!-- Mirrored from nightskyadmin.com/demo-bs3/template/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 18 Jan 2014 07:52:22 GMT -->
<head>
    <title>Night Sky - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-glyphicons.css" rel="stylesheet" media="screen">
    
    <!-- Custom styles for this template -->
  	<link href="css/login.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php         	
		  			include_once("clsAdmin.php");
					include_once("clsCustomer.php");
					
				   session_start();                                   
				   if (isset($_POST['login-btn']))
				   {
			
				   $obj1=new clsAdmin();
				   $ans1=$obj1->select_rec_login($_POST["email"],$_POST["password"]);
						if($ans1==1)
						{
								//$sel=$obj1->select_where_rec($_POST["email"]);
								//$row1=mysql_fetch_array($ans1);
								echo $ans1;
									//$_SESSION['email1'] = $row1[6];								
									$_SESSION['uname'] = $_POST['email'];
									header("location:city.php");
									echo $_SESSION['uname'];
						}					
					else
					{
							$obj2=new clsCustomer();
				   			$ans2=$obj2->select_rec_login($_POST["email"],$_POST["password"]);
							if($ans2!=1)
							{
								//$sel=$obj2->select_where_rec($_POST["email"]);
								//$row2=mysql_fetch_array($ans2);
								echo $ans2;
									//$_SESSION['email2'] = $row2[6];												
									$_SESSION['uname1'] = $_POST['email'];
									//echo $_SESSION['uname1'];	
								header("location:clientcategory.php");
							}
						}
				}		
				?>
	
    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
    	<div id="wrapper">
            <form  class="form-login" role="form" method="post"> 
                <div class="content-login">
                	<div class="header">Account Login</div>
                    <div class="form-group inputs">
                    	<input type="text" class="form-control" name="email" id="inputUsername" placeholder="EmailId">
                    </div>
                    <div class="form-group inputs">
                    	<input type="password" class="form-control" name="password" id="inputPassword1" placeholder="Password">
                    </div>
                    <div class="link-1"><a href="#">Create New Account</a></div>
                    <div class="link-2"><a href="#">Forgot Password?</a></div>
                    <div class="clear"></div>
                    <div class="button-login"><button type="submit" name="login-btn" id="login-btn" class="btn btn-primary btn-lg btn-block">Sign In</button></div>
                </div><!-- .content-login -->
                
                <div class="footer-login">
                 <div class="pull-left">Sing In With</div>
                 <div class="pull-right">
                   <ul class="social-links">
                      <li class="facebook"><a href="#"><span aria-hidden="true" class="icon-facebook"></span></a></li>
                      <li class="twitter"><a href="#"><span aria-hidden="true" class="icon-twitter"></span></a></li>
                      <li class="google-plus"><a href="#"><span aria-hidden="true" class="icon-google"></span></a></li>
                   </ul>
                 </div>
                 <div class="clear"></div>
                </div>
            </form>
        
        </div> <!-- /#wrapper -->  
    </div><!-- /.col -->  
	

	
	
	
	
    <!-- JavaScript plugins (requires jQuery) -->
    <script src="../../../code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
    <script src="http://www.ubiquityhosting.com/error404.php"></script>
    <script src="http://www.ubiquityhosting.com/error404.php"></script>
    <script>
    $('#login-btn').click(function() { window.location = '' ; });
    </script>
  </body>

<!-- Mirrored from nightskyadmin.com/demo-bs3/template/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 18 Jan 2014 07:52:54 GMT -->
</html>
