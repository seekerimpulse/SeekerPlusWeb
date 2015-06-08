// VARIABLES GLOBALES JAVASCRIPT
var geocoder;
var marker;
var latLng;
var latLng2;
var map;
var circle;
var latitude=4.34360;
var longitude=-74.3619;

// INICiALIZACION DE MAPA
function initialize() {
  geocoder = new google.maps.Geocoder();  
  latLng = new google.maps.LatLng(parseFloat(latitude),parseFloat(longitude));
  map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom:14,
    center: latLng,
	mapTypeControl: false,
	streetViewControl : false,
    disableDefaultUI: true,
    zoomControl: false,
    mapTypeControl: false,
    zoomControlOptions: {
        style: google.maps.ZoomControlStyle.LARGE,
        position: google.maps.ControlPosition.TOP_LEFT
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
    
  });

	//CREACION DEL MARCADOR  
	  marker = new google.maps.Marker({
	  position: latLng,
	  title: 'Arrastra el marcador si quieres moverlo',
	  map: map,
	  draggable: true
	});
 
	  marker.setIcon("http://localhost/SeekerPlusWeb/images/map/here.png");
	  
	//CREACION DEL CIRCULO
	  circle = new google.maps.Circle({
	      map: map,
	      radius: 100,
	      strokeWeight: 0,
	      strokePosition: google.maps.StrokePosition.CENTER,
	      fillColor: '#1BA1E2'
	    });

	 circle.bindTo('center', marker, 'position');
     updateMarkerPosition (latLng);
// Escucho el CLICK sobre el mama y si se produce actualizo la posicion del marcador
     google.maps.event.addListener(map, 'click', function(event) {
     updateMarker(event.latLng);
   });
  // Inicializo los datos del marcador
  //    updateMarkerPosition(latLng);
     
      geocodePosition(latLng);
 
  // Permito los eventos drag/drop sobre el marcador
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Buscando...');
  });
 
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Buscando...');
    updateMarkerPosition(marker.getPosition());
  });
 
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Arrastre finalizado');
    geocodePosition(marker.getPosition());
  });
 
}

// Permito la gesti¢n de los eventos DOM
//google.maps.event.addDomListener(window, 'load', initialize);

// ESTA FUNCION OBTIENE LA DIRECCION A PARTIR DE LAS COORDENADAS POS
function geocodePosition(pos) {    
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('No puedo encontrar esta direccion.');
    }
  });
}

// OBTIENE LA DIRECCION A PARTIR DEL LAT y LON DEL FORMULARIO
function codeLatLon() {
   /*   latLng2 = new google.maps.LatLng(
    		  $("#seekerplus_adsmanagerbundle_adsmanagerads_adLatitude").val() ,
    		  $("#seekerplus_adsmanagerbundle_adsmanagerads_adLongitude").val()
      );
      marker.setPosition(latLng2);
      map.setCenter(latLng2);
      geocodePosition (latLng2);*/
}

// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress() {
   /*     var address = $("#address").html();
          geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
             updateMarkerPosition(results[0].geometry.location);
             marker.setPosition(results[0].geometry.location);
             map.setCenter(results[0].geometry.location);
           } else {
            alert('ERROR : ' + status);
          }
        });*/
      }

// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress2 (address) {
 /*         
          geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
             updateMarkerPosition(results[0].geometry.location);
             marker.setPosition(results[0].geometry.location);
             map.setCenter(results[0].geometry.location);
             $("#address").html(address);
           } else {
            alert('ERROR : ' + status);
          }
        });*/
      }

function updateMarkerStatus(str) {
  //$("#address").html(str)
}

function updateMarkerPosition (latLng) {
 $("#seekerplus_adsmanagerbundle_adsmanagerads_adLatitude").val(latLng.lat());
 $("#seekerplus_adsmanagerbundle_adsmanagerads_adLongitude").val(latLng.lng());
}

function updateMarkerAddress(str) {
  $("#address").html(str);
}

// ACTUALIZO LA POSICION DEL MARCADOR
function updateMarker(location) {
        marker.setPosition(location);
        updateMarkerPosition(location);
        geocodePosition(location);
      }
function getMyLocation(){

               dragActive = false;
               watcher = navigator.geolocation.watchPosition(function(position){
                var date = new Date();
                var hour = date.getHours();
                var minutes = date.getMinutes();
                var seconds = date.getSeconds();
                var datetime = hour+':'+minutes+':'+seconds;
                var distance = 0;


                currentPosition = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

                marker.setPosition(currentPosition);
                updateMarkerPosition (currentPosition);
                geocodePosition(currentPosition);
                // Desactivar el seguimiento cuando se activa el drag
                if (!dragActive) {
                  map.setZoom(16);
                  circle.setVisible(true);
                  map.setCenter(currentPosition);
                }
              }, function(error){
                circle.setVisible(false);
              }, {
                enableHighAccuracy:true,
                maximumAge: 0,
                timeout: 1000
              });
        }
function stopLocation(){
    if ((navigator.geolocation) && (watcher !== null)) {
        navigator.geolocation.clearWatch(watcher);
        circle.setVisible(false);
        dragActive = true;
      }
}
