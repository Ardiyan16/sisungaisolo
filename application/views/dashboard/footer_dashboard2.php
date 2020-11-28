<!-- END SIDEPANEL -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/plugins.js"></script>



<!-- ================================================
Data Tables
================================================ -->
<script src="<?php echo base_url().'assets_new/'; ?>js/datatables/datatables.min.js"></script>



<!-- ================================================
Below codes are only for index widgets
================================================ -->
<!-- Today Sales -->


 <script src="<?=base_url()?>assets/js/leaflet.js"></script>
  <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js"></script>
  <script src="<?=base_url()?>assets/js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.5/typeahead.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>
 
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>
    <script src="<?=base_url()?>assets/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.js"></script>
  <script src="<?=base_url()?>assets/pancontrol/L.Control.Pan.js" ></script>
  <script src="<?= base_url(); ?>assets/sweetalert/sweetalert.min.js"></script>

  <!--<script src="<?php echo base_url(); ?>/assets/autocomplate/lib/jquery-1.11.2.min.js"></script>-->
  <script src="<?php echo base_url(); ?>/assets/autocomplate/dist/jquery.easy-autocomplete.min.js" type="text/javascript" ></script> 

  <script>
  $("#usulan-btn").click(function() {
   $("#usulanModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  });
  
  $("#rekap-btn").click(function() {
   $("#rekapModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  });
  
  function rekap_terbangun_btn() {
   $("#rekapTerbangunModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  };
  
  function rekap_sungai_btn() {
   $("#rekapSungaiModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  };
  
  
  function rekap_ongoing_btn() {
   $("#rekapOngoingModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  };
  
  function rekap_eksternal_btn() {
   $("#rekapEksternalModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  };
  
  function rekap_internal_btn() {
   $("#rekapInternalModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  };
  
  $(".fakeRadio").click(function(){
    $(".fakeRadio").prop( "checked", false );
    $(this).prop( "checked", true );
  });
  
//   $(document).ready(function(){
//         $("input").change(function(){
//         $(this).parent().parent().removeClass('has-error');
//         $(this).next().empty();
//         });
//         $("textarea").change(function(){
//             $(this).parent().parent().removeClass('has-error');
//             $(this).next().empty();
//         });
//         $("select").change(function(){
//             $(this).parent().parent().removeClass('has-error');
//             $(this).next().empty();
//         });
//      });  
  
  function swal_berhasil() { swal({ title:"SUCCESS", text:"Berhasil", type: "success", closeOnConfirm: true}); }
  function swal_error(msg) { swal({ title:"ERROR", text: msg, type: "warning", closeOnConfirm: true});  }
  
   function save() {
        var url;
        url = "<?= site_url()?>peta/simpan/";
        //tinyMCE.triggerSave();
        $('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true);

        $.ajax({
            url : url, type: "POST", dataType: "JSON", data: $('#form').serialize(),
            success: function(data) {
                    setTimeout(function(){
                  $('#btn_close').click();
                }, 1000);
                    swal_berhasil();
                    $('#form')[0].reset();
               
                $('#btnSave').text('save'); $('#btnSave').attr('disabled',false);
            },
            error: function (jqXHR, textStatus, errorThrown) {
               swal_error(response.error);
            }
        });
    }
  
  var link = "<?php echo site_url('peta')?>";
  function kalipepe(id, id2, nama_sungai) {
    $('#myModal').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_sungai = id;
      var id_koordinat = id2;
      var sungai = document.getElementById("nama_sungai");
      sungai.innerHTML = 'Data '+nama_sungai;
      sungai.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load/"+id_sungai+"/"+id_koordinat,
          data :  'id_sungai='+ id_sungai,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data");
          a.innerHTML= data;//menampilkan data ke dalam modal
          a.style.display="block";
          }
      });
  }
     
  function infrastruktur_bangunan(id, nama_infrastruktur) {
    $('#Modal_bangunan').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_infrastruktur = id;
      // var id_koordinat = id2;
      var infrastruktur = document.getElementById("nama_infrastruktur");
      infrastruktur.innerHTML = 'Data '+nama_infrastruktur+'Konstruksi Terbangun';
      infrastruktur.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_bangunan/"+id_infrastruktur,
          data :  'id_infrastruktur='+ id_infrastruktur,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data2");
          a.innerHTML= data;//menampilkan data ke dalam modal
          a.style.display="block";
          }
      });
  }

  function infrastruktur_ongoing(id, nama_paket) {
    $('#Modal_ongoing').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_infrastruktur_ongoing = id;
      // var id_koordinat = id2;
      var ongoing = document.getElementById("nama_ongoing");
      ongoing.innerHTML = 'Data '+nama_paket+'Konstruksi Ongoing';
      ongoing.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_ongoing/"+id_infrastruktur_ongoing,
          data :  'id_infrastruktur_ongoing='+ id_infrastruktur_ongoing,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data3");
          a.innerHTML= data;//menampilkan data ke dalam modal
          a.style.display="block";
          }
      });
  }
  
  function usulan_eksternal(id, nama_usulan) {
    $('#Modal_eksternal').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_usulan = id;
      // var id_koordinat = id2;
      var usulan = document.getElementById("nama_usulan");
      usulan.innerHTML = 'Data '+nama_usulan+'Usulan Eksternal';
      usulan.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_eksternal/"+id_usulan,
          data :  'id_usulan='+ id_usulan,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data4");
          a.innerHTML= data;
          a.style.display="block";
          }
      });
  }
  
  function usulan_internal(id, detail_usulan) {
    $('#Modal_internal').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_usulan = id;
      // var id_koordinat = id2;
      var usulan = document.getElementById("detail_usulan");
      usulan.innerHTML = 'Data '+detail_usulan+'Usulan Internal';
      usulan.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_internal/"+id_usulan,
          data :  'id_usulan='+ id_usulan,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data5");
          a.innerHTML= data;
          a.style.display="block";
          }
      });
  }
  
var options = {
      data: [<?php
      $jj=0;
            foreach ($sungai as $value) { 
              echo '{"id_sungai":';
              echo '"'.  $value['nama_sungai'] .'", ';
              echo '"data_index":';
              echo '"'.  $jj .'" ';
              echo '},';
              $jj++;
            }
            ?>
            ],
            getValue: "id_sungai",
      data_marker:[
         
          <?php
            foreach ($sungai as $value) { ?>
              [
          "<?php echo $value['id_sungai']; ?>",
          "<?php echo base_url('detail/index/lokasi/'.$value['id_sungai']); ?>",
          "<?php echo $value['latitude_awal']; ?>",
          "<?php echo $value['longitude_awal']; ?>",
          "<?php echo $value['nama_sungai']; ?>",
           "<?php echo base_url('detail/print_data_sisda/'.$value['id_sungai']); ?>"
          ],
            <?php }


          ?>
       
        ],
      list: {
        maxNumberOfElements: <?php echo $jj+1; ?>,
        match: {
          enabled: true
        },
        onClickEvent: function() {
       
            var value = $("#square").getSelectedItemData().data_index;
            open_mark(value);
        },
        onChooseEvent: function() {
          var value = $("#square").getSelectedItemData().data_index;
            open_mark(value);
        }
      }


    };
   
    $("#square").easyAutocomplete(options);
    
    var markers = [];
    console.log(options.data_marker);
    var data_point=options.data_marker;
    var bangunan = new L.LayerGroup();
    var patok_swd1=new L.LayerGroup();
    var ongoing=new L.LayerGroup();
    var eksternal=new L.LayerGroup();
    var internal=new L.LayerGroup();
    var legend = L.control({position: 'bottomright'});
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
      
      unguIcon = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/ungu.png'});

 <?php foreach($bangunan as $key){ ?>
     
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: swd2}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><center><img src="<?php echo base_url().'data/img/bangunan/'.$key->foto_1; ?>" width="120"></center><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="infrastruktur_bangunan(<?php echo $key->id_infrastuktur.',\\\''.$key->nama_paket.'\\\''; ?>)"><?= $key->nama_paket;?></a><h5>').addTo(bangunan);
<?php } ?> 

<?php foreach($ongoing as $key){ ?>
     
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: pat2}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><center><img src="<?php echo base_url().'data/img/bangunan/'.$key->foto_1; ?>" width="120"></center><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="infrastruktur_ongoing(<?php echo $key->id_infrastruktur_ongoing.',\\\''.$key->nama_paket.'\\\''; ?>)"><?=$key->nama_paket;?></a><h5>').addTo(ongoing);
<?php } ?> 

