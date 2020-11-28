<!DOCTYPE html>
<html>
<head>
	<title>Gis</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.css">
	<script src="<?=base_url()?>assets/js/jquery-2.1.4.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
 
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?=base_url()?>peta"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Peta</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li <?php if ($menu_aktif=='foto') {
	        	echo 'class="active"';
	        } ?> ><a href="<?=base_url()?>bangunan_/foto/<?=$id_bangunan?>">Foto Bangunan<span class="sr-only">(current)</span></a></li>
	        <li <?php if ($menu_aktif=='detail_bangunan') {
	        	echo 'class="active"';
	        } ?>><a href="<?=base_url()?>bangunan_/detail/<?=$id_bangunan?>">Detail Bangunan</a></li>
	       
	       
	      </ul>
	     
	      <ul class="nav navbar-nav navbar-right">
	       <!--  <li><a href="<?=base_url()?>auth_/logout">Keluar</a></li> -->
	        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>