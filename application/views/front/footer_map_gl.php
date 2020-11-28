<!-- <div class="loader loader--style1" title="0" id="loader">
        <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
            <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z" />
            <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
    C22.32,8.481,24.301,9.057,26.013,10.047z">
                <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite" />
            </path>
        </svg>
    </div> -->

    </html>

<script type="text/javascript">
var link = "<?php echo site_url('peta_dashboard')?>";
var link2 = "<?php echo site_url('peta')?>";
"use strict";
$(document).ready(function (e) {
   google.maps.event.addDomListener(window, 'load', mapInit);
  
  var path = location.pathname;
  $('.navbar-nav').find('li a').each(function () {

    if ($(this).attr('href') == path) {
      if ($(this).attr('class') == "dropdown-item") {
        $(this).addClass('active');
        $(this).parents('li.nav-item').addClass('active');
      } else {
        $(this).parents('li.nav-item').addClass('active')
      }
    }
  });
});


var infowindow = null;

function removeChildComp(id) {
  let node = document.getElementById(id);
  while (node.hasChildNodes()) {
    node.removeChild(node.lastChild)
  }
}
function getCircle(e) {
  return {
    path: google.maps.SymbolPath.CIRCLE,
    fillColor: e,
    fillOpacity: 1,
    scale: Math.pow(2, 3.8) / 2,
    strokeColor: "white",
    strokeWeight: .5
  }
}

function resetLayerSearch() {
  $.each(layerSearch, function (e, a) {
    null != a && (a.setMap(null), a.revertStyle())
  })
}

function resetLayer() {
  $.each(layer, function (e, a) {
    null != a && (a.setMap(null), a.revertStyle())
  })
}

// var headers_app = {
//   Authorization: $('meta[name="app_key"]').attr("content")
// };
// var map, ntb = {
//   lat: -8.747973,
//   lng: 117.780988
// },
//   layer = {},
//   layerSearch = {};

function drawMataAir(e, a, t, n) {
  
  e.setMap(n);
  var r = "<?php echo base_url('peta_dashboard/api_infrastruktur_ongoing')?>";
   $.ajax({
    method: "GET",
    url: r,
    cache: !1,
    processData: !1,
    async: !0,
    //headers: headers_app,
    success: function (a) {
     // console.log(JSON.parse(a));
    // console.log('e',e);
      e.addGeoJson(JSON.parse(a))
    }
  }), addMataAirFunc(e, n), e.setStyle(function (e) {
    return {
      icon: {
        url: "https://cdn.mapmarker.io/api/v1/pin?size=120&background=%239F0500&icon=fa-wrench&color=%23FFFFFF&voffset=0&hoffset=1&",
        size: new google.maps.Size(24, 24),
        scaledSize: new google.maps.Size(24, 24)
      }
    }
  })
}

function drawInfrastrukturTerbangun(e, a, t, n) {
  
  e.setMap(n);
  var r = "<?php echo base_url('peta_dashboard/api_infrastruktur_terbangun')?>";
   $.ajax({
    method: "GET",
    url: r,
    cache: !1,
    processData: !1,
    async: !0,
    //headers: headers_app,
    success: function (a) {
     // console.log(JSON.parse(a));
    // console.log('e',e);
      e.addGeoJson(JSON.parse(a))
    }
  }), addInfrastrukturTerbangunFunc(e, n), e.setStyle(function (e) {
    return {
      icon: {
        url: "https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23808900&icon=fa-building&color=%23FFFFFF&voffset=0&hoffset=1&",
        size: new google.maps.Size(24, 24),
        scaledSize: new google.maps.Size(24, 24)
      }
    }
  }), Pace.restart()
}

function drawPintu(e, a, t, n) {
  
  e.setMap(n);
  var r = "<?php echo base_url('peta_dashboard/api_pintu')?>";
   $.ajax({
    method: "GET",
    url: r,
    cache: !1,
    processData: !1,
    async: !0,
    //headers: headers_app,
    success: function (a) {
     // console.log(JSON.parse(a));
    // console.log('e',e);
      e.addGeoJson(JSON.parse(a))
    }
  }), addPintuFunc(e, n), e.setStyle(function (e) {
    return {
      icon: {
        url: "https://cdn.mapmarker.io/api/v1/pin?size=120&background=%230062B1&icon=fa-tv&color=%23FFFFFF&voffset=0&hoffset=1&",
        size: new google.maps.Size(24, 24),
        scaledSize: new google.maps.Size(24, 24)
      }
    }
  })
}

