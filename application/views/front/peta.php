<!DOCTYPE html>
<html>
<head>
	<title>GIS PU</title>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.css">
	<script src="<?=base_url()?>assets/js/jquery-2.1.4.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>assets/js/leaflet.js"></script>
	<script src="<?=base_url()?>assets/pancontrol/L.Control.Pan.js" ></script>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/leaflet.css" />

	<link rel="stylesheet" href="<?=base_url()?>assets/pancontrol/L.Control.Pan.css" />


</head>
<body>
<div></div>

<div class="nav-tabs-custom">

	<div class="panel panel-success">

	

		<div class="tab-content">
	    	<div class="tab-pane active" id="tab_1-1">
	            <div id="map" style="width: 100%; height: 700px"></div>
	        </div><!-- /.tab-pane -->
	        <div class="tab-pane" id="tab_2-2">

	        </div><!-- /.tab-pane -->

			<div id="map2" style="width: 100%; height: 700px;"></div>
	    </div><!-- /.tab-content -->
	</div>



</div>






	<script>

		var bangunan = new L.LayerGroup();
		var patok_swd1=new L.LayerGroup();
		var LeafIcon = L.Icon.extend({
			options: {
				shadowUrl: '<?=base_url()?>assets/img/leaflet/marker-shadow.png',
				iconSize:     [25, 40],
				shadowSize:   [50, 64],
				iconAnchor:   [15, 47],
				shadowAnchor: [18, 68],
				popupAnchor:  [-3, -76]
			}
		});

		var swd1 = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/marker-icon-2x.png'}),
			swd2 = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/marker-green.png'}),
			pat1 = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/ungu.png'}),
			pat2 = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/coklat_emas.png'}),
			rutin = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/rutin.png'}),
			preventif = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/preventif.png'}),
			rehabilitatif = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/rehabilitatif.png'}),
			korektif = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/korektif.png'}),
			orangeIcon = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/leaf-orange.png'});

		<?php foreach($bangunan as $key){ ?>
			<?php if ($key->swd==1) { ?>
				<?php
					$marker="";

					if ($key->pemeliharaan=="Rutin") {
						$marker="rutin";
					}elseif ($key->pemeliharaan=="Preventif") {
						$marker="preventif";
					}elseif ($key->pemeliharaan=="Korektif") {
						$marker="korektif";
					}
					else{
						$marker="rehabilitatif";
					}
				?>
				L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: <?php echo $marker; ?>}).bindPopup('<h5 style="text-align:center;"><b> SWD 1</b></h5><h5 style="text-align:center;">Bangunan<h5><a href="<?=base_url()?>bangunan_/foto/<?=$key->id_bangunan?>"><center><?=$key->nama_bangunan?><center></a>').addTo(bangunan);
		<?php } ?>
<?php } ?>


var polylinePoints = [
	<?php $i=0; ?>
	<?php foreach($patok as $key){ ?>

	<?php if ($key->swd==1) { ?>
		  new L.LatLng(<?php echo $key->latitude; ?>, <?php echo $key->longitude; ?>),
	<?php } ?>
	<?php $i++; } ?>


];



//untuk line looping garis
var patok_geoJson = {
    "type": "FeatureCollection",
    "features": [
			<?php foreach ($line_patok_1 as $key) { ?>
				{
            "type": "Feature",
            "geometry": {
                "type": "LineString",
                "coordinates": [

									[<?php echo $key->longitude; ?>, <?php echo $key->latitude; ?>],
                  [<?php echo $key->longitude2; ?>, <?php echo $key->latitude2; ?>]


                ]
            },
            "properties": {
                "popupContent": '<center><a href="<?php echo base_url('patok/tanggul/'.$key->id_patok)  ?>" ><?php echo $key->nama_prasarana; ?></a></center>',
                "underConstruction": false,
								"pemeliharaan": "<?php echo $key->pemeliharaan; ?>"
            },
            "id": 1
        },
			<?php } ?>
    ]
};

 // var patok_geoJson = [
 //            <?php foreach ($line_patok_1 as $key) { ?>
 //            new L.LatLng(<?php echo $key->longitude; ?>, <?php echo $key->latitude; ?>),
 //            new L.LatLng(<?php echo $key->longitude2; ?>, <?php echo $key->latitude2; ?>),
 //            <?php } ?>
 //         ];

