<?php
function song($music, $band, $album, $imgFile) {?>
	<div class="col-lg-3 col-md-4 col-sm-6">
  	<div class="album clearfix">
      	<div class="col-xs-6"><img width="100%" src="imgs/capas/<?php echo "$imgFile"; ?>" /></div>
      	<div class="inform">
      		<ul>
      			<li><b><?php echo $music; ?></b><br /><br /></li>
 				<li><?php echo $band; ?></li>
				<li><?php echo $album; ?><br /><br /></li>
    			<li class="contain">
    				<img src="imgs/icoRS2012.png" style="vertical-align: text-top;" title="RS2012" />
    				<img src="imgs/icoRS2014.png" style="vertical-align: text-top;" title="RS2014" />
    				<span title="Guitar">G</span>
    			</li>
			</ul>
      	</div>
  	</div>
  </div>
<?php } ?>


<header class="blue">
	<h2><i class="fa fa-music"></i> Songs</h2>

	<form class="form-horizontal" role="form">
	  <div class="form-group">
	    <label for="search" class="col-sm-2 control-label">Search by song</label>
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
	song("Wrathchild", "Iron Maden", "Killers", "iron_maiden_1.jpg");
	song("The Ides of March", "Iron Maden", "Killers", "iron_maiden_1.jpg");
	song("Innocent Exile", "Iron Maden", "Killers", "iron_maiden_1.jpg");
	song("Killers", "Iron Maden", "Killers", "iron_maiden_1.jpg");
	song("Prodigal Son", "Iron Maden", "Killers", "iron_maiden_1.jpg");
?>
</div>


<nav>
	<ul class="pagination clearfix">
	  <li><a href="#">&laquo;</a></li>
	  <li class="active"><a href="#">1</a></li>
	  <li><a href="#">&raquo;</a></li>
	</ul>
</nav>