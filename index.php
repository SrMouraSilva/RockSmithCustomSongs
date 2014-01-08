<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
//error_reporting(22527);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include_once("pages/template/head.php"); ?>
  </head>

  <body class="<?php echo count($_GET)==0||isset($_GET['search'])?"index":"" ?>">

    <div id="wrapper">
		<?php include_once("pages/template/header.php"); ?>

      	<article id="page-wrapper">
      		<?php include_once("pages/_pageselector_.php"); ?>
      	</article>

      	<?php include_once("pages/template/footer.php"); ?>
    </div>
  </body>
</html>
