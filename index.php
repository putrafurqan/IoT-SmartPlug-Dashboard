<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IoT Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: #f0f2f5;
      padding: 2rem;
    }

    h1 {
      text-align: center;
      margin-bottom: 2rem;
      color: #333;
    }

    .dashboard {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 1.5rem;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h2 {
      font-size: 1.25rem;
      color: #555;
      margin-bottom: 1rem;
    }

    .value {
      font-size: 2rem;
      font-weight: bold;
      color: #0077ff;
    }

    .timestamp {
      font-size: 0.85rem;
      color: #888;
      margin-top: 0.5rem;
    }

    footer {
      text-align: center;
      margin-top: 3rem;
      color: #777;
    }
  </style>
</head>
<body>

  <h1>IoT Smartplug Dashboard</h1>

  <div class="dashboard">
    <div class="card">
      <h2>Temperature</h2>
      <div class="value" id="temp">-- °C</div>
      <div class="timestamp" id="temp-time">Updated just now</div>
    </div>

    <div class="card">
      <h2>Humidity</h2>
      <div class="value" id="humidity">-- %</div>
      <div class="timestamp" id="humidity-time">Updated just now</div>
    </div>

    <div class="card">
      <h2>Power Usage</h2>
      <div class="value" id="power">-- W</div>
      <div class="timestamp" id="power-time">Updated just now</div>
    </div>
  </div>

  <footer>
    &copy; <?php echo date("Y"); ?> EMS Dashboard Prototyping
  </footer>

  <script>
    // Simulate real-time values (replace this with AJAX/fetch for live data)
    function getRandom(min, max) {
      return (Math.random() * (max - min) + min).toFixed(1);
    }

    function updateDashboard() {
      document.getElementById('temp').textContent = `${getRandom(20, 30)} °C`;
      document.getElementById('humidity').textContent = `${getRandom(40, 60)} %`;
      document.getElementById('power').textContent = `${getRandom(50, 150)} W`;

      const now = new Date().toLocaleTimeString();
      document.getElementById('temp-time').textContent = `Updated at ${now}`;
      document.getElementById('humidity-time').textContent = `Updated at ${now}`;
      document.getElementById('power-time').textContent = `Updated at ${now}`;
    }

    updateDashboard();
    setInterval(updateDashboard, 10); // Refresh every 5 seconds
  </script>

</body>
</html>
