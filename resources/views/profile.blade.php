<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    .header {
      background-color: midnightblue;
      color: white;
      padding: 25px;
      border-radius: 5px 5px 0 0;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .header h2 {
      margin: 0;
      font-size: 1.5em;
    }

    .container {
      border: 1px solid #ccc;
      padding: 20px;
      margin: 20px auto;
      background-color: white;
    }

    .user-profile {
      max-width: 800px;
      margin: auto;
      padding: 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .user-info {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .user-info img {
      margin-right: 25px;
      width: 150px;
      height: 150px;
      border-radius: 50%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .user-info img:hover {
      transform: scale(1.1);
    }

    .user-info h2 {
      margin: 0;
    }

    .info-pratiques, .specialties, .payment-methods, .address, .geolocation {
      margin-bottom: 20px;
    }

    .info-pratiques ul, .specialties ul, .payment-methods ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .info-pratiques li, .specialties li, .payment-methods li {
      margin-bottom: 10px;
    }

    .specialty-badge {
      display: inline-block;
      padding: 5px 10px;
      background-color: #0056b3;
      color: white;
      border-radius: 5px;
      font-size: 0.9em;
    }

    #map {
      height: 400px;
      width: 100%;
    }

    .schedule-container {
      border: 1px solid #ccc;
      padding: 20px;
      margin: 20px;
    }

    .schedule-header {
      background-color: #c23182;
      color: white;
      padding: 10px;
      border-radius: 5px 5px 0 0;
    }

    .schedule-header img {
      float: left;
      margin-right: 10px;
    }

    .schedule-header h2 {
      margin: 0;
    }

    table.schedule {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      text-align: center;
      padding: 10px;
      border: 1px solid #ccc;
    }

    th {
      background-color: #f2f2f2;
    }

    .day-header {
      background-color: #f2f2f2;
      font-weight: bold;
      text-align: center;
      padding: 10px;
      border: 1px solid #ccc;
    }

    .time-slot {
      background-color: #49b5d3;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .time-slot:hover {
      background-color: #399dc0;
    }

    .schedule-button {
      background-color: #c23182;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-align: center;
      display: block;
      margin: 20px auto;
      transition: background-color 0.3s;
    }

    .schedule-button:hover {
      background-color: #a82067;
    }

    .right-arrow {
      float: right;
      margin-top: 10px;
    }
    .user-special {
  background-color: blue;
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  display: inline-block;
}

  </style>
</head>
<body>
  <div class="header">
    <h1>Profile du doctor {{$user->name}}</h1>
  </div>

  <div class="container">
    <div class="user-profile">
      <div class="user-info">
        <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}">
        <div>
          <h2>{{ $user->name }}</h2>
          <p class="user-special">{{ $user->special }}</p>
        </div>
      </div>
      
      <hr class="my-4">

      <div class="info-pratiques">
        <h3>Info pratiques</h3>
        <div class="address">
          <strong>Adresse:</strong>
          <p>{{ $user->city }}</p>
          <a href="#map">Voir sur la carte</a>
        </div>
        <div class="bio">
          <strong>Bio:</strong>
          <p>{{ $user->bio }}</p>
        </div>

        <div class="specialties">
          <strong>Spécialités:</strong>
          <ul>
            <li class="user-special">{{ $user->special }}</li>
          </ul>
        </div>
      </div>

      <hr class="my-4">

      <div class="schedule-container">
        <div class="schedule-header">
          <img src="calendar-icon.png" alt="Calendar Icon" width="30">
          <h2>Prendre Rendez-vous en ligne</h2>
        </div>
        <table class="schedule">
          <thead>
            <tr>
              <th class="day-header">Lun.<br>03/06</th>
              <th class="day-header">Mar.<br>04/06</th>
              <th class="day-header">Mer.<br>05/06</th>
              <th class="day-header">Jeu.<br>06/06</th>
              <th class="day-header">Ven.<br>07/06</th>
              <th class="day-header">Sam.<br>08/06</th>
              <th class="right-arrow">></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="time-slot">14:30</td>
              <td class="time-slot">09:00</td>
              <td class="time-slot">09:00</td>
              <td class="time-slot">09:00</td>
              <td class="time-slot">09:00</td>
              <td class="time-slot">09:00</td>
              <td></td>
            </tr>
            <tr>
              <td class="time-slot">15:00</td>
              <td class="time-slot">09:30</td>
              <td class="time-slot">09:30</td>
              <td class="time-slot">09:30</td>
              <td class="time-slot">09:30</td>
              <td class="time-slot">09:30</td>
              <td></td>
            </tr>
            <tr>
              <td class="time-slot">15:30</td>
              <td class="time-slot">10:00</td>
              <td class="time-slot">10:00</td>
              <td class="time-slot">10:00</td>
              <td class="time-slot">10:00</td>
              <td class="time-slot">10:00</td>
              <td></td>
            </tr>
            <tr>
              <td class="time-slot">16:00</td>
              <td class="time-slot">10:30</td>
              <td class="time-slot">10:30</td>
              <td class="time-slot">10:30</td>
              <td class="time-slot">10:30</td>
              <td class="time-slot">10:30</td>
              <td></td>
            </tr>
            <tr>
              <td class="time-slot">16:30</td>
              <td class="time-slot">11:00</td>
              <td class="time-slot">11:00</td>
              <td class="time-slot">11:00</td>
              <td class="time-slot">11:00</td>
              <td class="time-slot">11:00</td>
              <td></td>
            </tr>
            <tr>
              <td class="time-slot">17:00</td>
              <td class="time-slot">11:30</td>
              <td class="time-slot">11:30</td>
              <td class="time-slot">11:30</td>
              <td class="time-slot">11:30</td>
              <td class="time-slot">11:30</td>
              <td></td>
            </tr>
          </tbody>
        </table>
        <button class="schedule-button">Afficher plus d'horaires</button>
      </div>

      <hr class="my-4">

      <div class="geolocation">
        <h4>Géolocalisation</h4>
        <div id="map"></div>
      </div>
    </div>
  </div>

  <script>
    function initMap() {
      const location = { lat: 33.928992, lng: -6.900688 };
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: location,
      });
      const marker = new google.maps.Marker({
        position: location,
        map: map,
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</body>
</html>