<?php
session_start();
include_once'Dbconnect.php';
?>
<html lang="en">
<head>
 <title>i-Mark Watermarking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="./images/myLogo.png">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="./css/jquery.min.js"></script>
  <script src="./css/bootstrap.min.js"></script>
  <style>
  
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 600px;}
	
	 /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content2 {height: 275px;
	width: 550px;}
	
	* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content3 {
	height: 250px;
	width: 550px;}
	
	.container2 {height: 300px;
	width 900px;}
	
	.boxes{
		background-color: #cce6ff;
		height:220px;
	}
    
    /* Set gray background color and 100% height */
    .sidenav{
      background-color: #000000;
	  opacity: 0.8;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
	
 
 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  
  .well{
	  background-image: url("./images/images.jpg");
	  height:97px;
	  margin-bottom: 0px;
  }
  
  .btn.btn-info.btn-lg {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

h4{margin-top : 0px;}

.nav-pills>li>a:hover{color:#fff;background-color:#00ffcc}
  </style>
  </head>

<body background="./images/Cool-Grey-Background.jpg">


				<nav class="navbar navbar-inverse visible-xs">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
							</button>
							<a class="navbar-brand">
								<img src="./images/myLogo.png"  width="50" height="25">
								
							</a>
							<h3><font color="#66998c"<p> Watermarking System</p></font></h3>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class="active"><a href="usermainpage.php">Home</a></li>	
								<li><a href="uservisible.php">Visible Watermark</a></li>
								<li><a href="userinvisible.php">Invisible Watermark</a></li>   
								<li><a href="Library.php">Library</a></li>								
								<li><a href="guidelines.php">Guidelines</a></li>
								<li><a href="Contactus.php">Contact Us</a></li>
								<li><button type="button" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span><a href='logout.php'><font color="white">&nbsp;Logout</font></a></button></li>
							 </ul>
						</div>
					</div>
				</nav>

<div class="container">
	<div class="row content">
		<br/>
			<div class="col-sm-3 sidenav hidden-xs">
				<img src="./images/myLogo.png" width="100" height="80">
				<h3><font color="#66998c"<p> Watermarking System</p></font></h3>
				<p class="navbar-text"><h5><font color="white"><?php if (isset($_SESSION['usr_name'])) { echo "Signed in as ".$_SESSION['usr_name'];} ?></font></h5></p>
				<br/>
					<ul class="nav nav-pills nav-stacked">
					<?php if (isset($_SESSION['usr_id'])) { ?>
						<li class="active"><a href="usermainpage.php"><h4><font color="white">Home</font></h4></a></li>
						<li><a href="uservisible.php"><h4><font color="white">Visible Watermark</font></h4></a></li>
						<li><a href="userinvisible.php"><h4><font color="white">Invisible Watermark</font></h4></a></li> 
						<li><a href="Library.php"><h4><font color="white">Library</font></h4></a></li>						
						<li><a href="guidelines.php"><h4><font color="white">Guidelines</font></h4></a></li>
						<li><a href="Contactus.php"><h4><font color="white">Contact Us</font></h4></a></li>
						<li><button type="button" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span><a href='logout.php'><font color="white">&nbsp;Logout</font></a></button></li>
					</ul><br>
					<?php } else { ?><li><a href="login.php">Login</a></li>
					<li><a href="register.php">Sign Up</a></li>
					<?php } ?>
			</div>
			
		
	<br>
	
	<div class="col-sm-9">
      <div class="well">
	  <center>
        <h4>Watermarking Your Photos Has Never Been Easier</h4>
		<a href="uservisible.php" class="btn btn-info btn-lg">Start Watermarking Now<span class="glyphicon glyphicon-menu-right"></span> 
        </a>         
	  </center>
	  
	  
      </div>
	  
		<div class="row">
			<div class="col-sm-offset-3 col-sm-8">
				<div class="row content2">
					<br>
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							  <li data-target="#myCarousel" data-slide-to="1"></li>
							</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="./images/mainpage_user.png" alt="Chania" width="460" height="345">
									</div>

									<div class="item">
										<img src="./images/imageinaimage.jpg" alt="Chania" width="460" height="345">
									</div>

									<!-- Left and right controls -->
									<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
									</a>
								</div>
						</div>
				</div>
			</div>
			
			<div class="row">
			<div class="col-sm-offset-1 col-sm-10">
				<div class="boxes">
				<br/>
				<div class="row">
        <div class="col-sm-4">
		
		<center>
            <img src="./images/nothingtoinstall.jpg" alt="Chania" width="70" height="70">
			<h3>Nothing to Install</h3>
			<p>Watermark your photos right in your internet browser.</p>
		</center>
        </div>
		
        <div class="col-sm-4">
		
		<center>
            <img src="./images/easytouse.jpg" alt="Chania" width="70" height="70">
			<h3>Easy to Use</h3>
			<p>Watermark your photos now, for free, forever. Or check out the Pro version for even more coll stuff.<p>
		</center>
        </div>
		
        <div class="col-sm-4">
		
		<center>
            <img src="./images/customizable.jpg" alt="Chania" width="70" height="70">
			<h3>Customizable</h3>
			<p>Adjust your watermark font, size, color, and position until it's perfect.</p>
		</center>
        </div>
		
	</div>
      </div>
				</div>
			</div>
		</div>
	</div>
	
	</div>
</div>
		
</body>
</html>
