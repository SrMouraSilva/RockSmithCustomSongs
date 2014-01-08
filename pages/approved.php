<?php
function song($music, $band, $album, $imgFile) {?>
	<div class="col-lg-3 col-md-4 col-sm-6">
  	<div class="album clearfix">
      	<div class="col-xs-6"><img width="100%" src="imgs/capas/<?php echo "$imgFile"; ?>" /></div>
      	<div class="inform col-xs-6">
      		<ul>
      			<li><b><?php echo $music; ?></b><br /><br /></li>
 				<li><?php echo $band; ?></li>
				<li><?php echo $album; ?><br /><br /></li>
    			<li class="contain">
    				<i class="fa fa-star" title="Approved" style="color:#F3B562; text-shadow: 1px 1px 3px #000000;"></i>
    				<img src="imgs/icoRS2012.png" style="vertical-align: text-top;" title="RS2012" />
    				<img src="imgs/icoRS2014.png" style="vertical-align: text-top;" title="RS2014" />
    				<span title="Guitar">G</span>
    				<span title="Bass">B</span>
    				<span title="Riff Repeater">rr</span>
    				<i class="fa fa-microphone" title="Lyric"></i>
    			</li>
			</ul>
      	</div>
  	</div>
  </div>
<?php } ?>


<header class="green">
	<h2><i class="fa fa-star"></i> Songs Approveds</h2>

	<form class="form-horizontal" role="form">
	  <div class="form-group">
	    <label for="search" class="col-sm-2 control-label">Search</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" id="search" placeholder="Artist, album our song name">
	    </div>
	    <div class="col-sm-2">
	      <input type="submit" class="form-control" value="Find">
	    </div>
	  </div>
	</form>

	<p>
		<a data-toggle="collapse" href="#content">Approval criteria (click to show):</a>
		<div id="content">
			<ol>
				<li>Proper labeling, artwork, sorting, etc.. Good audio quality;</li>
				<li>All instruments in a song charted. Vocals if there is any singing;</li>
				<li>Have Sections + Phrases = Dynamic difficulties for all arrangements. This also includes Riff Repeater showing up properly;</li>
				<li>Custom tones and Associated techniques;</li>
				<li>Audio preview, song ends, no major faults or missing features.</li>
			</ol>
			<span class="pull-right"> &ndash; Majere</span>
		</div>
	</p>
	<script> window.onload = function() { $('#content').collapse('hide'); } </script>
</header>



<div class="row">
<?php
	song("Welcome to the Jungle", "Guns n'Roses", "Appetite for Destruction", "guns_1.jpg");
	song("My Michelle", "Guns n'Roses", "Appetite for Destruction", "guns_1.jpg");
	song("Rocket Queen", "Guns n'Roses", "Appetite for Destruction", "guns_1.jpg");
?>
</div>


<nav>
	<ul class="pagination clearfix">
	  <li><a href="#">&laquo;</a></li>
	  <li class="active"><a href="#">1</a></li>
	  <li><a href="#">&raquo;</a></li>
	</ul>
</nav>