<?php foreach($internal as $key){ ?>
     
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: rehabilitatif}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="usulan_internal(<?php echo $key->id_usulan.',\\\''.$key->detail_usulan.'\\\''; ?>)">Usulan Internal</a><h5>').addTo(internal);
<?php } ?> 


<?php foreach($eksternal as $key){ ?>
     
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: unguIcon}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="usulan_eksternal(<?php echo $key->id_usulan.',\\\''.$key->detail_usulan.'\\\''; ?>)">Usulan Eksternal</a><h5>').addTo(eksternal);
<?php } ?> 


var polylinePoints = [
  <?php $i=0; ?>
  <?php foreach($line_patok_new as $key){ ?>


      new L.LatLng(<?php echo $key->latitude_awal; ?>, <?php echo $key->longitude_awal; ?>),
 
  <?php $i++; } ?>


];

function info_window(id) {
    
     L.marker([data_point[id][2], data_point[id][3]],{icon: korektif}).addTo(map)
    .bindPopup(data_point[id][4])
    .openPopup();
    
}

//untuk line looping garis
var patok_geoJson = {
    "type": "FeatureCollection",
    "features": [
      <?php foreach ($line_patok_new as $key) { ?>
        {
            "type": "Feature",
            "geometry": {
                "type": "LineString",
                "coordinates": [

                  [<?php echo $key->longitude_awal; ?>, <?php echo $key->latitude_awal; ?>],
                  [<?php echo $key->longitude_akhir; ?>, <?php echo $key->latitude_akhir; ?>]


                ]
            },
            "properties": {
                // "popupContent": '<center><a href="#myModal" class="btn btn-default btn-small" id="custId" data-toggle="modal" data-id="<?php echo $key->id_sungai; ?>"><?php echo $key->nama_sungai; ?></a></center>',
                "popupContent": '<center><img src="<?php echo base_url().'data/img/bangunan/'.$key->foto_1; ?>" width="120"></center><center><br/> <a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="kalipepe(<?php echo $key->id_sungai.','.$key->id_koordinat.',\\\''.$key->nama_sungai.'\\\''; ?>)"><?php echo $key->nama_sungai; ?></a></center>',
                "underConstruction": false,
            },
            "id": 1
        },
      <?php } ?>
    ]
};

