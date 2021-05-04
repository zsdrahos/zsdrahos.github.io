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
		<!--<img src="image/gold+sponsorship1.PNG" width="100%" ><br><br>
		<img src="sponzor/Bruker-logo_rgb_72dpi.png" width="80%"><br><br>-->
		<img src="<?php echo $path."image/silver+sponsorship.png" ?>" width="100%" ><br><br>
		<a href="https://www.pharmafluidics.com/" target="_blank"><img src="<?php echo $path."sponzor/pharmafluidics.png" ?>" width="80%"></a><br><br><br>
		<img src="<?php echo $path."image/other+sponsor.png" ?>" width="100%" ><br><br>
		<a href="https://sciex.com/" target="_blank"><img src="<?php echo $path."sponzor/SCIEX.png" ?>" width="60%"></a><br>
		<a href="http://per-form.hu/" target="_blank"><img src="<?php echo $path."sponzor/pf-logo.png" ?>" width="60%"></a><br><br>
		<a href="http://www.ionbench.com/" target="_blank"><img src="<?php echo $path."sponzor/ionBenchR.PNG" ?>" width="54%"></a><br><br>
		<hr>
		<p class="footer">For advertising, exhibiting and sponsorship opportunities, please <div id="contact2" class="cursor"><a href="<?php echo $path."contact.php" ?>"> contact us. </a></div></p>
	
		
		
		
		
      </div>