      function initMap() {
        var location = {lat: -34.6012505, lng: -58.4024176};
        var map = new google.maps.Map(document.getElementById('maps'), {
          zoom: 18,
          center: location
        });
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
      }
