function getZipLocation() {
  let zip = $("#zipcode").val();
  console.log("Zip code : " + zip);
  $.get({ 
    url: `https://api.worldpostallocations.com/pincode?postalcode=${zip}&countrycode=IN`,
    success: (data) => {
      //   console.log(data);
      $(".location").css("display", "revert");
      var village = data.result;
      //   alert(data.result.length)

      // Getting Longitude and latitude
      localStorage.setItem("latitude", village[0].latitude);
      localStorage.setItem("longitude", village[0].longitude);

      console.log(village);
      $.each(village, function (index, value) {
        //   console.log("Village Name: " + village[index].postalLocation);
        $("#village").append(
          "<option value=" +
            village[index].postalLocation +
            ">" +
            village[index].postalLocation +
            "</option>"
        );
      });
      $("#province").text(data["result"][0].province);
      $("#district").text(data["result"][0].district);
      $("#state").text(data["result"][0].state);
    },
    error: (data) => {
      console.log(data);
    },
  });
}

function test() {
  $("#zipcode").keyup(function (event) {
    if (event.which === 13) {
      getZipLocation();
    }
  });
}

function saveLocation() {
  localStorage.setItem("Village", $("#village").val());
  localStorage.setItem("taluko", $("#province").text());
  localStorage.setItem("District", $("#district").text());
  localStorage.setItem("state", $("#state").text());
  localStorage.setItem("zipcode", $("#zipcode").val());
  console.log("Location Saved Succesfully");
  alert("Location saved Succesfully");
}
