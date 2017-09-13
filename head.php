<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>Night Sky - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-glyphicons.css" rel="stylesheet" media="screen">
    <!-- Le styles -->
    <link href="css/style.css" rel="stylesheet">
    

    <link rel="stylesheet" href="css/jquery-ui-1.8.16.custom.css" media="screen"  />
    <link rel="stylesheet" href="css/fullcalendar.css" media="screen"  />
    <link rel="stylesheet" href="css/chosen.css" media="screen"  />
    <link rel="stylesheet" href="css/glisse942e.css?1.css">
    <link rel="stylesheet" href="css/jquery.jgrowl.css">
    <link rel="stylesheet" href="css/demo_table.css" >
    <link rel="stylesheet" href="css/jquery.fancybox63b9.css?v=2.1.4" media="screen" />
    
	  <link rel="stylesheet" href="css/icon/font-awesome.css">    
  
    
    <link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="css/color/green.css" />
	  <link rel="alternate stylesheet" type="text/css" media="screen" title="red-theme" href="css/color/red.css" />
	  <link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="css/color/blue.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="orange-theme" href="css/color/orange.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="purple-theme" href="css/color/purple.css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script language="JavaScript">
	Firefox = navigator.userAgent.indexOf("Firefox") >= 0;
	if(Firefox) document.write("<link rel='stylesheet' href='css/moz.css' type='text/css'>"); 
	</script>
    
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://www.ubiquityhosting.com/error404.php">
    
  </head>

  <body>
  
  
  
  <!--BEGIN HEADER-->
    <div id="header" role="banner">
       <a id="menu-link" class="head-button-link menu-hide" href="#menu"><span>Menu</span></a>
       <!--Logo--><a href="dashboard.html" class="logo"><h1>Night Sky</h1></a><!--Logo END-->
       
       <!--Search-->
       <form class="search" action="#">
         <input type="text" class="form-control" name="q" placeholder="Search...">
       </form>
       <!--Search END-->
       
       <div class="right">
       
       <!--message box-->
         <div class="dropdown left">
          
          <a class="dropdown-toggle head-button-link" data-toggle="dropdown" href="#"><span class="notice-new">3</span></a> 
          
          <div class="dropdown-menu pull-right messages-list">
          <div class="triangle"></div>
          
            <div class="notice-title">You Have 3 Massages</div>
            <!--message #1-->
            <div class="notice-message">
            <a href="#" class="box">
              <div class="avatar"><img src="images/avatar-2.png" alt=""></div>
              <div class="info">
                <div class="author">Csaba Gyulai</div>
                <div class="date">Jan 9, 2013</div>
                <div class="clearfix"></div>
                <div class="text">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit.</div>
              </div>
              <div class="clearfix"></div>
            </a>
            </div>
            <!--message #2-->
            <div class="notice-message">
            <a href="#" class="box">
              <div class="avatar"><img src="images/avatar-3.png" alt=""></div>
              <div class="info">
                <div class="author">Junkyard Sam</div>
                <div class="date">Jan 15, 2013</div>
                <div class="clearfix"></div>
                <div class="text">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit.</div>
              </div>
              <div class="clearfix"></div>
            </a>
            </div>
            <!--message #3-->
            <div class="notice-message">
            <a href="#" class="box">
              <div class="avatar"><img src="images/avatar-4.png" alt=""></div>
              <div class="info">
                <div class="author">Lienke Raben</div>
                <div class="date">Nov 4, 2012</div>
                <div class="clearfix"></div>
                <div class="text">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit.</div>
              </div>
              <div class="clearfix"></div>
            </a>
            </div>
           
            <a href="#" class="notice-more">View All Messages</a>
          </div>
        </div>
       <!--message box end-->
       
       <!--notification box-->
         <div class="dropdown left">
          <a class="dropdown-toggle head-button-link notification" data-toggle="dropdown" href="#"><span class="notice-new">2</span></a>
          
          <div class="dropdown-menu pull-right messages-list">
          <div class="triangle"></div>
          
            <div class="notice-title">You Have 2 Notifications</div>
            <!--message #1-->
            <div class="notice-message">
            <a href="#" class="box">
              <div class="avatar"><img src="images/avatar-5.png" alt=""></div>
              <div class="info">
                <div class="author">Jonas Anderson</div>
                <div class="date">3 hours ago</div>
                <div class="clearfix"></div>
                <div class="text">Followed <span class="follow-link">Dennis Salvatier</span></div>
              </div>
              <div class="clearfix"></div>
            </a>
            </div>
            <!--message #2-->
            <div class="notice-message">
            <a href="#" class="box">
              <div class="avatar"><img src="images/avatar-6.png" alt=""></div>
              <div class="info">
                <div class="author">Ilias Sounas</div>
                <div class="date">19 hours ago</div>
                <div class="clearfix"></div>
                <div class="text">Commented on <span class="comment-link">Angry Cloud</span></div>
              </div>
              <div class="clearfix"></div>
            </a>
            </div>
            <!--message #3-->
            <div class="notice-message">
            <a href="#" class="box">
              <div class="avatar"><img src="images/avatar-7.png" alt=""></div>
              <div class="info">
                <div class="author">Erin Hunting</div>
                <div class="date">19 hours ago</div>
                <div class="clearfix"></div>
                <div class="text">Liked <span class="like-link">Overnight work</span></div>
              </div>
              <div class="clearfix"></div>
            </a>
            </div>
           
            <a href="#" class="notice-more">View All Notification</a>
          </div>
        </div>
       <!--notification box end-->
       
       <!--config box-->
         <div class="dropdown left">
          <a class="dropdown-toggle head-button-link config" data-toggle="dropdown" href="#"></a>
          <div class="dropdown-menu pull-right settings-box">
          <div class="triangle-2"></div>
          
            <a href="javascript:chooseStyle('none', 30)" class="settings-link"></a>
            <a href="javascript:chooseStyle('blue-theme', 30)" class="settings-link blue"></a>
            <a href="javascript:chooseStyle('green-theme', 30)" class="settings-link green"></a>
            <a href="javascript:chooseStyle('purple-theme', 30)" class="settings-link purple"></a>
            <a href="javascript:chooseStyle('orange-theme', 30)" class="settings-link yellow"></a>
            <a href="javascript:chooseStyle('red-theme', 30)" class="settings-link red"></a>
            <div class="clearfix"></div>
          </div>
        </div>
       <!--config box end-->
       
       <!--profile box-->
         <div class="dropdown left profile">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="double-spacer"></span>
            <div class="profile-avatar"><img src="images/avatar.png" alt=""></div>
            <div class="profile-username"><span>Welcome,</span> John Doe!</div>
            <div class="profile-caret"> <span class="caret"></span></div>
            <span class="double-spacer"></span>
          </a>
          <div class="dropdown-menu pull-right profile-box">
          <div class="triangle-3"></div>
          
            <ul class="profile-navigation">
              <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
              <li><a href="#"><i class="icon-info-sign"></i> Help</a></li>
              <li><a href="index.html"><i class="icon-off"></i> Logout</a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
       <!--profile box end-->
       
       </div>
       
      
    </div>
    <!--END HEADER-->
   