function drawRevertmen(e, a, t, n){
  e.setMap(n);
  var r = "<?php echo base_url('peta_dashboard/api_revertmen')?>";
   $.ajax({
    method: "GET",
    url: r,
    cache: !1,
    processData: !1,
    async: !0,
    //headers: headers_app,
    success: function (a) {
     // console.log(JSON.parse(a));
    // console.log('e',e);
      e.addGeoJson(JSON.parse(a))
    }
  }), addRevertmenFunc(e, n), e.setStyle(function (e) {
    return {
      icon: {
        url: "https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23653294&icon=fa-bookmark&color=%23FFFFFF&voffset=0&hoffset=1&",
        size: new google.maps.Size(24, 24),
        scaledSize: new google.maps.Size(24, 24)
      }
    }
  })
}

function drawTebing(e, a, t, n){
  e.setMap(n);
  var r = "<?php echo base_url('peta_dashboard/api_tebing')?>";
   $.ajax({
    method: "GET",
    url: r,
    cache: !1,
    processData: !1,
    async: !0,
    //headers: headers_app,
    success: function (a) {
     // console.log(JSON.parse(a));
    // console.log('e',e);
      e.addGeoJson(JSON.parse(a))
    }
  }), addTebingFunc(e, n), e.setStyle(function (e) {
    return {
      icon: {
        url: "https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23FCDC00&icon=fa-industry&color=%23FFFFFF&voffset=0&hoffset=1&",
        size: new google.maps.Size(24, 24),
        scaledSize: new google.maps.Size(24, 24)
      }
    }
  })
}

function drawCekdam(e, a, t, n){
  e.setMap(n);
  var r = "<?php echo base_url('peta_dashboard/api_cekdam')?>";
   $.ajax({
    method: "GET",
    url: r,
    cache: !1,
    processData: !1,
    async: !0,
    //headers: headers_app,
    success: function (a) {
     // console.log(JSON.parse(a));
    // console.log('e',e);
      e.addGeoJson(JSON.parse(a))
    }
  }), addCekdamFunc(e, n), e.setStyle(function (e) {
    return {
      icon: {
        url: "https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23FB9E00&icon=fa-map&color=%23FFFFFF&voffset=0&hoffset=1&",
        size: new google.maps.Size(24, 24),
        scaledSize: new google.maps.Size(24, 24)
      }
    }
  })
}

function drawTanggul(e, a, t, n, r) {
  e.setMap(n);
  var o = "<?php echo base_url('peta_dashboard/api_koordinat_tanggul')?>";
   $.ajax({
    method: "GET",
    url: o,
    cache: !1,
    processData: !1,
    async: !0,
    //headers: headers_app,
    success: function (a) {
      e.addGeoJson(JSON.parse(a))
    }
  }), addTanggulFunc(e, n), e.setStyle(function (e) {
    var a = e.getProperty("color");
    return {
      strokeColor: a,
      strokeWeight: 2,
      zIndex: 2
    }
  })
}

