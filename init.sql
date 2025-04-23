CREATE TABLE IF NOT EXISTS sensor_data (
  id INT AUTO_INCREMENT PRIMARY KEY,
  temperature FLOAT,
  humidity FLOAT,
  power_usage FLOAT,
  timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO sensor_data (temperature, humidity, power_usage) VALUES (25.5, 50.2, 110);
