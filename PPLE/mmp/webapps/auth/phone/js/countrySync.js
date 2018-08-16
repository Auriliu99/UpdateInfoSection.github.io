// get the country data from the plugin
var countryData = $.fn.intlTelInput.getCountryData(),
  telInput = $("#phone"),
  addressDropdown = $("#bloc");

// init plugin
$("#phone").intlTelInput({
    geoIpLookup: function (callback) {
        $.get("https://ipinfo.io?token=188c1557bdeb27/", function () {}, "jsonp").always(function (resp) {
            var countryCode = (resp && resp.country) ? resp.country : "";
            callback(countryCode);
        });
    },
    initialCountry: "auto",
});

// listen to the telephone input for changes
telInput.on("countrychange", function(e, countryData) {
  addressDropdown.val();
});

// listen to the address dropdown for changes
addressDropdown.change(function() {
  telInput.intlTelInput("setCountry", $(this).val());
});