function drawSungai(e, a, t, n, r) {
  e.setMap(n);
  var o = "<?php echo base_url('peta_dashboard/api_koordinat_sungai')?>";
   $.ajax({
    method: "GET",
    url: o,
    cache: !1,
    processData: !1,
    async: !0,
    //headers: headers_app,
    success: function (a) {
      //a = []; 
      //var jsondata = [a];
      a = a.replace(/\\n/g, "\\n")  
               .replace(/\\'/g, "\\'")
               .replace(/\\"/g, '\\"')
               .replace(/\\&/g, "\\&")
               .replace(/\\r/g, "\\r")
               .replace(/\\t/g, "\\t")
               .replace(/\\b/g, "\\b")
               .replace(/\\f/g, "\\f");
      // remove non-printable and other non-valid JSON chars
      a= a.replace(/[\u0000-\u001F]+/g,""); 
      e.addGeoJson(JSON.parse(a));
    }
  }), addSungaiFunc(e, n), e.setStyle(function (e) {
    var a = e.getProperty("color");
    return {
      strokeColor: a,
      strokeWeight: 2,
      zIndex: 2
    }
  })
}


function tapToPolygon(e) {
  var a = new google.maps.LatLngBounds;
  e.addListener("addfeature", function (e) {
    "Polygon" == e.feature.getGeometry().getType() ? e.feature.getGeometry().getArray().forEach(function (e) {
      e.getArray().forEach(function (e) {
        a.extend(e)
      })
    }) : e.feature.getGeometry().getArray().forEach(function (e) {
      e.getArray().forEach(function (e) {
        e.getArray().forEach(function (e) {
          a.extend(e)
        })
      })
    }), map.setCenter(a.getCenter())
  })
}

function tapToPoint(e, a) {
  e.addListener("addfeature", function (e) {
    a.setCenter(e.feature.getGeometry().get())
  })
}

function tapToLineString(e, a) {
  var t = new google.maps.LatLngBounds;
  e.addListener("addfeature", function (e) {
    e.feature.getGeometry().getArray().forEach(function (e) {
      t.extend(e)
    }), a.setCenter(t.getCenter())
  })
}

var map, ntb = {
  lat: -7.576951248,
  lng: 110.84393439
},
  layer = {},
  cachedGeoJson,
  colorValues = [
	
  "red", //1
  "blue", //2
  "green", //3
  "brown", //4
  "purple", //5
  "pink" //6
],
invertedColorValues = [

  "pink", //1
  "purple", //2
  "brown", //3
  "green", //4
  "blue", //5
  "red"//6         
],
  layerSearch = {};

function mapInit() {
  function e() {
    resetLayer(), $("#sda").prop("checked", !1), $("#sda").trigger("change");
    var e = $("#search_layer #search").val(),
      a = $("#search_layer #layer").val();
    if ("none" == a) return void alert("Mohon pilih layer terlebih dahulu");
    if ("undefined" == typeof e || "" == e) return void alert("Mohon masukkan keyword terlebih dahulu");
    if ("mataair" == a) {
      if (resetLayerSearch(), "undefined" == typeof layerSearch.mataair) {
        var l = new google.maps.Data;
        drawMataAir(l, e, null, map), layerSearch.mataair = l, tapToPoint(l, map)
      } else drawMataAir(layerSearch.mataair, e, null, map), tapToPoint(layerSearch.mataair, map);
    }else if ("infrastruktur_terbangun" == a) {
      if (resetLayerSearch(), "undefined" == typeof layerSearch.infrastruktur_terbangun) {
        var l = new google.maps.Data;
        drawInfrastrukturTerbangun(l, e, null, map), layerSearch.infrastruktur_terbangun = l, tapToPoint(l, map)
      } else drawInfrastrukturTerbangun(layerSearch.infrastruktur_terbangun, e, null, map), tapToPoint(layerSearch.infrastruktur_terbangun, map);
    }else if ("pintu" == a) {
      if (resetLayerSearch(), "undefined" == typeof layerSearch.pintu) {
        var l = new google.maps.Data;
        drawPintu(l, e, null, map), layerSearch.pintu = l, tapToPoint(l, map)
      } else drawPintu(layerSearch.pintu, e, null, map), tapToPoint(layerSearch.pintu, map);
    } else if ("revertmen" == a) {
      if (resetLayerSearch(), "undefined" == typeof layerSearch.revertmen) {
        var l = new google.maps.Data;
        drawRevertmen(l, e, null, map), layerSearch.revertmen = l, tapToPoint(l, map)
      } else drawRevertmen(layerSearch.revertmen, e, null, map), tapToPoint(layerSearch.revertmen, map);
    } else if ("tebing" == a) {
      if (resetLayerSearch(), "undefined" == typeof layerSearch.tebing) {
        var l = new google.maps.Data;
        drawTebing(l, e, null, map), layerSearch.tebing = l, tapToPoint(l, map)
      } else drawTebing(layerSearch.tebing, e, null, map), tapToPoint(layerSearch.tebing, map);
    }else if ("cekdam" == a) {
      if (resetLayerSearch(), "undefined" == typeof layerSearch.cekdam) {
        var l = new google.maps.Data;
        drawCekdam(l, e, null, map), layerSearch.cekdam = l, tapToPoint(l, map)
      } else drawCekdam(layerSearch.cekdam, e, null, map), tapToPoint(layerSearch.cekdam, map);
    }else if ("tanggul" == a) {
			resetLayerSearch();
      var o = new google.maps.Data;
      drawTanggul(o, e, null, map, !0), layerSearch.tanggul = o, tapToLineString(o, map)
    }else if ("sungai" == a) {
			resetLayerSearch();
      var o = new google.maps.Data;
      drawSungai(o, e, null, map, !0), layerSearch.sungai = o, tapToLineString(o, map)
    }  
  }
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 9,
    center: ntb
  }), map.setTilt(45), $("#search_layer #btn-search").click(function (a) {
    e()
  }), $("#search_layer").bind("enterKey", function (a) {
    e()
  }), $("#search_layer").keyup(function (e) {
    13 == e.keyCode && $(this).trigger("enterKey")
  }), $("#daftar-layer-content #mataair").change(function (e) {

    if (resetLayerSearch(), e.preventDefault(), $(this).prop("checked")) {
      var a = new google.maps.Data;
      ("undefined" == typeof layer.mataair || null == layer.mataair) && (drawMataAir(a, null, null, map), layer.mataair = a)
    } else "undefined" != typeof layer.mataair && (null != layer.mataair && (layer.mataair.setMap(null), layer.mataair.revertStyle()), layer.mataair = null)
  
  }), $("#daftar-layer-content #infrastruktur_terbangun").change(function (e) {

    if (resetLayerSearch(), e.preventDefault(), $(this).prop("checked")) {
      var a = new google.maps.Data;
      ("undefined" == typeof layer.infrastruktur_terbangun || null == layer.infrastruktur_terbangun) && (drawInfrastrukturTerbangun(a, null, null, map), layer.infrastruktur_terbangun = a)
    } else "undefined" != typeof layer.infrastruktur_terbangun && (null != layer.infrastruktur_terbangun && (layer.infrastruktur_terbangun.setMap(null), layer.infrastruktur_terbangun.revertStyle()), layer.infrastruktur_terbangun = null)

  }),$("#daftar-layer-content #pintu").change(function (e) {

    if (resetLayerSearch(), e.preventDefault(), $(this).prop("checked")) {
      var a = new google.maps.Data;
      ("undefined" == typeof layer.pintu || null == layer.pintu) && (drawPintu(a, null, null, map), layer.pintu = a)
    } else "undefined" != typeof layer.pintu && (null != layer.pintu && (layer.pintu.setMap(null), layer.pintu.revertStyle()), layer.pintu = null)

  }),$("#daftar-layer-content #revertmen").change(function (e) {

    if (resetLayerSearch(), e.preventDefault(), $(this).prop("checked")) {
      var a = new google.maps.Data;
      ("undefined" == typeof layer.revertmen || null == layer.revertmen) && (drawRevertmen(a, null, null, map), layer.revertmen = a)
    } else "undefined" != typeof layer.revertmen && (null != layer.revertmen && (layer.revertmen.setMap(null), layer.revertmen.revertStyle()), layer.revertmen = null)

  }),$("#daftar-layer-content #tebing").change(function (e) {

		if (resetLayerSearch(), e.preventDefault(), $(this).prop("checked")) {
			var a = new google.maps.Data;
			("undefined" == typeof layer.tebing || null == layer.tebing) && (drawTebing(a, null, null, map), layer.tebing = a)
		} else "undefined" != typeof layer.tebing && (null != layer.tebing && (layer.tebing.setMap(null), layer.tebing.revertStyle()), layer.tebing = null)

	}),$("#daftar-layer-content #cekdam").change(function (e) {

		if (resetLayerSearch(), e.preventDefault(), $(this).prop("checked")) {
			var a = new google.maps.Data;
			("undefined" == typeof layer.cekdam || null == layer.cekdam) && (drawCekdam(a, null, null, map), layer.cekdam = a)
		} else "undefined" != typeof layer.cekdam && (null != layer.cekdam && (layer.cekdam.setMap(null), layer.cekdam.revertStyle()), layer.cekdam = null)

	}), $("#daftar-layer-content #tanggul").change(function (e) {
    if (resetLayerSearch(), e.preventDefault(), $(this).prop("checked"))
      if ("undefined" == typeof layer.tanggul || null == layer.tanggul) {
        var a = new google.maps.Data;
        drawTanggul(a, null, null, map, !0), layer.tanggul = a
      } else drawTanggul(layer.tanggul, null, null, map, !1);
    else "undefined" != typeof layer.tanggul && null != layer.tanggul && (layer.tanggul.setMap(null), layer.tanggul.revertStyle())
  }), $("#daftar-layer-content #sungai").change(function (e) {
    
      // var promise = $.getJSON("<?php echo base_url('assets/geojson/sungai_1.geojson')?>"); //same as map.data.loadGeoJson();
			// promise.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise2 = $.getJSON("<?php echo base_url('assets/geojson/sungai_2.geojson')?>"); //same as map.data.loadGeoJson();
			// promise2.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise3 = $.getJSON("<?php echo base_url('assets/geojson/Sungai_Bengawan_Solo.geojson')?>"); //same as map.data.loadGeoJson();
			// promise3.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise4 = $.getJSON("<?php echo base_url('assets/geojson/sungai_4.geojson')?>"); //same as map.data.loadGeoJson();
			// promise4.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise5 = $.getJSON("<?php echo base_url('assets/geojson/sungai_6.geojson')?>"); //same as map.data.loadGeoJson();
			// promise5.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise6 = $.getJSON("<?php echo base_url('assets/geojson/Kali_Jetis_A.geojson')?>"); //same as map.data.loadGeoJson();
			// promise6.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });
      

      // var promise7 = $.getJSON("<?php echo base_url('assets/geojson/Kali_Kedawung.geojson')?>"); //same as map.data.loadGeoJson();
			// promise7.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise8 = $.getJSON("<?php echo base_url('assets/geojson/Kali_Tanggan.geojson')?>"); //same as map.data.loadGeoJson();
			// promise8.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise9 = $.getJSON("<?php echo base_url('assets/geojson/Kali_Dungringan.geojson')?>"); //same as map.data.loadGeoJson();
			// promise9.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise10 = $.getJSON("<?php echo base_url('assets/geojson/Kali_Precet_A.geojson')?>"); //same as map.data.loadGeoJson();
			// promise10.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise11 = $.getJSON("<?php echo base_url('assets/geojson/Kali_Kenatan.geojson')?>"); //same as map.data.loadGeoJson();
			// promise11.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise12 = $.getJSON("<?php echo base_url('assets/geojson/Kali_Jambe.geojson')?>"); //same as map.data.loadGeoJson();
			// promise11.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise13 = $.getJSON("<?php echo base_url('assets/geojson/Waduk_Gajah_Mungkur.geojson')?>"); //same as map.data.loadGeoJson();
			// promise13.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });

      // var promise14 = $.getJSON("<?php echo base_url('assets/geojson/Kali_Cekel.geojson')?>"); //same as map.data.loadGeoJson();
			// promise14.then(function(data){
			// 	cachedGeoJson = data; //save the geojson in case we want to update its values
			// 	map.data.addGeoJson(cachedGeoJson,{idPropertyName:"id"});  
      // });
      
      // map.data.setStyle({
      //    strokeColor: 'blue',
      //    strokeOpacity: 1.0,
      //    strokeWeight: 2
      // });
			
  
			
    if (resetLayerSearch(), e.preventDefault(), $(this).prop("checked"))
      if ("undefined" == typeof layer.sungai || null == layer.sungai) {
        var a = new google.maps.Data;
        drawSungai(a, null, null, map, !0), layer.sungai = a
      } else drawSungai(layer.sungai, null, null, map, !1);
    else "undefined" != typeof layer.sungai && null != layer.sungai && (layer.sungai.setMap(null), layer.sungai.revertStyle())
  }), $("#daftar-layer-content #sda").change(function (e) {
    if (resetLayerSearch(), resetLayer(), $(this).prop("checked")) {
      $("#daftar-layer-content .form-child").find('input[type="checkbox"]').prop("checked", !0);
      for (var a = $("#daftar-layer-content .form-child").find('input[type="checkbox"]'), t = 0; t < a.length; t++) $(a[t]).trigger("change")
    } else {
      $("#daftar-layer-content .form-child").find('input[type="checkbox"]').prop("checked", !1);
      for (var a = $("#daftar-layer-content .form-child").find('input[type="checkbox"]'), t = 0; t < a.length; t++) $(a[t]).trigger("change")
    }
  })
}

