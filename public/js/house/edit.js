$(document).ready(function() {
    var street = $('input[name="address[street]"]').val();
    var number = $('input[name="address[number]"]').val();
    var additional = $('input[name="address[additional]"]').val();
    var city = $('input[name="address[city]"]').val();

    googleMapsPicture(street, number, additional, city, '.image-header');

    $(".datepicker").datepicker({dateFormat: 'dd-mm-yy'});

    $('input').on('change', function () {
        var street = $('input[name="address[street]"]').val();
        var number = $('input[name="address[number]"]').val();
        var additional = $('input[name="address[additional]"]').val();
        var city = $('input[name="address[city]"]').val();

        if (street && number && city) {
            googleMapsPicture(street, number, additional, city, '.image-header');
        }
    });
});