<?php
    global $path, $reg;
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (strpos($actual_link, "registration") == true || strpos($actual_link, "CompanyRegistration") == true )
	{
		$path = "../";
	}
	else {$path = "";}
?>


<!DOCTYPE html>
<html lang="hu">
<head>
  <title>14th Central and Eastern European Proteomic Conference</title>
  <meta charset="utf-8">
  <meta name="description" content="CEEPC">
  <meta name="keywords" content=" CEEPC, 14th CEEPC, Proteomic Conference, Drahos, Vekey ">
	<meta name="author" content=" Hungarian Academy of Sciences, Research Center for Natural Sciences ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo $path."style.css" ?>">
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>




<body id="preload">
<!--------------------------------------------------- FEJLEC ------------------------------------------>
<header class="container-fluid header elrejt">
	
	<map name="a">
  <area target="_blank" alt="" title="" href="http://www.ceepc.eu/" coords="1,4,165,123" shape="rect">
    <area target="_blank" alt="" title="" href="http://www.ttk.hu/en" coords="170,4,276,124" shape="rect">
</map>

	<div id="top"></div>
	<a href="<?php echo $path."index.php" ?>"><img id="top" src="<?php echo $path."image/header_2.PNG" ?>" width="44%"></a>  <a href="http://www.ttk.hu/en"><img  src="<?php echo $path."image/logo_dupla.png" ?>" width="19%" class="jobbra elrejt center2" usemap="#a"></a><img src="<?php echo $path."image/tel3.jpg" ?>" width="37%" class="jobbra elrejt center">
</header>
<!-------------------------------------------------- NAV BAR ------------------------------------------>
<nav class="feher navbar navbar-inverse sticky-top">
 <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
			
      </button>     
    </div>
    <div class="feher collapse navbar-collapse paddingzero" id="myNavbar">
      <ul class="nav navbar-nav">

        <li id="main" class="active cursor"><a href="<?php echo $path."index.php" ?>">Home</a></li>
        <li id="program" class="cursor"><a href="<?php echo $path."program.php" ?>">CONFERENCE PROGRAM</a></li>
		<li id="adv_board" class="cursor"><a  href="<?php echo $path."advisory-board.php" ?>">Advisory Board</a></li>
        <li id="reg" class="cursor"><a href="<?php echo $path."registration" ?>">Registration</a></li>

		<li class="dropdown1">
			<a class="dropbtn">Information <span class="caret"></span></a>
			<div class="dropdown-content">
			   <a class="cursor"  href="<?php echo $path."information-for-authors.php" ?>" >For authors</a>
			   <a class="cursor"  href="<?php echo $path."accomodation.php" ?>">Accommodation & Lunch</a>
			    <a class="cursor"  href="<?php echo $path."dinner.php" ?>">Conference Dinner</a>
			</div>
		  </li>
			
		  <li id="where" class="cursor"><a href="<?php echo $path."where.php" ?>">Conference site</a></li>
		  
		  <li id="contact" class="cursor"><a href="<?php echo $path."contact.php" ?>" >Contact</a></li> 
      </ul>
  </div>
</nav>

<!--------------------------------------------------- MUTATO ------------------------------------------>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators elrejt">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

<!--------------------------------------------- DOBOZOK A KEPEKEN ------------------------------------->
  <div class="carousel-inner elrejt">
    <div class="item active">
      <img src="<?php echo $path."image/elso.jpg" ?>" alt="Los Angeles">
	   <div class="carousel-caption">
	   <!--<article>
          <h5>Registration is now open</h5>
		  <a class="cursor" id="reg"><button type="button" class="btn btn-default btn-width">Go »</button></a>
		  
		 </article>-->
        </div>      
    </div>

    <div class="item">
      <img src="<?php echo $path."image/harmadik.jpg" ?>" alt="Chicago">
	   <div class="carousel-caption">
	   <!--<article>
          <h5>asd</h5>
          <p></p><br>
		    <a target="_blank" href=""><button type="button" class="btn btn-default btn-width">Tovább »</button></a>
		 </article>-->
        </div>      
    </div>

    <div class="item">
      <img src="<?php echo $path."image/masodik.jpg" ?>" alt="New York">
	   <div class="carousel-caption">
	  <!--	 <article>
          <h5>asd</h5>
          <p>asd</p><br>
		    <a target="_blank" href=" "><button type="button" class="btn btn-default btn-width">Tovább »</button></a>
		 </article>-->
        </div>      
    </div>
  </div>

<!---------------------------------------- JOBBRA BALLAR NYILAK --------------------------------------->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control " href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ALSO VONAL -->	


 <div class="line navbar elrejt">
 <p></p>
 
</div>

<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
return false;
});
});
</script>

<div class='popup'>
	<div class='cnt223'>
		<h1 style="color:red;">IMPORTANT</h1>
			<p style="text-align:center;">
				The conference is canceled!
			<br/>
			
			</p>
	</div>
</div>