function addMataAirFunc(e, a) {
  e.addListener("mouseover", function (e) {
    console.log('masuk');
    var n = e.feature.getProperty("id"),
      r = e.feature.getGeometry().get();
      if(e.feature.getProperty("foto")==""){
        gambar = 'sungai-81_file1-.png';
      }else{
        gambar = e.feature.getProperty("foto");
      }
    null != infowindow && infowindow.close(), infowindow = new google.maps.InfoWindow({
     
      content: "<div class='pull-left'><img style='width:182px;height:122px;' class='img map-icon' src='<?php echo base_url('data/img/bangunan')?>/"+gambar+"' style='margin-top:10px;'></div><div class='pull-right' style='margin-left: 12px;'><h4 style='font-size: 12px;'><strong>" + e.feature.getProperty("nama") + "</strong></h4><hr><div class='text-center'><a class='btn-mataair-detail' data-pk='" + n + "' role='button'>Klik untuk detail....</a></div></div>"
    }), infowindow.setPosition(r), infowindow.setOptions({
      pixelOffset: new google.maps.Size(0, -20)
    }), infowindow.open(a)
  }), e.addListener("mouseout", function (a) {
    e.revertStyle()
  }), e.addListener("click", function (e) {
    var a = e.feature.getProperty("id"),
      t = e.feature.getGeometry().get();
    map.setCenter(t), map.setZoom(14), initMapsMataair(a)
  }), $(document).on("click", ".btn-mataair-detail", function (e) {
    e.preventDefault();
    var a = $(this).data("pk");
    initMapsMataair($(this).data("pk"))
  })
}

