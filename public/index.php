<?php
require dirname(__FILE__) . "/../vendor/autoload.php";
require dirname(__FILE__) . "/../helpers/myHelpers.php";
require dirname(__FILE__) . "/../config/config.php";
require dirname(__FILE__) . "/../config/alumnes.php";
loadWhoops();
?>
<!doctype html>
<html lang="en">
	<?php include 'head.php';?>
	<body class="text-center">
		<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  			<?php 
				$location="index.php";
				include 'header.php';
			?>
			<main role="main" class="inner cover">
				<h1 class="cover-heading">
					<?php print ucfirst($grupo)."(".ucfirst($aula).")";?>
				</h1>
				<p class="lead">
					<?php print ucParagraph($descripcion);?>
				</p>
				<p class="lead">
					<a href="<?php print $webCentre;?>" class="btn btn-lg btn-secondary">
						<?php print $centre;?>
					</a>
				</p>
			</main>
			<?php include 'footer.php';?>
		</div>
	</body>
</html>