var patok_geoJson_kanan = {
    "type": "FeatureCollection",
    "features": [
      <?php foreach ($line_patok_beng as $key) { ?>
        {
            "type": "Feature",
            "geometry": {
                "type": "LineString",
                "coordinates": [

         [<?php echo $key->longitude_awal; ?>, <?php echo $key->latitude_awal; ?>],
                  [<?php echo $key->longitude_akhir; ?>, <?php echo $key->latitude_akhir; ?>]


                ]
            },
            "properties": {
                "popupContent": '',
                "underConstruction": false,
            },
            "id": 1
        },
      <?php } ?>
    ]
};
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
     
     function onEachFeature2(feature, layer) {
      var popupContent = "<h4><center>Sungai Bengawan Solo</center></h4>" ;

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


  var vektor_patok=  L.geoJSON(patok_geoJson, {
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


      var vektor_patok_beng_solo=  L.geoJSON(patok_geoJson_kanan, {
          style: style_garis,
          filter: function (feature, layer) {
            if (feature.properties) {
              // If the property "underConstruction" exists and is true, return false (don't render features under construction) oyi
              return feature.properties.underConstruction !== undefined ? !feature.properties.underConstruction : true;
            }
            return false;
          },

          onEachFeature: onEachFeature2,

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
      'Sungai':patok_swd1,
      "Infranstruktur Terbangun": bangunan,
      "Infranstruktur Ongoing": ongoing,
      "Usulan Internal": internal,
      "Usulan Eksternal": eksternal
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
             
function getColor(d) {
    return d > 1000 ? '#800026' :
           d > 500  ? '#BD0026' :
           d > 200  ? '#E31A1C' :
           d > 100  ? '#FC4E2A' :
           d > 50   ? '#FD8D3C' :
           d > 20   ? '#FEB24C' :
           d > 10   ? '#FED976' :
                      '#FFEDA0';
}

function style(feature) {
    return {
      weight: 2,
      opacity: 1,
      color: 'white',
      dashArray: '3',
      fillOpacity: 0.7,
      fillColor: getColor(feature.properties.density)
    };
  }

 legend.onAdd = function (map) {

    var div = L.DomUtil.create('div', 'info legend'),
        grades = [0, 10, 20, 50, 100, 200, 500, 1000],
        labels = [];

   
        div.innerHTML +=
            '<div class="card-header"><strong><small class="card-title"><i class="fa fa-window-restore fa-fw" aria-hidden="true"></i> Legend</small></strong> </div><table class="table table-bordered table-sm table-legend"> <tbody><tr><td class="ket-center"><img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/marker-green.png" style="position: relative;height: 27px;width: 23px;margin-left: 11px;"></td><td>Infrastruktur Terbangun</td><td class="ket-center"> <img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/coklat_emas.png" style="position: relative;height: 27px;width: 23px;margin-left: 11px;"></td><td>Infrastruktur Ongoing</td></tr><tr><td class="ket-center"> <img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/ungu.png" style="position: relative;height: 27px;width: 23px;margin-left: 11px;"></td> <td>Usulan Eksternal</td><td class="ket-center"><img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/rehabilitatif.png" style="position: relative;height: 27px;width: 23px;margin-left: 11px;"></td> <td>Usulan Internal</td> </tr></tbody></table>';
    return div;
};

legend.addTo(map);     
  
  
function open_mark(id) {

       // infowindow.close();
        
        console.log(id);

        for (var i = 0; i < data_point.length; i++) {
            // gmarkers[locations[i][0]] =
            // createMarker(new google.maps.LatLng(locations[i][2], locations[i][3]), locations[i][0] + "<br>" + locations[i][1]);

            if (i==id) {

             //new L.LatLng([-7.576951248, 110.8439344]);
           //  map.setCenter( new L.LatLng(-7.571994177, 110.836189));
             map.panTo(new L.LatLng(data_point[i][2],data_point[i][3]));
              
            //   var latlng = new google.maps.LatLng(-7.576951248, 110.8439344);
            //   map.setCenter(latlng);
        

           //   map.panTo(markers[i].getPosition());
              map.setZoom(13);
              //infowindow.close();
             // show_mark(i);
              info_window(i);



            }


        }

      }

      
      function show_mark(id) {
        markers[id].setVisible(true);
      }  
  </script>



</body>

<!-- Mirrored from egemem.com/theme/kode/v1.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jun 2018 08:04:13 GMT -->
</html>