<!DOCTYPE html>
<html>

<head>
  <title>Place Search Pagination</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <link rel="stylesheet" type="text/css" href="./style.css" />
  <script src="./index.js"></script>
</head>

<body>
  <div id="container">
    <div id="map"></div>
    <div id="sidebar">
      <h2>Restultados</h2>
      <div>
        <form action="" method="post" id="form">
          <input type="text" placeholder="Insira a Localização mais proxima" id="input_location" oninput="getValue(this)">
        </form>
      </div>
      <ul id="places"></ul>
      <button id="more">Mais Resultados</button>
    </div>
  </div>

  <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ8vVyCoHrvZuGxuhcwhlDEZtevVyoo8&callback=initMap&libraries=places&v=weekly"
    async></script>
<<<<<<< HEAD

  <script>

    fetch("http://localhost/localizar_atms_proximos/reques_api.php")
      .then((resp) => resp.text())
      .then(function (data) {
        console.log(data)
      })
      .catch(function (error) {
        console.log(error);
      });
  </script>
=======
>>>>>>> a43f09b6f500de099df64d878c9daee5134928c3
</body>

</html>