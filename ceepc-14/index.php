<!DOCTYPE html>
<html lang="hu">
<head>
<!-- Created by Zsolt Drahos | All rights reserved -->
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
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000"
    },
    "button": {
      "background": "transparent",
      "text": "#7ba0b8",
      "border": "#7ba0b8"
    }
  },
  "position": "bottom-left",
  "content": {
    "message": "This website uses cookies in order to offer you the most relevant information. Please accept cookies for optimal performance.",
    "dismiss": "Yes, I accept Cookies!",
  }
})});

</script>
</head>



<body id="preload">
<?php
    include("includes/header.php");
?>
 <!-------------------------------------------- BAL OLDAL --------------------------------------------->

  <div class="container-fluid text-center" >    
  <div class="row content">
	<?php
    include("includes/baloldal.php");
	?>
<!--------------------------------------------- MAIN PART --------------------------------------------->	
    <div class="col-sm-8 text-left kozep">
		<?php
		include("main/index.php");
		?>
	 </div>
<!------------------------------------------- MAIN PART END ------------------------------------------->	
 
<!-------------------------------------------- JOBB OLDAL --------------------------------------------->
	<?php
    include("includes/jobboldal.php");
	?>
    </div>
  </div>
<!--------------------------------------------- SPONZOR ----------------------------------------------->


<!--------------------------------------------- FOOTER ----------------------------------------------->
<?php
    include("includes/footer.php");
?>
<!------------------------------------------- FOOTER END --------------------------------------------->



<script type="text/javascript" src="jquery.js"></script>
</body>
</html>