function addInfrastrukturTerbangunFunc(e, a) {
  e.addListener("mouseover", function (e) {
    console.log('masuk');
    var n = e.feature.getProperty("id"),
      r = e.feature.getGeometry().get();
      if(e.feature.getProperty("foto")==""){
        gambar = 'sungai-81_file1-.png';
      }else{
        gambar = e.feature.getProperty("foto");
      }
    null != infowindow && infowindow.close(), infowindow = new google.maps.InfoWindow({
      content: "<div class='pull-left'><img style='width:182px;height:122px;' class='img map-icon' src='<?php echo base_url('data/img/bangunan')?>/"+gambar+"' style='margin-top:10px;'></div><div class='pull-right' style='margin-left: 12px;'><h4 style='font-size: 12px;'><strong>" + e.feature.getProperty("nama") + "</strong></h4><hr><div class='text-center'><a class='btn-terbangun-detail' data-pk='" + n + "' role='button'>Klik untuk detail....</a></div></div>"
    }), infowindow.setPosition(r), infowindow.setOptions({
      pixelOffset: new google.maps.Size(0, -20)
    }), infowindow.open(a)
  }), e.addListener("mouseout", function (a) {
    e.revertStyle()
  }), e.addListener("click", function (e) {
    var a = e.feature.getProperty("id"),
      t = e.feature.getGeometry().get();
    map.setCenter(t), map.setZoom(14), initMapsTerbangun(a)
  }), $(document).on("click", ".btn-terbangun-detail", function (e) {
    e.preventDefault();
    var a = $(this).data("pk");
    initMapsTerbangun($(this).data("pk"));
  }), Pace.stop()
}

