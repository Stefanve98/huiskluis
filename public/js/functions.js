function googleMapsPicture(street, number, additional, city, imagePlace) {
    console.log($(imagePlace));
    var googleMapsKey = 'AIzaSyAFFq4olLlonitvQnSWOjNQAkwJswu-fpM';
    var image_url = 'https://maps.googleapis.com/maps/api/streetview?size=250x250&location=' + street + ' ' + number + additional + ',' + city +'&key=' + googleMapsKey;
    var image = '<img src="' + image_url + '" width="200px" height="200px">';
    $(imagePlace).html(image);
}