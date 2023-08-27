// Open weather API:  2d480b390f0a798553d5c58f302ec0f9

// Declaring the variables
let lon;
let lat;
let cityname,
  weatherState,
  temperature,
  humanity,
  pressure,
  visibility,
  sunrise,
  sunset,
  feelsLike,
  windDirection,
  windSpeed;
//   Formating Date
var d = new Date();
var weekday = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
];
let month = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];
let WIND_DIRECTION;

window.addEventListener("load", () => {
  // Getting Location Information using Navigator 
  // if (navigator.geolocation) {
  //   navigator.geolocation.getCurrentPosition((position) => {
  //     // console.log(position);
  //     lon = position.coords.longitude;
  //     lat = position.coords.latitude;
  //   });
  // }


  // Fetching User's IP Address 
  let IP;
  $.get({
    url: "https://api.ipify.org?format=json",
    success: function (data) {
      console.log("Your IP Address is : " + data.ip);
      IP = data.ip;
    },
  });


  // Getting latitude And Longitude using IP address 
  $.get({
    url: `http://ip-api.com/json/${data.ip}`,
    success: function (data) {
      console.log("Your IP Address is : " + data.ip);
    },
  });
  // API ID
  const api = "2d480b390f0a798553d5c58f302ec0f9";
  const units = "metric";
  // API URL
  const base = `http://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&units=${units}&appid=${api}`;
  // const base = `api.openweathermap.org/data/2.5/forecast/daily?lat=22&lon=70&appid=${api}`;

  // Fetching data from API
  fetch(base)
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      // console.log(data);

      // Converting unix date to Local Date
      let unixTime = data.dt;
      date = new Date(unixTime * 1000);
      // console.log(date);
      // Getting Data from API Response
      cityname = data.name;
      temperature = Math.round(data.main["temp"]);
      pressure = data.main["pressure"];
      visibility = data.visibility;
      unixTime = data.sys["sunrise"];
      sunrise = new Date(unixTime * 1000);
      unixTime = data.sys["sunset"];
      sunset = new Date(unixTime * 1000);
      feelsLike = Math.round(data.main["feels_like"]);
      windDirection = data.wind["deg"];
      windSpeed = data.wind["speed"];
      humanity = data.main["humidity"];
      weatherState = data.weather[0].description;
      // console.log(weatherState);

      // Get open weather ICons From here
      // http://openweathermap.org/img/w/01n.png

      $("#date").text(
        weekday[d.getDay()] +
          ", " +
          d.getDate() +
          "/" +
          month[d.getMonth()] +
          "/" +
          d.getFullYear()
      );

      $(".location").text(cityname);
      $("#desc").text(weatherState);
      $("#temp").text(temperature);
      $("#hd").text(humanity);
      $("#pd").html("&uarr; " + pressure + " mb");
      $("#vd").text(visibility);

      // Setting Sunrise & Sunset time to local time
      // sun rise time
      var srd = new Date(sunrise * 1000);
      $("#srd").text(srd.getHours() + " : " + srd.getMinutes());
      // sun set time
      var ssd = new Date(sunset * 1000);
      $("#ssd").text(ssd.getHours() + " : " + ssd.getMinutes());

      $("#feel").text(feelsLike);

      // Setting Wind Direction
      function getWindDirection(d) {
        switch (true) {
          case 0:
          case 360:
            WIND_DIRECTION = "N";
            break;
          case 90:
            WIND_DIRECTION = "E";
            break;
          case 180:
            WIND_DIRECTION = "S";
            break;
          case 270:
            WIND_DIRECTION = "W";
            break;
          case d > 0 && d < 90:
            WIND_DIRECTION = "NE";
            break;
          case d > 90 && d < 180:
            WIND_DIRECTION = "SE";
            break;
          case d > 180 && d < 270:
            WIND_DIRECTION = "SW";
            break;
          case d > 270 && d < 360:
            WIND_DIRECTION = "NW";
            break;
          default:
            WIND_DIRECTION = "-";
            break;
        }

        return WIND_DIRECTION;
      }
      $("#dd").text(getWindDirection(windDirection));

      // Converting Wind speed from mile to Kilometers
      windSpeed = parseFloat(windSpeed * 1.609).toFixed(2);
      $("#sd").text(windSpeed + " km/h");

      $("#max").text(Math.round(data.main["temp_max"]));
      $("#min").text(Math.round(data.main["temp_min"]));
    });
});