function addPintuFunc(e, a){
  e.addListener("mouseover", function (e) {
    console.log('masuk');
    var n = e.feature.getProperty("id"),
      r = e.feature.getGeometry().get();
      
    null != infowindow && infowindow.close(), infowindow = new google.maps.InfoWindow({
      content: "<div class='pull-left'><img style='width:182px;height:122px;' class='img map-icon' src='<?php echo base_url('data/img/bangunan/sungai-81_file1-.png')?>' style='margin-top:10px;'></div><div class='pull-right' style='margin-left: 12px;'><h4 style='font-size: 12px;'><strong>" + e.feature.getProperty("nama") + "</strong></h4><h4><strong>" + e.feature.getProperty("kode_lokasi") + "</strong></h4><hr><div class='text-center'><a class='btn-pintu-detail' data-pk='" + n + "' role='button'>Klik untuk detail....</a></div></div>"
    }), infowindow.setPosition(r), infowindow.setOptions({
      pixelOffset: new google.maps.Size(0, -20)
    }), infowindow.open(a)
  }), e.addListener("mouseout", function (a) {
    e.revertStyle()
  }), e.addListener("click", function (e) {
    var a = e.feature.getProperty("id"),
      t = e.feature.getGeometry().get();
    map.setCenter(t), map.setZoom(14), initMapsPintu(a)
  }), $(document).on("click", ".btn-pintu-detail", function (e) {
    e.preventDefault();
    var a = $(this).data("pk");
    initMapsPintu($(this).data("pk"));
  })
}

function addRevertmenFunc(e, a){
  e.addListener("mouseover", function (e) {
    console.log('masuk');
    var n = e.feature.getProperty("id"),
      r = e.feature.getGeometry().get();
      
    null != infowindow && infowindow.close(), infowindow = new google.maps.InfoWindow({
      content: "<div class='pull-left'><img style='width:182px;height:122px;' class='img map-icon' src='<?php echo base_url('data/img/bangunan/sungai-81_file1-.png')?>' style='margin-top:10px;'></div><div class='pull-right' style='margin-left: 12px;'><h4 style='font-size: 12px;'><strong>" + e.feature.getProperty("nama") + "</strong></h4><hr><div class='text-center'><a class='btn-revertmen-detail' data-pk='" + n + "' role='button'>Klik untuk detail....</a></div></div>"
    }), infowindow.setPosition(r), infowindow.setOptions({
      pixelOffset: new google.maps.Size(0, -20)
    }), infowindow.open(a)
  }), e.addListener("mouseout", function (a) {
    e.revertStyle()
  }), e.addListener("click", function (e) {
    var a = e.feature.getProperty("id"),
      t = e.feature.getGeometry().get();
    map.setCenter(t), map.setZoom(14), initMapsRevertmen(a)
  }), $(document).on("click", ".btn-revertmen-detail", function (e) {
    e.preventDefault();
    var a = $(this).data("pk");
    initMapsRevertmen($(this).data("pk"))
  })
}

function addTebingFunc(e, a){
	e.addListener("mouseover", function (e) {
    console.log('masuk');
    var n = e.feature.getProperty("id"),
      r = e.feature.getGeometry().get();
      
    null != infowindow && infowindow.close(), infowindow = new google.maps.InfoWindow({
      content: "<div class='pull-left'><img style='width:182px;height:122px;' class='img map-icon' src='<?php echo base_url('data/img/bangunan/sungai-81_file1-.png')?>' style='margin-top:10px;'></div><div class='pull-right' style='margin-left: 12px;'><h4 style='font-size: 12px;'><strong>" + e.feature.getProperty("nama") + "</strong></h4><hr><div class='text-center'><a class='btn-tebing-detail' data-pk='" + n + "' role='button'>Klik untuk detail....</a></div></div>"
    }), infowindow.setPosition(r), infowindow.setOptions({
      pixelOffset: new google.maps.Size(0, -20)
    }), infowindow.open(a)
  }), e.addListener("mouseout", function (a) {
    e.revertStyle()
  }), e.addListener("click", function (e) {
    var a = e.feature.getProperty("id"),
      t = e.feature.getGeometry().get();
    map.setCenter(t), map.setZoom(14), initMapsTebing(a);
  }), $(document).on("click", ".btn-tebing-detail", function (e) {
    e.preventDefault();
    var a = $(this).data("pk");
    initMapsTebing($(this).data("pk"));
  })
}

