<!DOCTYPE html>
<html>

<head>
  <title>Pesquisar</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <link rel="stylesheet" type="text/css" href="./style.css" />
  <script src="./index.js"></script>
  <script src="./auto.js"></script>
</head>

<body>
  <div id="container">
    <div id="map"></div>
    <div id="sidebar">
      <h2>Restultados</h2>
      <div>
          <input type="text" placeholder="Insira a Localização mais proxima" oninput="getValue(this)"
          id="ship-address"
          name="ship-address"
          required
          autocomplete="off"
          >
      </div>
      <ul id="places"></ul>
      <button id="more">Mais Resultados</button>
    </div>
  </div>

  <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ8vVyCoHrvZuGxuhcwhlDEZtevVyoo8&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsJ8vVyCoHrvZuGxuhcwhlDEZtevVyoo8&callback=initMap&libraries=places&v=weekly"
    async></script>
</body>

</html>