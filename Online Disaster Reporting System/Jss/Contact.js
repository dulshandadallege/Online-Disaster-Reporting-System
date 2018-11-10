    
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
 
  <body>
     <div id="Dtitle"><h2 id="Mdisaster">Tsunami</h2>
              <h5 align = "Right">Matara,Sri L anka 02/05/2012</h5>
     </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 5.9493, lng: 80.5353};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMDBoZ6m4ntG6ZgtrAG_i9GK_BOtFpxsw&callback=initMap">
    </script>
      