var patok_geoJson_kanan = {
    "type": "FeatureCollection",
    "features": [
			<?php foreach ($line_patok_1 as $key) { ?>
				{
            "type": "Feature",
            "geometry": {
                "type": "LineString",
                "coordinates": [

									[<?php echo $key->longitude_kanan; ?>, <?php echo $key->latitude_kanan; ?>],
                  [<?php echo $key->longitude_kanan2; ?>, <?php echo $key->latitude_kanan2; ?>]


                ]
            },
            "properties": {
                "popupContent": '<center><a href="<?php echo base_url('patok/tanggul/'.$key->id_patok)  ?>" ><?php echo $key->nama_prasarana; ?></a></center>',
                "underConstruction": false,
								"pemeliharaan": "<?php echo $key->pemeliharaan; ?>"
            },
            "id": 1
        },
			<?php } ?>
    ]
};




		<?php
			foreach ($patok as $key) {

				if ($key->swd==1) { ?>
					<?php
					$marker="";

					if ($key->pemeliharaan=="Rutin" || $key->pemeliharaan=="rutin") {
						$marker="rutin";
					}elseif ($key->pemeliharaan=="Preventif" || $key->pemeliharaan=="preventif") {
						$marker="preventif";
					}elseif ($key->pemeliharaan=="Korektif" || $key->pemeliharaan=="korektif") {
						$marker="korektif";
					}
					else{
						$marker="rehabilitatif";
					}
				?>
					//L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: <?php echo $marker; ?>}).bindPopup('<h5><center>SWD 1 <br> Patok</center></h5><a href="<?=base_url()?>patok/tanggul/<?=$key->id_patok?>"><center><?=$key->nama_prasarana?><center></a>').addTo(patok_swd1);


			<?php	};
			}
		?>



		function onEachFeature(feature, layer) {
			 var popupContent = "<h4><center>Klik Untuk Lihat Detail Data</center></h4>" ;

			 if (feature.properties && feature.properties.popupContent) {
				 popupContent += feature.properties.popupContent;
			 }

			 layer.bindPopup(popupContent);
			 layer.on({
			    mouseover: highlightFeature,
			    mouseout: resetHighlight,

			  });
		 }
		var style_patok_line = {
				"color": "#aa55ff",
				"weight": 5,
				"opacity": 0.8
		};
function highlightFeature(e) {
  var layer = e.target;

  layer.setStyle({
    weight: 7,
    color: '#3f51b5',
    dashArray: '',
    fillOpacity: 1.0
  });

}

function resetHighlight(e) {
  vektor_patok.resetStyle(e.target);
}


	var vektor_patok=	 L.geoJSON(patok_geoJson, {
			 style: style_garis,
			 filter: function (feature, layer) {
				 if (feature.properties) {
					 // If the property "underConstruction" exists and is true, return false (don't render features under construction) oyi
					 return feature.properties.underConstruction !== undefined ? !feature.properties.underConstruction : true;
				 }
				 return false;
			 },

			 onEachFeature: onEachFeature,

		 }).addTo(patok_swd1);


		 var vektor_patok_kanan_swd1=	 L.geoJSON(patok_geoJson_kanan, {
	 			 style: style_garis,
	 			 filter: function (feature, layer) {
	 				 if (feature.properties) {
	 					 // If the property "underConstruction" exists and is true, return false (don't render features under construction) oyi
	 					 return feature.properties.underConstruction !== undefined ? !feature.properties.underConstruction : true;
	 				 }
	 				 return false;
	 			 },

	 			 onEachFeature: onEachFeature,

	 		 }).addTo(patok_swd1);

		 function style_garis(feature){
			 if (feature){
				 switch (feature.properties.pemeliharaan) {
 		      case 'Rehabilitatif':
 		        return {
							color: '#ed3237',
 		          weight: '2.2',

 		          opacity: '0.8',
 		        };
 		        break;
 		      case 'Korektif':
 		        return {
							color: '#fff212',
 						 	weight: '2.2',

 						 	opacity: '0.8',
 		        };
 		        break;
 		      case 'Preventif':
 		        return {
 		          color: '#00a859',
 		          weight: '2.2',

 		          opacity: '0.8',
 		        };
 		        break;
					case 'Rutin':
	 		        return {
								color: '#00afef',
	 						 	weight: '2.2',

	 						 	opacity: '0.8',
	 		        };
	 		       break;
 		    }
			 }

		}


		var mbAttr = '',
			mbUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';


var googlestreet = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
            maxZoom: 18
         }),

    googlesatellite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 18,
    subdomains:['mt0','mt1','mt2','mt3']
});


		var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
			streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

		var map = L.map('map', {
			center: [-7.576951248, 110.84393439],
			zoom: 12,
			layers: [googlestreet, patok_swd1]
		});


var baseMaps = {
    "Google Street Map": googlestreet,
    "Google Satellite Map": googlesatellite
};


		var baseLayers = {

		};

		var overlays = {
			"Bangunan SWD 1": bangunan,
			'Patok SWD 1':patok_swd1
		};

		L.control.layers(baseMaps, overlays).addTo(map);
var baseMaps = {
    "<span style='color: gray'>Google Street Map</span>": googlestreet,
    "Google Satellite Map": googlesatellite
};

		var polylineOptions = {
               color: 'blue',
               weight: 3,
               opacity: 0.9
             };

         var polyline = new L.Polyline(polylinePoints, polylineOptions);

         //map.addLayer(polyline);















		L.control.layers(baseLayers, overlays).addTo(map2);
























		$(document).ready(function(){
		    $("#swd2").click(function(){
		        $("#map2").show();
		    });
		    $("#swd1").click(function(){
		        $("#map2").hide();
		    });

		    $("#map2").hide();
		});


	</script>




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
      <a class="navbar-brand" href="#">Data Rekap</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('bangunan_/rekap_swd1')?>">Rekap SWD1</a></li>
        <li><a href="<?php echo base_url('bangunan_/rekap_swd2')?>">Rekap SWD2</a></li>

      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</body>
</html>
