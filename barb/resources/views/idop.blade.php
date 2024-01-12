<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Időpont Foglalás</title>
  <link rel="stylesheet" href="idop.css">
</head>
<body>
  <h1>Időpont Foglalás</h1>
  
  <div id="calendar">
    <input type="datetime-local" id="appointment-time">
    <button onclick="bookAppointment()">Időpont Foglalása</button>
  </div>

  <div id="confirmation"></div>

  <script src="script.js"></script>
</body>
</html>