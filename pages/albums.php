<?php
function album($band, $album, $total, $imgFile) {?>
	<div class="col-lg-3 col-md-4 col-sm-6">
  	<div class="album clearfix">
      	<div class="col-xs-6"><img width="100%" src="imgs/capas/<?php echo "$imgFile"; ?>" /></div>
      	<div class="inform">
      		<ul>
 				<li><?php echo $band; ?></li>
				<li><?php echo $album; ?><br /><br /></li>
    			<li><?php echo $total; ?> musics</li>
			</ul>
      	</div>
  	</div>
  </div>
<?php } ?>


<header class="blue">
	<h2><i class="fa fa-toggle-right"></i> Albums</h2>

	<form class="form-horizontal" role="form">
	  <div class="form-group">
	    <label for="search" class="col-sm-2 control-label">Search Album</label>
	    <div class="col-sm-8">
	      <input type="email" class="form-control" id="search" placeholder="Name">
	    </div>
	    <div class="col-sm-2">
	      <input type="submit" class="form-control" value="Find">
	    </div>
	  </div>
	</form>
</header>



<div class="row">
<?php
	album("Iron Maden", "Killers", "5", "iron_maiden_1.jpg");
	album("PowerSlave", "Killers", "0", "iron_maiden_3.jpg");
	album("Iron Maden", "The Tropper", "0", "iron_maiden_2.jpg");

	album("Ivete Sangalo", "Perfil", "0", "ivete_album.jpg");
	album("Jacson 5", "I want you back!", "0", "jacson_5.jpg");

	album("Los Hermanos", "Ventura", "1", "Los_Hermanos_3.jpg");
	album("Los Hermanos", "Quatro", "0", "Los_Hermanos_4.jpg");

	album("Metallica", "And Justice For All", "5", "metallica_2.jpg");
	album("Metallica", "Load", "0", "metallica_4.jpg");
	album("Metallica", "Reload", "0", "metallica_3.jpg");
	album("Metallica", "Ride the ligting", "0", "metallica_1.jpg");
	
	album("Michael Jacson", "Beat It", "1", "michael_1.jpg");
?>
</div>


<nav>
	<ul class="pagination clearfix">
	  <li><a href="#">&laquo;</a></li>
	  <li><a href="#">1</a></li>
	  <li><a href="#">2</a></li>
	  <li><a href="#">3</a></li>
	  <li class="active"><a href="#">4</a></li>
	  <li><a href="#">5</a></li>
	  <li><a href="#">&raquo;</a></li>
	</ul>
</nav>