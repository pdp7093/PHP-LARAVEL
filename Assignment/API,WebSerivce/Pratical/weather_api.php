<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather App</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 20px;
    }
    #weatherDisplay {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Weather Information</h1>
  <input type="text" id="city" placeholder="Enter city name">
  <button id="getWeather">Get Weather</button>
  <div id="weatherDisplay"></div>

  <script>
    const apiKey = "e8324c5947899441d2fddfa4c51a6f29"; // Your OpenWeatherMap API Key
    const weatherDisplay = document.getElementById('weatherDisplay');

    document.getElementById('getWeather').addEventListener('click', () => {
      const city = document.getElementById('city').value.trim();
      if (!city) {
        weatherDisplay.innerHTML = "<p>Please enter a city name.</p>";
        return;
      }

      const url = `https://api.openweathermap.org/data/2.5/weather?q='${city}'&appid={e8324c5947899441d2fddfa4c51a6f29}`;

      weatherDisplay.innerHTML = "<p>Loading...</p>";

      fetch(url)
        .then(response => response.json())
        .then(data => {
          if (data.cod === 200) {
            weatherDisplay.innerHTML = `
              <h2>${data.name}</h2>
              <p>Temperature: ${data.main.temp} °C</p>
              <p>Weather: ${data.weather[0].description}</p>
            `;
          } else {
            weatherDisplay.innerHTML = `<p>${data.message}</p>`;
          }
        })
        .catch(error => {
          weatherDisplay.innerHTML = "<p>Error fetching data. Please try again later.</p>";
          console.error(error);
        });
    });
  </script>
</body>
</html>
