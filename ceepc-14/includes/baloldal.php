<?php
    global $path, $reg;
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (strpos($actual_link, "registration") == true || strpos($actual_link, "CompanyRegistration") == true )
	{
		$path = "../";
	}
	else {$path = "";}
?>   


   <div class="col-sm-2 sidenav">
		<div class="kicsi_fejlec"><img  src="<?php echo $path."image/header_2.PNG" ?>" width="100%"></a><hr  class="new"></div>
      <p class="cursor text_imp"> Deadlines</p>
      <p class="cursor footer">Registration & Abstract Submission: <br><b>30th June 2020</b></p>
		   <hr class="new">
		   
<div class="elrejt">
<p class="cursor " > Pictures from previous conferences</p>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01495.JPG" ?>" alt="First slide" width="100%">
    </div>
    <div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01502.JPG" ?>" alt="Third slide" width="100%">
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01507.JPG" ?>" alt="Second slide" width="100%">
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01511.JPG" ?>" alt="Second slide" width="100%">
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01519.JPG" ?>" alt="Second slide" width="100%"> 
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01553.JPG" ?>" alt="Second slide" width="100%">
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01557.JPG" ?>" alt="Second slide" width="100%">
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01562.JPG" ?>" alt="Second slide" width="100%">
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01566.JPG" ?>" alt="Second slide" width="100%">
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01587.JPG" ?>" alt="Second slide" width="100%">
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01705.JPG" ?>" alt="Second slide" width="100%">
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01708.JPG" ?>" alt="Second slide" width="100%">
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01715.JPG" ?>" alt="Second slide" width="100%"> 
    </div>
	<div class="item">
      <img class="d-block w-100" src="<?php echo $path."gallery/DSC01767.JPG" ?>" alt="Second slide" width="100%">
    </div>
  </div>
</div> 
	
</div>

<div class="text_not_imp"><br>
<a href="https://www.facebook.com/14thCEEPC" class="fa fa-facebook"></a>&nbsp;
<a href="#" class="fa fa-instagram"></a>&nbsp;
<a href="#" class="fa fa-globe"></a>
</div>
</div>