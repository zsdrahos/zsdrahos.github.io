	<?php
    global $path, $reg;
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (strpos($actual_link, "registration") == true || strpos($actual_link, "CompanyRegistration") == true )
	{
		$path = "../";
	}
	else {$path = "";}
	
	global $path2, $reg2;
	$actual_link2 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (strpos($actual_link2, "dinner.php") == true)
	{
		$path2 = "5200px";
	}
	else {$reg2 = "";}
?>

<footer class="container-fluid text-center">
  


 <a href="#top" class="top" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

  <p class="footer">Copyright © 2020</p>
  <p class="footer"> Created and Designed by <a style="color: white; text-decoration: underline;" href="mailto:zsdrahos@sch.bme.hu">Zsolt Drahos</a></p>
</footer>