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
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("php")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Schedule Template | CodyHouse</title>
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
		<h1>Invited Speakers</h1><br>
		<table border="0" width="70%" class="invited color" >
			<tbody>
				<tr class="color">
					<th width="30%" class="color">Tadashi Kondo</th>
					<td width="70%" class="color">National Cancer Center Research Institute, Tokyo, Japan</td>
				</tr >
				<tr class="color">
					<th class="color">Goran Mitulović</th>
					<td class="color">Medical University of Vienna,  Wien, Austria</td>
				</tr>
				<tr class="color">
					<th class="color">Joanna Polańska</th>
					<td class="color">Silesian University of Technology, Gliwice, Poland</td>
				</tr>
				<tr class="color">
					<th class="color">Marek Šebela</th>
					<td class="color">Palacky University, Olomouc, Czech Republic</td>
				</tr>
				<tr class="color">
					<th class="color">Daniel Martins-de-Souza</th>
					<td class="color">University of Campinas (UNICAMP), Brazil</td>
				</tr>
				<tr class="color">
					<th class="color">Akos Vertes</th>
					<td class="color">George Washington University, USA</td>
				</tr>
				<tr class="color">
					<th class="color">Roman Zubarev</th>
					<td class="color">Karolinska Institutet, Stockholm, Sweden</td>
				</tr>
			
				<!--
				<tr class="color">
					<th class="color"></th>
					<td class="color"></td>
				</tr>
				<tr class="color">
					<th class="color"></th>
					<td></td>
				</tr>
				<tr class="color">
					<th class="color"></th>
					<td class="color"></td>
				</tr>-->
			</tbody>
		</table><br>
		
		<h1>Program</h1>
			<br>
		<?php
		include("program/index.html");
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


<!-- License: https://codyhouse.co/mit -->
<script type="text/javascript" src="jquery.js"></script>
</body>
</html>