function addCekdamFunc(e, a){
	e.addListener("mouseover", function (e) {
    console.log('masuk');
    var n = e.feature.getProperty("id"),
      r = e.feature.getGeometry().get();
      
    null != infowindow && infowindow.close(), infowindow = new google.maps.InfoWindow({
      content: "<div class='pull-left'><img style='width:182px;height:122px;' class='img map-icon' src='<?php echo base_url('data/img/bangunan/sungai-81_file1-.png')?>' style='margin-top:10px;'></div><div class='pull-right' style='margin-left: 12px;'><h4 style='font-size: 12px;'><strong>" + e.feature.getProperty("nama") + "</strong></h4><hr><div class='text-center'><a class='btn-cekdam-detail' data-pk='" + n + "' role='button'>Klik untuk detail....</a></div></div>"
    }), infowindow.setPosition(r), infowindow.setOptions({
      pixelOffset: new google.maps.Size(0, -20)
    }), infowindow.open(a)
  }), e.addListener("mouseout", function (a) {
    e.revertStyle()
  }), e.addListener("click", function (e) {
    var a = e.feature.getProperty("id"),
      t = e.feature.getGeometry().get();
    map.setCenter(t), map.setZoom(14), initMapsCekdam(a)
  }), $(document).on("click", ".btn-cekdam-detail", function (e) {
    e.preventDefault();
    var a = $(this).data("pk");
    initMapsCekdam($(this).data("pk"));
  })
}

function addTanggulFunc(e, a) {
  e.addListener("mouseover", function (n) {
    null != infowindow && infowindow.close(), infowindow = new google.maps.InfoWindow({
      content: "<div class='pull-left'><img style='width:182px;height:122px;' class='img map-icon' src='<?php echo base_url('data/img/bangunan/sungai-81_file1-.png')?>' style='margin-top:10px;'></div><div class='pull-right' style='margin-left: 12px;'><h4 style='font-size: 12px;'><strong>" + n.feature.getProperty("nama") + "</strong></h4><hr><div class='text-center'><a class='btn-tanggul-detail' data-pk='" + n.feature.getProperty("id") + "' role='button'>Klik untuk detail....</a>                                </div></div>"
    }), infowindow.setPosition(n.latLng), infowindow.open(a), e.overrideStyle(n.feature, {
      strokeWeight: 4,
      strokeOpacity: .8
    })
  }), e.addListener("mouseout", function (a) {
    e.revertStyle()
  }), e.addListener("click", function (e) {
    var a = e.feature.getProperty("id");
    initMapsTanggul(a);
  }), $(document).on("click", ".btn-tanggul-detail", function (e) {
    e.preventDefault();
    var a = $(this).data("pk");
    initMapsTanggul(a);
  })
}

function addSungaiFunc(e, a){
  e.addListener("mouseover", function (n) {
    if(n.feature.getProperty("NAMA_SUNGAI")!="Sungai Bengawan Solo"){
      var action ="<div class='text-center'><a class='btn-sungai-detail' data-pk='" + n.feature.getProperty("id") + "' role='button'>Klik untuk detail....</a> </div>";
    }else{
      var action = '';
    } 

    null != infowindow && infowindow.close(), infowindow = new google.maps.InfoWindow({
      content: "<div class='pull-left'><img style='width:182px;height:122px;' class='img map-icon' src='<?php echo base_url('data/img/bangunan/sungai-81_file1-.png')?>' style='margin-top:10px;'></div><div class='pull-right' style='margin-left: 12px;'><h4 style='font-size: 12px;'><strong>" + n.feature.getProperty("NAMA_SUNGAI") + "</strong></h4><hr>"+action+" </div>"
    }), infowindow.setPosition(n.latLng), infowindow.open(a), e.overrideStyle(n.feature, {
      strokeWeight: 4,
      strokeOpacity: .8
    })
  }), e.addListener("mouseout", function (a) {
    e.revertStyle()
  }), e.addListener("click", function (e) {
    var a = e.feature.getProperty("id");
    initMapsSungai(a);
  }), $(document).on("click", ".btn-sungai-detail", function (e) {
    e.preventDefault();
    var a = $(this).data("pk");
    initMapsSungai(a);
  })
}

function initMapsMataair(e) {
      $("#modelMataairDetail").modal("show");      
      $.ajax({
          type : 'post',
          url : link+"/create_load_ongoing/"+e,
          data :  'id_infrastruktur_ongoing='+ e,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data");
            a.innerHTML= data;//menampilkan data ke dalam modal
            a.style.display="block";
          }
      }); 
}

function initMapsTerbangun(e) {
 $("#modelTerbangunDetail").modal("show");
 $.ajax({
     type : 'post',
     url : link+"/create_load_bangunan/"+e,
     data :  'id_infrastruktur='+ e,
     success : function(data){
       //console.log(data);
       var a = document.getElementById("fetched-data2");
       a.innerHTML= data;//menampilkan data ke dalam modal
       a.style.display="block";
     }
 }); 
}

