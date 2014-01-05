<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Header -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><h1>Rocksmith Custom Songs</h1></a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
    	<!-- Menu Right Colum -->
          <ul class="nav navbar-nav side-nav">
	            <li><a href="index.html"><i class="fa fa-search"></i> Search</a></li>
	            <li><a href="index.html"><i class="fa fa-music"></i> Songs</a></li>
	            <li><a href="index.html"><i class="fa fa-users"></i> Artists</a></li>
	            <li class="<?php echo isset($_GET['albums'])? "active" : "" ?>">
	            	<a href="index.php?albums"><i class="fa fa-toggle-right"></i> Albuns</a>
	            </li>
	            <li><a href="index.html"><i class="fa fa-pencil"></i> Request</a></li>
	            <li><a href="index.html"><i class="fa fa-star"></i> Approved</a></li>
	            <li><a href="index.html"><i class="fa fa-info-circle"></i> About this</a></li>
	            <li><a href="http://forums.smithyanvil.com/"><i class="fa fa-list-alt"></i> Forum</a></li>
          </ul>

		  <!-- Menu Top Header -->
          <ul class="nav navbar-nav navbar-right navbar-user">
    		    <li class="dropdown alerts-dropdown">
              		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="sr-only">Alerts</span> <span class="badge">3</span> <b class="caret"></b></a>
              		<ul class="dropdown-menu">
                		<li><a href="#">3 new versions</a></li>
              		</ul>
        		</li>
	            <li class="dropdown user-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> SrMouraSilva <b class="caret"></b></a>
	            	<ul class="dropdown-menu">
	                	<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
		                <li><a href="#"><i class="fa fa-plus"></i> New Music</a></li>
		                <li><a href="#"><i class="fa fa-plus-circle"></i> New Version</a></li>
		                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
		                <li class="divider"></li>
		                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
	                </ul>
	            </li>
      	  </ul>
    </div>
</nav>