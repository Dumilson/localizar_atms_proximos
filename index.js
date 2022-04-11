// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
var lat;
var lng

function getValue(data){
 fetch("reques_api.php?location="+data.value)
   .then((resp) => resp.json())
   .then(function (data) {
      document.getElementById("places").innerHTML = ""
      lat = data.lat 
      lng = data.lng
      setTimeout(initMap(lat,lng),1000)
   })
   .catch(function (error) {
     console.log(error);
   });
 }

function initMap(lat,lng) {

  var pyrmont = { lat:lat, lng:lng };
  const map = new google.maps.Map(document.getElementById("map"), {
    center: pyrmont,
    zoom: 17,
    mapId: "8d193001f940fde3",
  });
  // Create the places service.
  const service = new google.maps.places.PlacesService(map);
  let getNextPage;
  const moreButton = document.getElementById("more");

  moreButton.onclick = function () {
    moreButton.disabled = true;
    if (getNextPage) {
      getNextPage();
    }
  };

  // Perform a nearby search.
  service.nearbySearch(
    { location: pyrmont, radius: 500, type: ['atm'] },
    (results, status, pagination) => {
      if (status !== "OK" || !results) return;
      console.log(results)
      addPlaces(results, map);
      moreButton.disabled = !pagination || !pagination.hasNextPage;
      if (pagination && pagination.hasNextPage) {
        getNextPage = () => {
          // Note: nextPage will call the same handler function as the initial call
          pagination.nextPage();
        };
      }
    }
  );
}

function addPlaces(places, map) {
  const placesList = document.getElementById("places");

  for (const place of places) {
    if (place.geometry && place.geometry.location) {
      const image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
      };

      new google.maps.Marker({
        map,
        icon: image,
        title: place.name,
        position: place.geometry.location,
      });

      const li = document.createElement("li");

      li.textContent = place.name;
      placesList.appendChild(li);
      li.addEventListener("click", () => {
        map.setCenter(place.geometry.location);
      });
    }
  }
}