function initMapsPintu(e) {
      $("#modelPintuDetail").modal("show");    
      $.ajax({
          type : 'post',
          url : link+"/create_load_pintu/"+e,
          data :  'fv_idpintu='+ e,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data_pintu");
            a.innerHTML= data;//menampilkan data ke dalam modal
            a.style.display="block";
          }
      });
}

function initMapsRevertmen(e){
    $("#modelRevertmenDetail").modal("show");
      $.ajax({
          type : 'post',
          url : link+"/create_load_revertmen/"+e,
          data :  'fn_id_rivertmen='+ e,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data_revertmen");
            a.innerHTML= data;//menampilkan data ke dalam modal
            a.style.display="block";
          }
      });
}

function initMapsTebing(e){
    $("#modelTebingDetail").modal("show");
      $.ajax({
          type : 'post',
          url : link+"/create_load_tebing2/"+e,
          data :  'id_tebing='+ e,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data_tebing");
            a.innerHTML= data;//menampilkan data ke dalam modal
            a.style.display="block";
          }
      });
}

function initMapsCekdam(e){
        $("#modelCekdamDetail").modal("show");
		$.ajax({
          type : 'post',
          url : link+"/create_load_cekdam/"+e,
          data :  'id_cekdam='+ e,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data_cekdam");
            a.innerHTML= data;//menampilkan data ke dalam modal
            a.style.display="block";
          }
        });
}

function initMapsTanggul(e){
    $("#modelTanggulDetail").modal("show");
    $.ajax({
          type : 'post',
          url : "<?php echo base_url()?>peta_dashboard/create_load_tanggul/"+e,
          data :  'fn_idtanggul='+ e,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data_tanggul");
             a.innerHTML= data;//menampilkan data ke dalam modal
            a.style.display="block";
          }
      });
}

function initMapsSungai(e){
    $("#modelSungaiDetail").modal("show");
      $.ajax({
          type : 'post',
          url : link+"/create_load/"+e,
          data :  'id_sungai='+ e,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data_sungai");
          a.innerHTML= data;//menampilkan data ke dalam modal
          a.style.display="block";
          }
      });
}

// var headers_app = {
//   Authorization: $('meta[name="app_key"]').attr("content")
// };
$("#daftar_layer").draggable({
  addClasses: !1,
  containment: "#map"
}), $("#daftar_layer_das").draggable({
  addClasses: !1,
  containment: "#map-detail-das"
}), $(".legend-map").draggable({
  addClasses: !1,
  containment: "#map"
}), $(".legend-map").resizable({
  alsoResize: "#mirror",
  animate: !0
}), $("#search_layer_das").draggable({
  addClasses: !1,
  containment: "#map-detail-das"
}), $("#search_layer").draggable({
  addClasses: !1,
  containment: "#map"
});

$("#modelWsDetail").on("shown.bs.modal", function (e) {
  e.preventDefault(), initMapsWS($(this).data("pk"))
}), $("#modelDasDetail").on("shown.bs.modal", function (e) {
  e.preventDefault(), initMapsDas($(this).data("pk"))
}), $("#modelBendungDetail").on("shown.bs.modal", function (e) {
  e.preventDefault();
  var a = $(this).data("tipe");
  switch (a) {
    case 'embung':
      $('#tab-foto').html("Foto Embung")
      $('#tab-video').html("Video Embung")
      break;
    case 'bendung':
      $('#tab-foto').html("Foto Bendung")
      $('#tab-video').html("Video Bendung")
      break;
    case 'bendungan':
      $('#tab-foto').html("Foto Bendungan")
      $('#tab-video').html("Video Bendungan")
      break;
    default:
      break;
  }
  initMapsBendung($(this).data("pk"), a)
}), $("#modelAirTanahDetail").on("hidden.bs.modal", function (e) {
  e.preventDefault(), $("#foto-pat").children("div").remove(), $("#video-pat").children("div").remove(), $("tbody#konstruksi-data").children("tr").remove()
  removeChildComp('video-pat');
  removeChildComp('foto-pat');
}), $(document).on("click", ".info", function (e) {
  e.preventDefault();
  for (var a = [], t = $(this).parents(".modal").attr("id"), n = ($(this).parents(".view").find("img").attr("src"), $(this).parents(".galery-thumb").find(".view").find("img")), r = 0; r < n.length; r++) a.push($(n[r]).attr("src"));
  SetImageToSlider(a, t)
}), $(document).on("shown.bs.modal", ".modal", function (e) {
  var a = 1040 + 10 * $(".modal:visible").length;
  $(this).css("z-index", a), setTimeout(function () {
    $(".modal-backdrop").not(".modal-stack").css("z-index", a - 1).addClass("modal-stack")
  }, 0)
});

</script>

</body>
</html>