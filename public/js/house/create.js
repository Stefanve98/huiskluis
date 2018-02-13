$(document).ready(function() {
    $('input').on('change', function () {
        var street = $('input[name="address[street]"]').val();
        var number = $('input[name="address[number]"]').val();
        var additional = $('input[name="address[additional]"]').val();
        var city = $('input[name="address[city]"]').val();

        if (street && number && city) {
            var googleMapsKey = 'AIzaSyAFFq4olLlonitvQnSWOjNQAkwJswu-fpM';
            var image_url = 'https://maps.googleapis.com/maps/api/streetview?size=250x250&location=' + street + ' ' + number + additional + ',' + city +'&key=' + googleMapsKey;
            var image = '<img src="' + image_url + '" width="200px" height="200px">';
            $('.image-header').html(image);
        }
    });
});